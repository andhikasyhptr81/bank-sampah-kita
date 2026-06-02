<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController
{
    public function index()
    {
        $programs = [
            [
                'nama'        => 'Tabungan Sampah',
                'badge'       => 'Aktif',
                'badge_type'  => 'aktif',
                'deskripsi'   => 'Setor sampah terpilah setiap Sabtu dan dapatkan poin yang bisa ditukar dengan uang tunai atau sembako. Sistem pencatatan digital via WhatsApp.',
                'peserta'     => '340 peserta aktif',
                'jadwal'      => 'Setiap Sabtu',
                'featured'    => true,
                'icon_bg'     => 'rgba(61,171,135,0.15)',
                'icon_color'  => '#3dab87',
            ],
            [
                'nama'        => 'Edukasi Lingkungan',
                'badge'       => 'Aktif',
                'badge_type'  => 'aktif',
                'deskripsi'   => 'Pelatihan pilah sampah untuk ibu rumah tangga dan program kunjungan ke sekolah dasar di sekitar kelurahan setiap bulannya.',
                'peserta'     => '60 peserta/sesi',
                'jadwal'      => 'Setiap bulan',
                'featured'    => false,
                'icon_bg'     => 'rgba(232,184,75,0.15)',
                'icon_color'  => '#e8b84b',
            ],
            [
                'nama'        => 'Daur Ulang Kreatif',
                'badge'       => 'Rutin',
                'badge_type'  => 'rutin',
                'deskripsi'   => 'Workshop mengubah sampah plastik, botol, dan kertas menjadi produk kerajinan bernilai jual. Hasil karya dipasarkan di bazar bulanan.',
                'peserta'     => '25 peserta/sesi',
                'jadwal'      => '2x sebulan',
                'featured'    => false,
                'icon_bg'     => 'rgba(232,120,74,0.15)',
                'icon_color'  => '#e8784a',
            ],
            [
                'nama'        => 'Kompos Komunal',
                'badge'       => 'Baru 2025',
                'badge_type'  => 'baru',
                'deskripsi'   => 'Pengolahan sampah organik rumah tangga menjadi kompos untuk kebun warga dan dijual ke petani lokal. Saat ini masih membuka pendaftaran awal.',
                'peserta'     => 'Maks. 40 peserta',
                'jadwal'      => 'Mulai Juli 2025',
                'featured'    => false,
                'icon_bg'     => 'rgba(124,110,230,0.15)',
                'icon_color'  => '#7c6ee6',
            ],
        ];

        $jadwal = [
            ['hari' => 'Sabtu',  'jam' => '07.00–10.00', 'nama' => 'Tabungan Sampah — Pos RW 03', 'lokasi' => 'Jl. Melati No. 5',    'status' => 'buka'],
            ['hari' => 'Sabtu',  'jam' => '09.00–11.00', 'nama' => 'Tabungan Sampah — Pos RW 05', 'lokasi' => 'Balai RW 05',         'status' => 'buka'],
            ['hari' => 'Minggu', 'jam' => '09.00–11.30', 'nama' => 'Workshop Daur Ulang Kreatif', 'lokasi' => 'Aula Kelurahan',      'status' => 'buka'],
            ['hari' => 'Jumat',  'jam' => '15.00–17.00', 'nama' => 'Edukasi Lingkungan — SDN 04', 'lokasi' => 'SDN 04 Maju Bersama', 'status' => 'segera'],
            ['hari' => 'Sabtu',  'jam' => '10.00–12.00', 'nama' => 'Kompos Komunal — Sesi Perdana', 'lokasi' => 'Taman RW 03',        'status' => 'segera'],
        ];

        $target = [
            ['label' => 'Nasabah aktif',    'capaian' => 340,  'total' => 500,  'satuan' => 'nasabah', 'persen' => 68, 'warna' => '#3dab87'],
            ['label' => 'Sampah terkelola', 'capaian' => 14.2, 'total' => 30,   'satuan' => 'ton',     'persen' => 47, 'warna' => '#e8b84b'],
            ['label' => 'Sesi edukasi',     'capaian' => 8,    'total' => 12,   'satuan' => 'sesi',    'persen' => 67, 'warna' => '#7c6ee6'],
        ];

        return view('pages.program', compact('programs', 'jadwal', 'target'));
    }
}
