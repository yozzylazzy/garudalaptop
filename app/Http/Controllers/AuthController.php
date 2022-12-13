<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->role == 'user') {
                return redirect()->intended('user');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $kredensil = $request->only('email', 'password');



        if (Auth::attempt($kredensil)) {
            return redirect()->route('admin')
                        ->with('pesan', "Berhasil Masuk Sebagai {$request->email}");
        }

        return redirect('login')->with('pesan',"Pengguna {$request->email} Tidak Ditemukan atau Password Salah");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }

}
