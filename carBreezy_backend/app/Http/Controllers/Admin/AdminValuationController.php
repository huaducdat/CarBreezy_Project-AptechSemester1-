<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valuation;

class AdminValuationController extends Controller
{
    //
    public function pending()
    {
        return response()->json(
            Valuation::where('status', 'pending')->get()
        );
    }
    public function approve($id){
        $valuation=Valuation::findOrFail($id);
        $valuation->update(['status' => 'approved']);
        return response()->json([
            'message' => 'Valuation approved',
            'valuation' => $valuation
        ]);
    }
    public function reject($id)
    {
        $valuation = Valuation::findOrFail($id);
        $valuation->update(['status' => 'rejected']);
        return response() ->json([
            'message' => 'Valuation rejected',
            'valuation' => $valuation
        ]);
    }
}
