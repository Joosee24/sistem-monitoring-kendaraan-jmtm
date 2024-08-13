<?php

// app/Http/Controllers/InputController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function showForm()
    {
        return view('input');
    }

    public function processForm(Request $request)
    {
        // Validasi dan proses data input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|email',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Lakukan sesuatu dengan data yang sudah tervalidasi

        return back()->with('success', 'Data berhasil dikirim!');
    }
}

