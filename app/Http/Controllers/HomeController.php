<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $stats = [
            ['value' => '2.4 ton',  'label' => 'Sampah terkelola/bulan'],
            ['value' => '340+',     'label' => 'Nasabah aktif'],
            ['value' => 'Rp 18 jt', 'label' => 'Total tabungan nasabah'],
            ['value' => '3 thn',    'label' => 'Berdiri sejak 2022'],
        ];

        $programs = [
            [
                'title'       => 'Tabungan sampah',
                'description' => 'Setor sampah terpilah dan dapatkan poin yang bisa ditukar uang atau sembako',
                'icon_bg'     => 'rgba(74,175,120,0.15)',
                'icon'        => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#4aaf78" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
            ],
            [
                'title'       => 'Edukasi lingkungan',
                'description' => 'Pelatihan pilah sampah untuk ibu rumah tangga dan pelajar sekolah dasar',
                'icon_bg'     => 'rgba(232,184,75,0.15)',
                'icon'        => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8b84b" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
            ],
            [
                'title'       => 'Daur ulang kreatif',
                'description' => 'Workshop mengubah sampah plastik & kertas menjadi produk bernilai jual',
                'icon_bg'     => 'rgba(232,120,74,0.15)',
                'icon'        => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e8784a" stroke-width="2"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>',
            ],
        ];

        $prices = [
            ['name' => 'Plastik PET / botol', 'price' => 'Rp 3.000/kg'],
            ['name' => 'Kardus / karton',     'price' => 'Rp 2.000/kg'],
            ['name' => 'Koran / kertas',      'price' => 'Rp 1.500/kg'],
            ['name' => 'Logam / kaleng',      'price' => 'Rp 7.000/kg'],
        ];

        $steps = [
            [
                'title'       => 'Daftar',
                'description' => 'Isi formulir pendaftaran online atau datang langsung ke pos bank sampah',
            ],
            [
                'title'       => 'Pilah sampah',
                'description' => 'Pisahkan sampah organik, plastik, kertas, dan logam di rumah',
            ],
            [
                'title'       => 'Setor',
                'description' => 'Bawa ke pos setiap Sabtu pagi atau hubungi untuk penjemputan',
            ],
            [
                'title'       => 'Tabungan bertambah',
                'description' => 'Poin langsung masuk buku tabungan dan bisa dicairkan kapan saja',
            ],
        ];

        return view('pages.home', compact('stats', 'programs', 'prices', 'steps'));
    }

    public function daftar()
    {
        return view('pages.daftar');
    }

    public function storeDaftar(Request $request)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:100',
            'rt_rw'   => 'required|string|max:20',
            'alamat'  => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'email'   => 'nullable|email|max:100',
        ]);

        // TODO: simpan ke database & kirim notifikasi
        // Nasabah::create($validated);

        return redirect()->route('home')->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda segera.');
    }
}
