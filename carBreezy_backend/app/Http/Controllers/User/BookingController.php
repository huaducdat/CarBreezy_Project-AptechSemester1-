<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    //
    public function create(Request $request){
        $data = $request->validate([
            'service_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'car_info' => 'required|string',
            'image_url' => 'required|string',
        ]);
        $data['user_id'] = auth()->id();
        $booking = Booking::create($data);
        return response()->json([
            'message' => 'Booking created',
            'booking' => $booking
        ], 201);
    }
    public function myBookings(){
        return response()->json(
            Booking::where('user_id', auth()->id())->get()
        );
    }
}
