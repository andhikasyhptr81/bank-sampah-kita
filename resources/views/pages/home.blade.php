@extends('layouts.app')

@section('title', 'Bank Sampah Kita — Kelurahan Maju Bersama')

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero" id="tentang">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="badge-program">
                    <span class="badge-dot"></span>
                    Program resmi RT/RW
                </span>
                <h1 class="hero-title">
                    Kelola sampahmu,<br>
                    dapatkan manfaatnya
                </h1>
                <p class="hero-desc">
                    Bank sampah komunitas yang membantu warga menabung dari
                    sampah rumah tangga. Bergabunglah dan jadilah bagian dari
                    perubahan nyata untuk lingkungan kita.
                </p>
                <div class="hero-actions">
                    <a href="#daftar" class="btn btn-outline-green">Daftar Sekarang</a>
                    <a href="#program" class="btn btn-ghost-green">Pelajari Program</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-img-box">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#4caf8c" stroke-width="1.5">
                        <rect x="3" y="3" width="18" height="18" rx="2" />
                        <circle cx="8.5" cy="8.5" r="1.5" />
                        <polyline points="21 15 16 10 5 21" />
                    </svg>
                    <span>Foto kegiatan<br>setor sampah warga</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== STATS ===== --}}
<section class="stats-section" id="dampak">
    <div class="container">
        <div class="stats-grid">
            @foreach($stats as $stat)
            <div class="stat-item">
                <span class="stat-value">{{ $stat['value'] }}</span>
                <span class="stat-label">{{ $stat['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== PROGRAM ===== --}}
<section class="program-section" id="program">
    <div class="container">
        <p class="section-tag">PROGRAM</p>
        <h2 class="section-title">Program unggulan kami</h2>
        <p class="section-sub">Berbagai program untuk mendukung pengelolaan sampah yang berkelanjutan</p>

        <div class="program-grid">
            @foreach($programs as $program)
            <div class="program-card">
                <div class="program-icon" style="background: {{ $program['icon_bg'] }}">
                    {!! $program['icon'] !!}
                </div>
                <h3 class="program-title">{{ $program['title'] }}</h3>
                <p class="program-desc">{{ $program['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== LAYANAN / HARGA ===== --}}
<section class="layanan-section" id="layanan">
    <div class="container">
        <p class="section-tag">LAYANAN</p>
        <h2 class="section-title text-dark">Harga per kilogram</h2>
        <p class="layanan-sub">Harga per kilogram berdasarkan jenis sampah terpilah</p>

        <div class="price-grid">
            @foreach($prices as $price)
            <div class="price-row">
                <div class="price-left">
                    <span class="price-check"></span>
                    <span class="price-name">{{ $price['name'] }}</span>
                </div>
                <span class="price-value">{{ $price['price'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CARA KERJA ===== --}}
<section class="cara-section">
    <div class="container">
        <p class="section-tag">CARA KERJA</p>
        <h2 class="section-title text-dark">Mudah hanya 4 langkah</h2>
        <p class="section-sub text-muted">Mulai menabung sampah dari rumah</p>

        <div class="steps-grid">
            @foreach($steps as $i => $step)
            <div class="step-item">
                <div class="step-num">{{ $i + 1 }}</div>
                <h3 class="step-title">{{ $step['title'] }}</h3>
                <p class="step-desc">{{ $step['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA BAND ===== --}}
<section class="cta-section" id="daftar">
    <div class="container">
        <div class="cta-inner">
            <h2 class="cta-title">Siap mulai menabung dari sampah?</h2>
            <p class="cta-sub">Bergabung bersama 340+ warga yang sudah merasakan manfaatnya</p>
            <div class="cta-actions">
                <a href="{{ route('daftar') }}" class="btn btn-cta-outline">
                    <span class="btn-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <path d="M3 9h18M9 21V9" />
                        </svg>
                    </span>
                    Daftar sekarang — gratis
                </a>
                <a href="https://wa.me/6282110244553" target="_blank" class="btn btn-cta-outline">
                    <span class="btn-icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                        </svg>
                    </span>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

@endsection