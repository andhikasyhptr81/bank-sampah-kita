@extends('layouts.app')

@section('title', 'Galeri Kegiatan — Bank Sampah Kita')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> › Galeri
        </p>

        <h1 class="page-hero-title">
            Galeri kegiatan
        </h1>

        <p class="page-hero-desc">
            Dokumentasi berbagai kegiatan Bank Sampah Kita bersama warga dalam menjaga lingkungan yang bersih dan sehat.
        </p>
    </div>
</section>

<section class="inner-section">
    <div class="container">

        <div class="gallery-grid">
            @foreach($galeri as $item)
            <div class="gallery-card">

                <div class="gallery-image">
                    <div class="gallery-placeholder">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3dab87" stroke-width="1.5">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <polyline points="21 15 16 10 5 21" />
                        </svg>
                    </div>
                </div>

                <div class="gallery-body">
                    <span class="gallery-category">
                        {{ $item['kategori'] }}
                    </span>

                    <h3 class="gallery-title">
                        {{ $item['judul'] }}
                    </h3>
                </div>

            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection


@push('styles')
<style>
    .page-hero {
        background: var(--green-pale);
        padding: 48px 0;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .gallery-card {
        background: #fff;
        border: 1px solid #e5ebe8;
        border-radius: 14px;
        overflow: hidden;
        transition: .3s;
    }

    .gallery-card:hover {
        transform: translateY(-4px);
    }

    .gallery-image img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .gallery-body {
        padding: 18px;
    }

    .gallery-category {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 20px;
        background: #eef8f4;
        color: #3dab87;
        font-size: 12px;
        margin-bottom: 10px;
    }

    .gallery-title {
        font-size: 15px;
        font-weight: 600;
        color: #222;
    }

    @media(max-width:768px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }

    .gallery-placeholder {
        height: 220px;
        background: #eef8f4;
        display: flex;
        align-items: center;
        justify-content: center;
    }


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