<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        Log::info('Memproses login.');

        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Log::info('Validasi berhasil.');

        // Mendapatkan kredensial dari input
        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            Log::info('Login berhasil.');

            // Jika login berhasil
            $request->session()->regenerate(); // Regenerate session ID
            Log::info('Session ID diregenerasi.');

            return redirect()->intended('admin/dashboard')
                ->with('status', 'Password benar!'); // Mengirimkan pesan sukses ke session
        }

        Log::warning('Login gagal. Password salah atau email tidak ditemukan.');

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
        Log::info('Memproses logout.');

        Auth::logout();

        Log::info('Logout berhasil.');

        $request->session()->invalidate();
        Log::info('Session di-invalidasi.');

        $request->session()->regenerateToken();
        Log::info('Token session diregenerasi.');

        return redirect('/login')->with('status', 'Anda telah logout.'); // Mengirimkan pesan logout sukses ke session
    }
}
