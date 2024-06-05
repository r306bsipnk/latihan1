<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\PersonalAccessToken;

class PenggunaController extends Controller
{
    public function login(Request $request)
    {
        $email = request('email');
        $password = request('password');

        $pengguna = Pengguna::where('email', $email)->first();

        if($pengguna == null){
            return response()->json([
                'message' => 'Pengguna > '.$email.'tidak ditemukan'
            ],401);
        }
        if (!Hash::check($password, $pengguna->password)) {
            return response()->json([
                'message' => 'Email atau password salah',
            ], 401);
        }

        $token = Str::random(20);
        PersonalAccessToken::query()->insert([
            'name' => $pengguna->nama_lengkap,
            'tokenable_type' => 'App\Models\Pengguna',
            'tokenable_id' => $pengguna->id,
            'abilities' => '',
            'token' => $token
        ]);

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
        ]);
    }

public function data(Request $request)
    {
        $pengguna = Pengguna::paginate(10);

        return response()->json([
            'message' => 'Data pengguna berhasil ditampilkan',
            'data' => $pengguna,
        ]);
    }




}
