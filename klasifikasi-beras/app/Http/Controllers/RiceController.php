<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RiceController extends Controller
{
    public function classify(Request $request)
    {
        // Validasi file gambar
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Ambil file gambar dari request
        $image = $request->file('image');

        // Kirim gambar ke Flask service untuk klasifikasi
        $response = Http::attach(
            'image', file_get_contents($image), $image->getClientOriginalName()
        )->post('http://127.0.0.1:5000/predict');

        // Jika respon dari Flask service sukses
        if ($response->successful()) {
            $predicted_class = $response->json()['predicted_class'];

            // Mappingkan predicted_class ke nama jenis beras
            $rice_types = ['Beras 1', 'Beras 2', 'Beras 3', 'Beras 4', 'Beras 5'];
            $result = $rice_types[$predicted_class];

            // Tampilkan hasil ke view
            return view('result', ['result' => $result]);
        } else {
            // Jika terjadi kesalahan saat mengklasifikasikan gambar
            return back()->withErrors(['error' => 'Terjadi kesalahan saat mengklasifikasikan gambar.']);
        }
    }
}

