<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class AdminCarController extends Controller
{
    //
    public function pending()
    {
        return response()->json(
            Car::where('status', 'pending')->with('images')->get()
        );
    }
    public function approve($id)
    {
        $car = Car::findOrFail($id);
        $car->update(['status' => 'approved']);
        return response()->json([
            'message' => 'Car approved',
            'car' => $car
        ]);
    }
    public function reject($id)
    {
        $car = Car::finOrFail($id);
        $car->update(['status' => 'rejected']);
        return response()->json([
            'message' => 'Car rejectd',
            'car' => $car
        ]);
    }
}
