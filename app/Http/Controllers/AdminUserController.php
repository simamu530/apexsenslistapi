<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function postRegister(Request $data)
    {
        User::create([
            'id' => $data['id'], // idを更新することができるようにidを追加
            'admin' => $data['admin'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return response()->json([
            'data' => 'success'
        ], 200);
    }
    public function show($admin)
    {
        $item = User::find($admin);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
