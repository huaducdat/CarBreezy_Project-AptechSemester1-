<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valuation;

class ValuationController extends Controller
{
    //
    public function create(Request $request)
    {
        $data = $request->validate([
            'car_model' => 'required|strings',
            'year' => 'required|integer',
            'mileage' => 'required|integer',
            'image_url' => 'required|strings',
        ]);
        $data['user_id'] = auth()->id();
        $valuation = Valuation::create($data);
        return response()->json([
            'message' => 'Valuation request created',
            'valuation' => $valuation
        ], 201);
    }
    public function myValuations()
    {
        return response()->json(
            Valuation::where('user_id', auth()->id())->get()
        );
    }
}
