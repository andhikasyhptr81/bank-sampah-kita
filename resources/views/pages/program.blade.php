@extends('layouts.app')
@section('title', 'Program Kerja — Bank Sampah Kita')

@section('content')

{{-- ── PAGE HERO ── --}}
<section class="page-hero">
    <div class="container">
        <p class="breadcrumb"><a href="{{ route('home') }}">Beranda</a> › Program Kerja</p>
        <h1 class="page-hero-title">Program kerja</h1>
        <p class="page-hero-desc">Berbagai program aktif yang kami jalankan bersama warga — dari tabungan sampah harian
            hingga pelatihan daur ulang kreatif untuk semua usia.</p>
    </div>
</section>

{{-- ── KARTU PROGRAM ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Program aktif</p>
        <h2 class="section-title text-dark">4 program unggulan</h2>
        <p class="section-sub text-muted">Pilih program yang sesuai dengan kebutuhan dan minat kamu</p>

        <div class="program-cards-grid">
            @foreach($programs as $p)
            <div class="prog-card {{ $p['featured'] ? 'prog-card--featured' : '' }}">
                <div class="prog-card-img" style="background: {{ $p['icon_bg'] }}">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="{{ $p['icon_color'] }}"
                        stroke-width="1.8">
                        @if($p['featured'])
                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                        <path d="M2 17l10 5 10-5" />
                        <path d="M2 12l10 5 10-5" />
                        @elseif($p['badge_type'] === 'aktif')
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        @elseif($p['badge_type'] === 'rutin')
                        <polyline points="23 4 23 10 17 10" />
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
                        @else
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        @endif
                    </svg>
                </div>
                <div class="prog-card-body">
                    <span class="prog-badge prog-badge--{{ $p['badge_type'] }}">{{ $p['badge'] }}</span>
                    <h3 class="prog-nama">{{ $p['nama'] }}</h3>
                    <p class="prog-desc">{{ $p['deskripsi'] }}</p>
                    <div class="prog-meta">
                        <span>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            {{ $p['peserta'] }}
                        </span>
                        <span>
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>
                            {{ $p['jadwal'] }}
                        </span>
                    </div>
                    <a href="{{ route('daftar') }}" class="prog-btn">
                        Daftar program ini
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── JADWAL ── --}}
<section class="inner-section bg-cream">
    <div class="container">
        <p class="section-tag">Jadwal</p>
        <h2 class="section-title text-dark">Kalender kegiatan</h2>
        <p class="section-sub text-muted">Jadwal rutin semua program bulan ini</p>

        <div class="jadwal-table-wrap">
            <table class="jadwal-table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $j)
                    <tr>
                        <td><span class="hari-pill">{{ $j['hari'] }}</span></td>
                        <td class="td-muted">{{ $j['jam'] }}</td>
                        <td class="td-bold">{{ $j['nama'] }}</td>
                        <td class="td-muted">{{ $j['lokasi'] }}</td>
                        <td>
                            <span class="status-dot status-dot--{{ $j['status'] }}"></span>
                            {{ $j['status'] === 'buka' ? 'Buka' : 'Segera' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- ── TARGET & CAPAIAN ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Progress</p>
        <h2 class="section-title text-dark">Target & capaian 2025</h2>
        <p class="section-sub text-muted">Progres program kerja tahun berjalan</p>

        <div class="target-grid">
            @foreach($target as $t)
            <div class="target-card">
                <div class="target-label">{{ $t['label'] }}</div>
                <div class="target-num">{{ $t['capaian'] }} / {{ $t['total'] }}</div>
                <div class="target-track">
                    <div class="target-fill" style="width: {{ $t['persen'] }}%; background: {{ $t['warna'] }};"></div>
                </div>
                <div class="target-sub">{{ $t['persen'] }}% dari target {{ $t['total'] }} {{ $t['satuan'] }}</div>
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
                <h3 class="cta-strip-title">Mau ikut program kami?</h3>
                <p class="cta-strip-sub">Pendaftaran mudah, gratis, dan bisa langsung aktif minggu ini</p>
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

    /* Program cards */
    .program-cards-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }

    .prog-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 14px;
        overflow: hidden;
    }

    .prog-card--featured {
        border-color: var(--green-accent);
        border-width: 2px;
    }

    .prog-card-img {
        height: 90px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .prog-card-body {
        padding: 18px 20px 20px;
    }

    .prog-badge {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        padding: 3px 9px;
        border-radius: 20px;
        margin-bottom: 10px;
    }

    .prog-badge--aktif {
        background: rgba(61, 171, 135, 0.12);
        color: var(--green-mid);
    }

    .prog-badge--rutin {
        background: rgba(232, 184, 75, 0.12);
        color: #a07828;
    }

    .prog-badge--baru {
        background: rgba(124, 110, 230, 0.12);
        color: #5448b0;
    }

    .prog-nama {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .prog-desc {
        font-size: 13px;
        color: var(--text-body);
        line-height: 1.65;
        margin-bottom: 14px;
    }

    .prog-meta {
        display: flex;
        gap: 16px;
        margin-bottom: 14px;
    }

    .prog-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 12px;
        color: var(--text-muted);
    }

    .prog-btn {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
        font-weight: 500;
        color: var(--green-mid);
        background: rgba(61, 171, 135, 0.08);
        border-radius: 7px;
        padding: 7px 13px;
        text-decoration: none;
        transition: background 0.18s;
    }

    .prog-btn:hover {
        background: rgba(61, 171, 135, 0.15);
    }

    /* Jadwal table */
    .jadwal-table-wrap {
        overflow-x: auto;
    }

    .jadwal-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .jadwal-table th {
        text-align: left;
        padding: 10px 14px;
        font-size: 12px;
        font-weight: 600;
        color: var(--text-muted);
        border-bottom: 1.5px solid #e5ebe8;
        white-space: nowrap;
    }

    .jadwal-table td {
        padding: 12px 14px;
        border-bottom: 1px solid #f0f0f0;
    }

    .jadwal-table tr:last-child td {
        border-bottom: none;
    }

    .hari-pill {
        background: rgba(61, 171, 135, 0.1);
        color: var(--green-mid);
        font-size: 11px;
        font-weight: 600;
        padding: 3px 9px;
        border-radius: 20px;
    }

    .td-muted {
        color: var(--text-muted);
    }

    .td-bold {
        font-weight: 500;
        color: var(--text-dark);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
    }

    .status-dot--buka {
        background: var(--green-accent);
    }

    .status-dot--segera {
        background: #e8b84b;
    }

    /* Target cards */
    .target-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .target-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 12px;
        padding: 20px;
    }

    .target-label {
        font-size: 12px;
        color: var(--text-muted);
        margin-bottom: 6px;
    }

    .target-num {
        font-size: 22px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 10px;
        letter-spacing: -0.3px;
    }

    .target-track {
        background: #f0f0f0;
        border-radius: 4px;
        height: 7px;
        overflow: hidden;
        margin-bottom: 6px;
    }

    .target-fill {
        height: 100%;
        border-radius: 4px;
        transition: width .5s ease;
    }

    .target-sub {
        font-size: 12px;
        color: var(--text-muted);
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
        .program-cards-grid {
            grid-template-columns: 1fr;
        }

        .target-grid {
            grid-template-columns: 1fr 1fr;
        }

        .cta-strip-inner {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .target-grid {
            grid-template-columns: 1fr;
        }

        .page-hero-title {
            font-size: 26px;
        }
    }
</style>
@endpush