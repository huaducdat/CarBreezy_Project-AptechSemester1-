<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RootController extends Controller
{
    //
    public function listAdmins()
    {
        return response()->json(
            User::where('role', 'admin')->get()
        );
    }
    public function createAdmin(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
            'phone' => 'nullable|string\max:20',
        ]);
        $data['password'] = bcrypt($data['password']);
        $data['role'] = 'admin';
        $admin = User::create($data);
        return response()->json([
            'message' => 'Admin created.',
            'admin' => $admin
        ], 201);
    }
    public function deleteAdmin($id)
    {
        $admin = User::where('role', 'admin')->findOrFail($id);
        $admin->delete();
        return response()->json([
            'message' => 'Admin deleted'
        ]);
    }
}
