<nav class="navbar">
    <div class="navbar-inner">
        <a href="{{ route('home') }}" class="navbar-brand">
            <div class="brand-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
                    <polyline points="3 6 5 12 8 10 12 15 16 10 19 12 21 6" />
                    <rect x="3" y="17" width="18" height="4" rx="1" />
                </svg>
            </div>
            <div class="brand-text">
                <span class="brand-name">Bank Sampah Kita</span>
                <span class="brand-sub">Kelurahan Maju Bersama</span>
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="/" class="nav-link">Beranda</a></li>
            <li><a href="/tentang" class="nav-link">Tentang</a></li>
            <li><a href="/program" class="nav-link">Program</a></li>
            <li><a href="/layanan" class="nav-link">Layanan</a></li>
            <li><a href="/galeri" class="nav-link">Galeri</a></li>
            <li><a href="/berita" class="nav-link">Berita</a></li>
            <li><a href="/kontak" class="nav-link">Kontak</a></li>
        </ul>

        <a href="/daftar" class="btn btn-dark">Daftar Sekarang</a>

        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>