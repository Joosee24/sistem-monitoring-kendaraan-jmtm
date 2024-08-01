<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Memproses login
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mendapatkan kredensial dari input
        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            $request->session()->regenerate(); // Regenerate session ID
            return redirect()->intended('admin/dashboard')
                ->with('status', 'Password benar!'); // Mengirimkan pesan sukses ke session
        }

        // Jika login gagal
        return redirect()->back()
            ->withErrors(['email' => 'Password salah atau email tidak ditemukan.']) // Mengirimkan pesan error ke session
            ->withInput(); // Mengirimkan kembali input yang telah dimasukkan
    }

    /**
     * Memproses logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Anda telah logout.'); // Mengirimkan pesan logout sukses ke session
    }
}
