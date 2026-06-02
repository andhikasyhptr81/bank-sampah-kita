@extends('layouts.app')

@section('title', 'Berita - Bank Sampah Kita')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> › Berita
        </p>

        <h1 class="page-hero-title">
            Berita & Artikel
        </h1>

        <p class="page-hero-desc">
            Informasi terbaru mengenai kegiatan dan perkembangan Bank Sampah Kita.
        </p>
    </div>
</section>

<section class="inner-section">
    <div class="container">

        <div class="berita-grid">

            @foreach($berita as $item)

            <div class="berita-card">

                <div class="berita-image">
                    <div class="placeholder-img">
                        📰
                    </div>
                </div>

                <div class="berita-body">

                    <span class="berita-date">
                        {{ $item['tanggal'] }}
                    </span>

                    <h3>
                        {{ $item['judul'] }}
                    </h3>

                    <p>
                        {{ $item['ringkasan'] }}
                    </p>

                    <a href="{{ route('berita.detail',$item['slug']) }}">
                        Baca Selengkapnya →
                    </a>

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
        padding: 48px 0 36px;
    }

    .berita-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .berita-card {
        background: #fff;
        border: 1px solid #e5ebe8;
        border-radius: 14px;
        overflow: hidden;
    }

    .placeholder-img {
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef8f4;
        font-size: 60px;
    }

    .berita-body {
        padding: 20px;
    }

    .berita-date {
        font-size: 12px;
        color: #888;
    }

    .berita-body h3 {
        margin: 10px 0;
    }

    .berita-body p {
        color: #666;
        line-height: 1.7;
    }

    .berita-body a {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
    }

    @media(max-width:768px) {
        .berita-grid {
            grid-template-columns: 1fr;
        }
    }

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