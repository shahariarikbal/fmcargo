<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

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
}
