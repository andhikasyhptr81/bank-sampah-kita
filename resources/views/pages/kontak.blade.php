@extends('layouts.app')

@section('title', 'Kontak Kami — Bank Sampah Kita')

@section('content')

<section class="page-hero">
    <div class="container">
        <p class="breadcrumb">
            <a href="{{ route('home') }}">Beranda</a> › Kontak
        </p>

        <h1 class="page-hero-title">Kontak Kami</h1>

        <p class="page-hero-desc">
            Hubungi kami untuk informasi pendaftaran, jadwal setor sampah,
            maupun kerja sama lingkungan.
        </p>
    </div>
</section>

<section class="inner-section">
    <div class="container">

        <div class="contact-wrapper">

            <div class="contact-card">
                <div class="contact-icon">📍</div>
                <h3>Alamat</h3>
                <p>
                    Jl. Maju Bersama No. 12<br>
                    Jakarta Selatan
                </p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📞</div>
                <h3>WhatsApp</h3>
                <p>0821-1024-4553</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">✉️</div>
                <h3>Email</h3>
                <p>info@banksampahkita.id</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">🕒</div>
                <h3>Jam Operasional</h3>
                <p>Sabtu, 07.00 - 12.00 WIB</p>
            </div>

        </div>

        <div class="wa-box">
            <h3>Butuh bantuan cepat?</h3>
            <p>Hubungi admin kami melalui WhatsApp.</p>

            <a href="https://wa.me/6282110244553" target="_blank" class="btn btn-dark">
                Chat WhatsApp
            </a>
        </div>

    </div>
</section>

<section class="inner-section bg-cream">
    <div class="container">

        <h2 class="section-title text-dark">
            Lokasi Kami
        </h2>

        <div class="map-box">

            <!-- Ganti dengan link maps asli -->
            <iframe src="https://www.google.com/maps/embed?pb=" width="100%" height="400" style="border:0;"
                allowfullscreen="" loading="lazy">
            </iframe>

        </div>

    </div>
</section>

@endsection

@push('styles')
<style>
    .contact-wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .contact-card {
        background: #fff;
        border: 1.5px solid #e5ebe8;
        border-radius: 14px;
        padding: 24px;
    }

    .contact-icon {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .contact-card h3 {
        margin-bottom: 8px;
        color: var(--text-dark);
    }

    .contact-card p {
        color: var(--text-muted);
        line-height: 1.7;
    }

    .wa-box {
        margin-top: 30px;
        background: var(--green-pale);
        border-radius: 14px;
        padding: 28px;
        text-align: center;
    }

    .wa-box h3 {
        margin-bottom: 8px;
    }

    .wa-box p {
        margin-bottom: 18px;
    }

    .map-box {
        margin-top: 20px;
        border-radius: 14px;
        overflow: hidden;
    }

    @media(max-width:768px) {

        .contact-wrapper {
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