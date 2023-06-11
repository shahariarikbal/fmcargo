<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Models\AddToCart;
use App\Models\Billing;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function customerRegister(CustomerRegisterRequest $request)
    {
        try {
            if ($request->avatar){
                $avatarName = time() .'.'.$request->avatar->extension();
                $request->avatar->move('customer/', $avatarName);
            }

           $customer = Customer::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => trim($request->email),
                'phone' => $request->phone,
                'password' => bcrypt($request->password),
                'avatar' => $avatarName
            ]);
            session()->put('userId', $customer->id);
            session()->put('userName', $customer->first_name . ' ' . $customer->last_name);
            session()->put('firstName', $customer->first_name);
            session()->put('lastName', $customer->last_name);
            session()->put('email', $customer->email);
            $this->setSuccessMessage('Your registration has been done.');
            return redirect('/');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerLogin(CustomerLoginRequest $request)
    {
        $customer = Customer::where('email', $request->email)->first();
        if (!$customer){
            $this->setErrorMessage('Email does not match');
            return redirect()->back();
        }else{
            if (password_verify($request->password, $customer->password)){
                session()->put('userId', $customer->id);
                session()->put('userName', $customer->first_name . ' ' . $customer->last_name);
                session()->put('firstName', $customer->first_name);
                session()->put('lastName', $customer->last_name);
                session()->put('email', $customer->email);
                $this->setSuccessMessage('You are login successfully');
                return redirect('/');
            }else{
                $this->setErrorMessage('Password does not match');
                return redirect()->back();
            }
        }
    }

    public function customerLogout()
    {
        session()->flush();
        $this->setSuccessMessage('You are logout successfully');
        return redirect('/');
    }

    //complete order
    public function completeOrder(CheckoutRequest $request)
    {
        DB::beginTransaction();
        // Billing table
        try {
           $billing = Billing::create([
                'user_id' => session()->has('userId') ? session()->get('userId') : null,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'division' => $request->division,
                'district' => $request->district,
                'post_code' => $request->post_code,
                'address' => $request->address,
            ]);
        }catch (ValidationException $exception){
            // Back to form with errors
            return redirect()->back()
                ->withErrors( $exception->getMessage() )
                ->withInput();
        }catch (\Exception $e){
            DB::rollBack();
            throw $e;
        }
        // Order table
        try {
           $order = Order::create([
                'billing_id' => $billing->id,
                'invoice_id' => rand(999999, 100000),
                'payment_type' => $request->payment,
                'total_price' => $request->total_price,
                'total_qty' => $request->total_qty,
            ]);
        }catch (ValidationException $exception){
            // Back to form with errors
            return redirect()->back()
                ->withErrors( $exception->getMessage() )
                ->withInput();
        }catch (\Exception $e){
            DB::rollBack();
            throw $e;
        }

        // Order details
        try {
            foreach ($request->product_id as $k => $orderDetails){
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $request->product_id[$k],
                    'price' => $request->price[$k],
                    'qty' => $request->qty[$k],
                ]);
            }
        }catch (ValidationException $exception){
            // Back to form with errors
            return redirect()->back()
                ->withErrors( $exception->getMessage() )
                ->withInput();
        }catch (\Exception $e){
            DB::rollBack();
            throw $e;
        }

        // Cart product delete
        try {
            $cartProducts = AddToCart::where('user_id', session()->get('userId'))->orWhere('ip_address', $request->ip())->get();
            foreach ($cartProducts as $cartProduct){
                $cartProduct->delete();
            }
        }catch (ValidationException $exception){
            // Back to form with errors
            return redirect()->back()
                ->withErrors( $exception->getMessage() )
                ->withInput();
        }catch (\Exception $e){
            DB::rollBack();
            throw $e;
        }
        // If we reach here, then
        // data is valid and working.
        // Commit the queries!
        DB::commit();
        $this->setSuccessMessage('Your order has been successfully completed. Thank you for shopping');
        return redirect()->back();
    }
}
