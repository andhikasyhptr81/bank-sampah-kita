<?php

namespace App\Http\Controllers;

class BeritaController
{
    private $berita = [
        [
            'slug' => 'bank-sampah-raih-penghargaan',
            'judul' => 'Bank Sampah Kita Raih Penghargaan Lingkungan',
            'tanggal' => '20 Mei 2026',
            'gambar' => 'images/berita1.jpg',
            'ringkasan' => 'Penghargaan diberikan atas kontribusi dalam pengelolaan sampah berbasis masyarakat.',
        ],
        [
            'slug' => 'sosialisasi-pemilahan-sampah',
            'judul' => 'Sosialisasi Pemilahan Sampah untuk Warga',
            'tanggal' => '10 Mei 2026',
            'gambar' => 'images/berita2.jpg',
            'ringkasan' => 'Kegiatan edukasi pemilahan sampah organik dan anorganik.',
        ],
        [
            'slug' => 'kerja-bakti-lingkungan',
            'judul' => 'Kerja Bakti Bersama Warga',
            'tanggal' => '1 Mei 2026',
            'gambar' => 'images/berita3.jpg',
            'ringkasan' => 'Warga bersama pengurus melakukan pembersihan lingkungan.',
        ],
    ];

    public function index()
    {
        return view('pages.berita', [
            'berita' => $this->berita
        ]);
    }

    public function show($slug)
    {
        $artikel = collect($this->berita)
            ->firstWhere('slug', $slug);

        abort_if(!$artikel, 404);

        return view('pages.berita-detail', compact('artikel'));
    }
}
