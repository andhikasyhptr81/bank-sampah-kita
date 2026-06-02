@extends('layouts.app')
@section('title', 'Layanan & Harga — Bank Sampah Kita')

@section('content')

{{-- ── PAGE HERO ── --}}
<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="{{ route('home') }}">Beranda</a> › Layanan</p>
        <h1 class="page-hero-title">Layanan kami</h1>
        <p class="page-hero-desc">Semua yang perlu kamu tahu soal cara setor sampah, harga terkini per kilogram, dan
            cara mencairkan tabunganmu.</p>
    </div>
</section>

{{-- ── JENIS LAYANAN ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Layanan tersedia</p>
        <h2 class="section-title text-dark">Apa saja yang kami layani?</h2>
        <p class="section-sub text-muted">Tiga layanan utama yang bisa diakses semua warga</p>

        <div class="layanan-grid">
            @foreach($jenisLayanan as $l)
            <div class="layanan-card">
                <div class="layanan-icon" style="background: {{ $l['icon_bg'] }}">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="{{ $l['icon_color'] }}"
                        stroke-width="2">
                        @if($loop->index === 0)
                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                        <path d="M2 17l10 5 10-5" />
                        <path d="M2 12l10 5 10-5" />
                        @elseif($loop->index === 1)
                        <rect x="1" y="3" width="15" height="13" />
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8" />
                        <circle cx="5.5" cy="18.5" r="2.5" />
                        <circle cx="18.5" cy="18.5" r="2.5" />
                        @else
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2" />
                        <line x1="12" y1="18" x2="12.01" y2="18" />
                        @endif
                    </svg>
                </div>
                <h3 class="layanan-nama">{{ $l['nama'] }}</h3>
                <p class="layanan-desc">{{ $l['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── HARGA SAMPAH ── --}}
<section class="inner-section bg-charcoal">
    <div class="container">
        <p class="section-tag">Harga</p>
        <h2 class="section-title">Daftar harga sampah</h2>
        <p class="section-sub">Harga berlaku per {{ $updateTerakhir }} — diperbarui setiap bulan</p>

        <div class="harga-updated">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
            </svg>
            Terakhir diperbarui: {{ $updateTerakhir }}
        </div>

        @foreach($harga as $kategori => $items)
        <h4 class="harga-kategori">{{ $kategori }}</h4>
        <div class="harga-table-wrap">
            <table class="harga-table">
                <thead>
                    <tr>
                        <th>Jenis sampah</th>
                        <th>Kondisi</th>
                        <th>Harga/kg</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td><span
                                class="kondisi-pill kondisi-pill--{{ strtolower($item['kondisi']) }}">{{ $item['kondisi'] }}</span>
                        </td>
                        <td class="td-harga">{{ $item['harga'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach

        <p class="harga-note">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <line x1="12" y1="8" x2="12" y2="12" />
                <line x1="12" y1="16" x2="12.01" y2="16" />
            </svg>
            Harga dapat berubah sewaktu-waktu. Hubungi admin untuk konfirmasi harga terbaru.
        </p>
    </div>
</section>

{{-- ── CARA SETOR ── --}}
<section class="inner-section bg-cream">
    <div class="container">
        <p class="section-tag">Panduan</p>
        <h2 class="section-title text-dark">Cara setor sampah</h2>
        <p class="section-sub text-muted">Pilih cara yang paling mudah buat kamu</p>

        <div class="setor-grid">
            <div class="setor-card setor-card--rec">
                <span class="setor-badge">⭐ Direkomendasikan</span>
                <h3 class="setor-title">Datang langsung ke pos</h3>
                <ul class="setor-list">
                    @foreach($langkahSetor as $i => $l)
                    <li>
                        <span class="setor-num">{{ $i + 1 }}</span>
                        <div>
                            <strong>{{ $l['judul'] }}</strong>
                            <p>{{ $l['desc'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="setor-card">
                <span class="setor-badge setor-badge--gray">Khusus RW 07</span>
                <h3 class="setor-title">Layanan jemput</h3>
                <ul class="setor-list">
                    <li><span class="setor-num">1</span>
                        <div><strong>Minimal 10 kg</strong>
                            <p>Volume sampah harus min. 10 kg per pengambilan</p>
                        </div>
                    </li>
                    <li><span class="setor-num">2</span>
                        <div><strong>Hubungi admin H-1</strong>
                            <p>Chat WhatsApp sehari sebelumnya untuk jadwal</p>
                        </div>
                    </li>
                    <li><span class="setor-num">3</span>
                        <div><strong>Petugas datang ke rumah</strong>
                            <p>Kami yang datang menimbang dan mencatat</p>
                        </div>
                    </li>
                    <li><span class="setor-num">4</span>
                        <div><strong>Poin masuk 1×24 jam</strong>
                            <p>Dikreditkan ke buku tabungan kamu</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ── TUKAR POIN ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Pencairan</p>
        <h2 class="section-title text-dark">Cara tukar poin tabungan</h2>
        <p class="section-sub text-muted">Tabungan sampahmu bisa ditukar dengan pilihan berikut</p>

        <div class="tukar-grid">
            @foreach($tukarPoin as $t)
            <div class="tukar-card">
                <div class="tukar-icon" style="background: {{ $t['icon_color'] }}20;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="{{ $t['icon_color'] }}"
                        stroke-width="2">
                        @if($loop->index === 0)
                        <line x1="12" y1="1" x2="12" y2="23" />
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                        @elseif($loop->index === 1)
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                        @else
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                        <line x1="8" y1="21" x2="16" y2="21" />
                        <line x1="12" y1="17" x2="12" y2="21" />
                        @endif
                    </svg>
                </div>
                <h3 class="tukar-judul">{{ $t['judul'] }}</h3>
                <p class="tukar-desc">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── CTA STRIP ── --}}
<section class="cta-strip">
    <div class="container">
        <div class="cta-strip-inner">
            <div>
                <h3 class="cta-strip-title">Siap mulai setor sampah?</h3>
                <p class="cta-strip-sub">Daftar gratis — langsung aktif minggu ini</p>
            </div>
            <a href="{{ route('daftar') }}" class="btn btn-cta-outline">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="8.5" cy="7" r="4" />
                    <line x1="20" y1="8" x2="20" y2="14" />
                    <line x1="23" y1="11" x2="17" y2="11" />
                </svg>
                Daftar sekarang
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .page-hero {
        background: var(--green-pale);
        padding: 48px 0 36px;
    }

    .breadcrumb {
        font-size: 13px;
        color: var(--text-muted);
        margin-bottom: 12px;
    }

    .breadcrumb a {
        color: var(--green-mid);
        text-decoration: none;
    }

    .page-hero-title {
        font-size: 32px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
        letter-spacing: -0.4px;
    }

    .page-hero-desc {
        font-size: 15px;
        color: var(--text-body);
        max-width: 520px;
        line-height: 1.7;
    }

    .inner-section {
        padding: 56px 0;
    }

    .bg-cream {
        background: var(--cream);
    }

    .bg-charcoal {
        background: var(--charcoal);
    }

    .bg-charcoal .section-sub {
        color: rgba(255, 255, 255, 0.5);
    }

    /* Jenis layanan */
    .layanan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .layanan-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 12px;
        padding: 22px;
    }

    .layanan-icon {
        width: 46px;
        height: 46px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
    }

    .layanan-nama {
        font-size: 14px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 6px;
    }

    .layanan-desc {
        font-size: 13px;
        color: var(--text-muted);
        line-height: 1.65;
    }

    /* Harga */
    .harga-updated {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
        margin-bottom: 20px;
    }

    .harga-kategori {
        font-size: 13px;
        font-weight: 600;
        color: var(--green-accent);
        margin: 20px 0 10px;
        letter-spacing: .03em;
    }

    .harga-table-wrap {
        overflow-x: auto;
        margin-bottom: 6px;
    }

    .harga-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .harga-table th {
        text-align: left;
        padding: 9px 14px;
        font-size: 12px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.35);
        background: rgba(255, 255, 255, 0.04);
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .harga-table td {
        padding: 11px 14px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        color: var(--white);
    }

    .harga-table tr:last-child td {
        border-bottom: none;
    }

    .kondisi-pill {
        font-size: 11px;
        font-weight: 500;
        padding: 2px 8px;
        border-radius: 20px;
    }

    .kondisi-pill--bersih {
        background: rgba(61, 171, 135, 0.18);
        color: var(--green-accent);
    }

    .kondisi-pill--campur {
        background: rgba(232, 184, 75, 0.18);
        color: #e8b84b;
    }

    .td-harga {
        font-weight: 600;
        color: var(--green-accent);
        white-space: nowrap;
    }

    .harga-note {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.35);
        margin-top: 14px;
    }

    /* Cara setor */
    .setor-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin-top: 8px;
    }

    .setor-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 14px;
        padding: 24px;
    }

    .setor-card--rec {
        border-color: var(--green-accent);
    }

    .setor-badge {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        padding: 3px 9px;
        border-radius: 20px;
        margin-bottom: 12px;
        background: rgba(61, 171, 135, 0.1);
        color: var(--green-mid);
    }

    .setor-badge--gray {
        background: #f0f0f0;
        color: var(--text-muted);
    }

    .setor-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 16px;
    }

    .setor-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .setor-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .setor-num {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: var(--green-accent);
        color: var(--white);
        font-size: 11px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    .setor-list strong {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        display: block;
        margin-bottom: 2px;
    }

    .setor-list p {
        font-size: 12px;
        color: var(--text-muted);
        line-height: 1.5;
        margin: 0;
    }

    /* Tukar poin */
    .tukar-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .tukar-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 12px;
        padding: 22px;
    }

    .tukar-icon {
        width: 42px;
        height: 42px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
    }

    .tukar-judul {
        font-size: 14px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 6px;
    }

    .tukar-desc {
        font-size: 13px;
        color: var(--text-muted);
        line-height: 1.6;
    }

    /* CTA Strip */
    .cta-strip {
        background: var(--green-dark);
        padding: 32px 0;
    }

    .cta-strip-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .cta-strip-title {
        font-size: 17px;
        font-weight: 600;
        color: var(--white);
        margin-bottom: 4px;
    }

    .cta-strip-sub {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
    }

    @media (max-width: 900px) {

        .layanan-grid,
        .tukar-grid {
            grid-template-columns: 1fr 1fr;
        }

        .setor-grid {
            grid-template-columns: 1fr;
        }

        .cta-strip-inner {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {

        .layanan-grid,
        .tukar-grid {
            grid-template-columns: 1fr;
        }

        .page-hero-title {
            font-size: 26px;
        }
    }
</style>
@endpush