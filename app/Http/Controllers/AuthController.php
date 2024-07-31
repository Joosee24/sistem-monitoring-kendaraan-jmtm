<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('dashboard')
                ->with('status', 'Password benar!'); // Mengirimkan pesan sukses ke session
        }

        // Jika login gagal
        return redirect()->back()
            ->withErrors(['email' => 'Password salah atau email tidak ditemukan.']); // Mengirimkan pesan error ke session
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

