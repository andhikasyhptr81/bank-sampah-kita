@extends('layouts.app')
@section('title', 'Tentang Kami — Bank Sampah Kita')

@section('content')

{{-- ── PAGE HERO ── --}}
<section class="page-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> › Tentang Kami
        </p>
        <h1 class="page-hero-title">Tentang kami</h1>
        <p class="page-hero-desc">Mengenal lebih dekat Bank Sampah Kita — siapa kami, mengapa kami ada, dan apa yang
            mendorong kami terus bergerak untuk lingkungan yang lebih baik.</p>
    </div>
</section>

{{-- ── SEJARAH ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Sejarah</p>
        <h2 class="section-title text-dark">Bermula dari kepedulian warga</h2>

        <div class="two-col-grid" style="margin-top: 28px;">
            <div class="img-placeholder">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#3dab87" stroke-width="1.5">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <circle cx="8.5" cy="8.5" r="1.5" />
                    <polyline points="21 15 16 10 5 21" />
                </svg>
                <span>Foto rapat warga perdana<br>April 2022</span>
            </div>
            <div class="story-text">
                <p>Bank Sampah Kita lahir pada April 2022 dari keresahan sekelompok ibu rumah tangga di Kelurahan Maju
                    Bersama yang prihatin dengan volume sampah yang terus meningkat setiap minggunya.</p>
                <p style="margin-top: 14px;">Dimulai dengan 12 nasabah dan satu timbangan manual, kini kami telah
                    berkembang menjadi bank sampah dengan lebih dari 340 nasabah aktif dan sistem pencatatan digital.
                </p>
                <p style="margin-top: 14px;">Perjalanan tiga tahun ini membuktikan bahwa perubahan nyata bisa dimulai
                    dari langkah kecil di tingkat RT/RW.</p>
            </div>
        </div>
    </div>
</section>

{{-- ── VISI MISI ── --}}
<section class="inner-section bg-cream">
    <div class="container">
        <p class="section-tag">Arah & Tujuan</p>
        <h2 class="section-title text-dark">Visi & misi</h2>

        <div class="vm-grid" style="margin-top: 28px;">
            <div class="vm-card vm-card--visi">
                <div class="vm-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3dab87" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>
                <h3 class="vm-title">Visi</h3>
                <p class="vm-text">"Menjadi bank sampah percontohan di Jakarta Selatan yang memberdayakan warga dan
                    menjaga kebersihan lingkungan secara berkelanjutan pada 2027."</p>
            </div>
            <div class="vm-card">
                <div class="vm-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#3dab87" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 8 12 12 14 14" />
                    </svg>
                </div>
                <h3 class="vm-title">Misi</h3>
                <ul class="misi-list">
                    @foreach($misi as $m)
                    <li>
                        <span class="misi-check">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#3dab87"
                                stroke-width="3">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        {{ $m }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ── STRUKTUR ORGANISASI ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Tim</p>
        <h2 class="section-title text-dark">Struktur organisasi</h2>
        <p class="section-sub text-muted">Dikelola oleh warga, untuk warga</p>

        <div class="team-grid">
            @foreach($pengurus as $p)
            <div class="team-card">
                <div class="team-avatar">{{ $p['inisial'] }}</div>
                <div class="team-nama">{{ $p['nama'] }}</div>
                <div class="team-jabatan">{{ $p['jabatan'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ── WILAYAH CAKUPAN ── --}}
<section class="inner-section bg-cream">
    <div class="container">
        <p class="section-tag">Wilayah</p>
        <h2 class="section-title text-dark">Area cakupan layanan</h2>
        <p class="section-sub text-muted">Saat ini melayani 3 RW di Kelurahan Maju Bersama</p>

        <div class="two-col-grid" style="margin-top: 28px; align-items: start;">
            <div class="map-placeholder">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#3dab87" stroke-width="1.5">
                    <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Peta wilayah layanan</span>
                <small>Embed Google Maps</small>
            </div>
            <div class="lokasi-list">
                @foreach($lokasi as $i => $l)
                <div class="lokasi-item">
                    <div class="lokasi-num">{{ $i + 1 }}</div>
                    <div>
                        <div class="lokasi-nama">{{ $l['nama'] }}</div>
                        <div class="lokasi-detail">{{ $l['detail'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ── PENGHARGAAN ── --}}
<section class="inner-section">
    <div class="container">
        <p class="section-tag">Pencapaian</p>
        <h2 class="section-title text-dark">Penghargaan & pengakuan</h2>
        <p class="section-sub text-muted">Apresiasi dari berbagai pihak atas kontribusi lingkungan kami</p>

        <div class="award-grid">
            @foreach($penghargaan as $p)
            <div class="award-card">
                <div class="award-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#e8b84b" stroke-width="2">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                    </svg>
                </div>
                <div>
                    <div class="award-judul">{{ $p['judul'] }}</div>
                    <div class="award-dari">{{ $p['dari'] }}</div>
                </div>
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
                <h3 class="cta-strip-title">Tertarik bergabung atau bermitra?</h3>
                <p class="cta-strip-sub">Kami terbuka untuk nasabah baru, relawan, dan mitra pengepul</p>
            </div>
            <a href="{{ route('kontak') }}" class="btn btn-cta-outline">
                Hubungi kami
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* Page Hero */
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

    .breadcrumb a:hover {
        text-decoration: underline;
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

    /* Inner sections */
    .inner-section {
        padding: 56px 0;
    }

    .bg-cream {
        background: var(--cream);
    }

    /* Two col */
    .two-col-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 36px;
        align-items: center;
    }

    /* Img placeholder */
    .img-placeholder {
        background: var(--green-img-bg);
        border-radius: 14px;
        aspect-ratio: 4/3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        border: 2px solid rgba(74, 175, 140, 0.2);
    }

    .img-placeholder span {
        font-size: 13px;
        color: var(--green-dark);
        text-align: center;
        line-height: 1.5;
    }

    /* Story text */
    .story-text p {
        font-size: 14px;
        color: var(--text-body);
        line-height: 1.75;
    }

    /* Map placeholder */
    .map-placeholder {
        background: var(--green-pale);
        border-radius: 14px;
        aspect-ratio: 4/3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
        border: 1.5px solid rgba(61, 171, 135, 0.3);
    }

    .map-placeholder span {
        font-size: 13px;
        font-weight: 600;
        color: var(--green-dark);
    }

    .map-placeholder small {
        font-size: 12px;
        color: var(--text-muted);
    }

    /* Visi Misi */
    .vm-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .vm-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 14px;
        padding: 28px 24px;
    }

    .vm-card--visi {
        background: var(--green-pale);
        border-color: rgba(61, 171, 135, 0.3);
    }

    .vm-icon {
        margin-bottom: 14px;
    }

    .vm-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
    }

    .vm-text {
        font-size: 14px;
        color: var(--text-body);
        line-height: 1.7;
        font-style: italic;
    }

    .misi-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .misi-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 14px;
        color: var(--text-body);
        line-height: 1.55;
    }

    .misi-check {
        width: 20px;
        height: 20px;
        background: rgba(61, 171, 135, 0.12);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    /* Team */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-top: 8px;
    }

    .team-card {
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
    }

    .team-avatar {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--green-pale);
        color: var(--green-mid);
        font-size: 15px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
    }

    .team-nama {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 3px;
    }

    .team-jabatan {
        font-size: 12px;
        color: var(--text-muted);
    }

    /* Lokasi */
    .lokasi-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .lokasi-item {
        display: flex;
        align-items: center;
        gap: 14px;
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 10px;
        padding: 14px 16px;
    }

    .lokasi-num {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--green-accent);
        color: var(--white);
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .lokasi-nama {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 2px;
    }

    .lokasi-detail {
        font-size: 12px;
        color: var(--text-muted);
    }

    /* Awards */
    .award-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
    }

    .award-card {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: var(--white);
        border: 1.5px solid #e5ebe8;
        border-radius: 12px;
        padding: 18px;
    }

    .award-icon {
        width: 38px;
        height: 38px;
        background: rgba(232, 184, 75, 0.12);
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .award-judul {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 3px;
    }

    .award-dari {
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

        .two-col-grid,
        .vm-grid {
            grid-template-columns: 1fr;
        }

        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .award-grid {
            grid-template-columns: 1fr 1fr;
        }

        .cta-strip-inner {
            flex-direction: column;
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .team-grid {
            grid-template-columns: 1fr 1fr;
        }

        .award-grid {
            grid-template-columns: 1fr;
        }

        .page-hero-title {
            font-size: 26px;
        }
    }
</style>
@endpush