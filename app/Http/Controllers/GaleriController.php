<?php

namespace App\Http\Controllers;

class GaleriController
{
    public function index()
    {
        $galeri = [
            [
                'judul' => 'Kegiatan Setor Sampah',
                'gambar' => 'images/galeri1.jpg',
                'kategori' => 'Setor Sampah'
            ],
            [
                'judul' => 'Sosialisasi Lingkungan',
                'gambar' => 'images/galeri2.jpg',
                'kategori' => 'Edukasi'
            ],
            [
                'judul' => 'Kerja Bakti Warga',
                'gambar' => 'images/galeri3.jpg',
                'kategori' => 'Kerja Bakti'
            ],
            [
                'judul' => 'Pelatihan Daur Ulang',
                'gambar' => 'images/galeri4.jpg',
                'kategori' => 'Pelatihan'
            ],
            [
                'judul' => 'Penimbangan Sampah',
                'gambar' => 'images/galeri5.jpg',
                'kategori' => 'Operasional'
            ],
            [
                'judul' => 'Bank Sampah Keliling',
                'gambar' => 'images/galeri6.jpg',
                'kategori' => 'Layanan'
            ]
        ];

        return view('pages.galeri', compact('galeri'));
    }
}
