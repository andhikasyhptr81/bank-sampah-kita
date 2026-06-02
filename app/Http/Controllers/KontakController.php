<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController
{
    public function index()
    {
        $pos = [
            ['nama' => 'Pos Utama — RW 03',      'alamat' => 'Jl. Melati No. 5',    'jam' => 'Sabtu 07.00–10.00', 'detail' => 'Depan balai RW 03',        'tipe' => 'utama',   'status' => 'Buka rutin'],
            ['nama' => 'Pos Satelit — RW 05',    'alamat' => 'Jl. Kenanga No. 12',  'jam' => 'Sabtu 09.00–11.00', 'detail' => 'Halaman masjid Al-Hikmah', 'tipe' => 'satelit', 'status' => 'Buka rutin'],
            ['nama' => 'Layanan Jemput — RW 07', 'alamat' => 'Jl. Mawar & sekitar', 'jam' => 'Fleksibel',         'detail' => 'Min. 10 kg per jemput',    'tipe' => 'jemput',  'status' => 'Hubungi dulu'],
        ];

        $jamOps = [
            ['hari' => 'Senin – Jumat', 'jam' => 'Admin online 08.00–17.00', 'buka' => true],
            ['hari' => 'Sabtu',         'jam' => 'Pos buka 07.00–12.00',     'buka' => true],
            ['hari' => 'Minggu',        'jam' => 'Workshop (tertentu)',       'buka' => true],
            ['hari' => 'Hari libur',    'jam' => 'Tutup',                    'buka' => false],
        ];

        return view('pages.kontak', compact('pos', 'jamOps'));
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama'      => 'required|string|max:100',
            'whatsapp'  => 'required|string|max:20',
            'rw'        => 'required|string|max:50',
            'keperluan' => 'required|string|max:100',
            'pesan'     => 'required|string|max:1000',
        ], [
            'nama.required'      => 'Nama lengkap wajib diisi.',
            'whatsapp.required'  => 'Nomor WhatsApp wajib diisi.',
            'rw.required'        => 'RW tempat tinggal wajib dipilih.',
            'keperluan.required' => 'Keperluan wajib dipilih.',
            'pesan.required'     => 'Pesan wajib diisi.',
        ]);

        // TODO: simpan ke DB atau kirim email
        // PesanMasuk::create($request->validated());

        return redirect()->route('kontak')
            ->with('success', 'Pesan kamu sudah kami terima! Kami akan menghubungi kamu dalam 1×24 jam.');
    }
}
