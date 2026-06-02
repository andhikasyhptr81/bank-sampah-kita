<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController
{
    public function index()
    {
        $pengurus = [
            ['nama' => 'Ibu Wati',     'jabatan' => 'Ketua',               'inisial' => 'IW'],
            ['nama' => 'Bpk. Santoso', 'jabatan' => 'Bendahara',           'inisial' => 'BS'],
            ['nama' => 'Ibu Rina',     'jabatan' => 'Koordinator Program', 'inisial' => 'IR'],
            ['nama' => 'Dwi Ananda',   'jabatan' => 'Admin & Digital',     'inisial' => 'DA'],
        ];

        $misi = [
            'Mengelola sampah rumah tangga secara terpilah dan bertanggung jawab',
            'Memberi nilai ekonomi dari sampah kepada warga',
            'Menumbuhkan kesadaran lingkungan sejak usia dini',
            'Bermitra dengan pengepul dan industri daur ulang lokal',
        ];

        $lokasi = [
            ['nama' => 'RW 03 — Jl. Melati',   'detail' => 'Pos utama · Sabtu 07.00–10.00'],
            ['nama' => 'RW 05 — Jl. Kenanga',  'detail' => 'Pos satelit · Sabtu 09.00–11.00'],
            ['nama' => 'RW 07 — Jl. Mawar',    'detail' => 'Layanan jemput · Hubungi admin'],
        ];

        $penghargaan = [
            ['judul' => 'Bank Sampah Terbaik 2023',        'dari' => 'Suku Dinas LH Jakarta Selatan'],
            ['judul' => 'Juara 2 Lomba Lingkungan Bersih', 'dari' => 'Kecamatan Tebet, 2024'],
            ['judul' => 'Mitra Unggulan KLHK',             'dari' => 'Program Adipura 2024'],
        ];

        return view('pages.tentang', compact('pengurus', 'misi', 'lokasi', 'penghargaan'));
    }
}
