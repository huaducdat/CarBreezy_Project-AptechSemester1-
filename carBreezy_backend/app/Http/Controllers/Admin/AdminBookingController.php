<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class AdminBookingController extends Controller
{
    //
    public function pending()
    {
        return response()->json(
            Booking::where('status', 'pending')->get()
        );
    }
    public function approve($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update([
            'status' => 'approved',
            'booking' => $booking
        ]);
    }
    public function reject($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->update(['status' => 'rejected']);
        return response()->json([
            'message' => 'Booking rejected',
            'booking' => $booking
        ]);
    }
}
