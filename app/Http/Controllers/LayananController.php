<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController
{
    public function index()
    {
        $jenisLayanan = [
            ['nama' => 'Tabungan Sampah', 'deskripsi' => 'Setor sampah terpilah, dapatkan poin yang bisa dicairkan kapan saja.',               'icon_color' => '#3dab87', 'icon_bg' => 'rgba(61,171,135,0.15)'],
            ['nama' => 'Jemput Sampah',   'deskripsi' => 'Layanan jemput ke rumah untuk warga RW 07 atau volume sampah besar (min. 10 kg).',   'icon_color' => '#e8b84b', 'icon_bg' => 'rgba(232,184,75,0.15)'],
            ['nama' => 'Cek Saldo Online', 'deskripsi' => 'Pantau saldo tabungan kapan saja via WhatsApp atau halaman cek saldo di website ini.', 'icon_color' => '#7c6ee6', 'icon_bg' => 'rgba(124,110,230,0.15)'],
        ];

        $harga = [
            'Plastik' => [
                ['nama' => 'Botol PET (air mineral)',        'kondisi' => 'Bersih', 'harga' => 'Rp 3.000/kg'],
                ['nama' => 'Plastik HDPE (ember, botol sabun)', 'kondisi' => 'Bersih', 'harga' => 'Rp 2.500/kg'],
                ['nama' => 'Plastik campuran / kresek',      'kondisi' => 'Campur', 'harga' => 'Rp 500/kg'],
            ],
            'Kertas' => [
                ['nama' => 'Kardus / karton',   'kondisi' => 'Bersih', 'harga' => 'Rp 2.000/kg'],
                ['nama' => 'Koran / majalah',   'kondisi' => 'Bersih', 'harga' => 'Rp 1.500/kg'],
                ['nama' => 'Kertas HVS / buku', 'kondisi' => 'Bersih', 'harga' => 'Rp 1.200/kg'],
            ],
            'Logam' => [
                ['nama' => 'Kaleng aluminium (minuman)', 'kondisi' => 'Bersih', 'harga' => 'Rp 10.000/kg'],
                ['nama' => 'Besi / baja tua',            'kondisi' => 'Campur', 'harga' => 'Rp 5.000/kg'],
                ['nama' => 'Tembaga / kuningan',         'kondisi' => 'Bersih', 'harga' => 'Rp 40.000/kg'],
            ],
        ];

        $langkahSetor = [
            ['judul' => 'Pilah di rumah',         'desc' => 'Pisahkan sampah sesuai kategori: plastik, kertas, logam'],
            ['judul' => 'Datang ke pos',           'desc' => 'Datang ke pos terdekat setiap Sabtu pagi'],
            ['judul' => 'Timbang bersama petugas', 'desc' => 'Petugas mencatat berat dan jenis sampah yang disetor'],
            ['judul' => 'Poin masuk tabungan',     'desc' => 'Poin langsung dikreditkan ke buku tabungan kamu'],
        ];

        $tukarPoin = [
            ['judul' => 'Uang tunai',              'desc' => 'Ambil langsung di pos setiap Sabtu. Min. pencairan Rp 10.000.', 'icon_color' => '#3dab87'],
            ['judul' => 'Sembako',                 'desc' => 'Tukar dengan beras, minyak, atau sabun di koperasi mitra.',     'icon_color' => '#e8b84b'],
            ['judul' => 'Bayar tagihan',            'desc' => 'Lunasi iuran RT/RW atau listrik prabayar via admin.',           'icon_color' => '#7c6ee6'],
        ];

        $updateTerakhir = '1 Juni 2025';

        return view('pages.layanan', compact(
            'jenisLayanan',
            'harga',
            'langkahSetor',
            'tukarPoin',
            'updateTerakhir'
        ));
    }
}
