<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingStorUpdateRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingController extends Controller
{
    public function bookingList():View
    {
        $bookings = Booking::orderBy('id', 'desc')
            ->select(['id', 'name', 'email', 'phone', 'pick_up_address', 'drop_of_address', 'weight_pcs', 'unit', 'product_description', 'bookingId', 'status', 'created_at'])
            ->get();
        return view('layouts.admin.booking.list', compact('bookings'));
    }

    public function customerBookingCreate() :View
    {
        return view('layouts.admin.booking.create');
    }

    public function customerBookingStore(BookingStorUpdateRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'pick_up_address' => $request->pick_up_address,
                'drop_of_address' => $request->drop_of_address,
                'weight_pcs' => $request->weight_pcs,
                'unit' => $request->unit,
                'product_description' => $request->product_description,
                'bookingId' => 'FM'.rand(10000, 99999),
            ];
            Booking::create($data);
            $this->setSuccessMessage('Customer Booking has been created.');
            return redirect()->route('customer.booking.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('customer.booking');
        }
    }

    public function customerBookingEdit($id) :View
    {
        $booking = Booking::find($id);
        return view('layouts.admin.booking.edit', compact('booking'));
    }

    public function customerBookingUpdate(BookingStorUpdateRequest $request, $id) : \Illuminate\Http\RedirectResponse
    {
        try {
            $dataUpdate = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'pick_up_address' => $request->pick_up_address,
                'drop_of_address' => $request->drop_of_address,
                'weight_pcs' => $request->weight_pcs,
                'unit' => $request->unit,
                'status' => $request->status,
                'product_description' => $request->product_description,
                'bookingId' => 'FM'.rand(10000, 99999),
            ];
            $bookingDataUpdate = Booking::find($id);
            $bookingDataUpdate->update($dataUpdate);
            $this->setSuccessMessage('Customer Booking has been updated.');
            return redirect()->route('customer.booking.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('customer.booking');
        }
    }

    public function customerBookingView($id) :View
    {
        $booking = Booking::find($id);
        return view('layouts.admin.booking.view', compact('booking'));
    }

    public function customerBookingDelete($id): \Illuminate\Http\RedirectResponse
    {
        try {
            $booking = Booking::find($id);
            $booking->delete();
            $this->setSuccessMessage('Customer Booking has been updated.');
            return redirect()->route('customer.booking.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('customer.booking');
        }
    }


    //Status change
    public function customerBookingPending($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 2;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerBookingWarehouse($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 3;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerBookingShipping($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 4;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerBookingCustoms($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 5;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerBookingBDWarehouse($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 6;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function customerBookingDelivered($id)
    {
        try {
            $booking = Booking::find($id);
            $booking->status = 7;
            $booking->save();
            $this->setSuccessMessage('Booking Status has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }
}
