<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarImage;

class CarController extends Controller
{
    //
    public function create(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|integer',
            'mileage' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'images' => 'required|array',
        ]);
        $data['user_id'] = auth()->id();
        $car = Car::create($data);
        foreach ($request->images as $url) {
            CarImage::create([
                'car_id'    => $car->id,
                'image_url' => $url,
            ]);
        }
        return response()->json([
            'message' => 'Car listing created',
            'car' => $car->load('images')
        ], 201);
    }
    public function myCars()
    {
        return response()->json(
            Car::where('user_id', auth()->id())->with('images')->get()
        );
    }
}
