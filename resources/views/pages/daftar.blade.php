@extends('layouts.app')
@section('title', 'Daftar Nasabah — Bank Sampah Kita')

@section('content')
<section style="padding: 64px 0; background: var(--green-pale); min-height: 80vh;">
    <div class="container" style="max-width: 560px;">
        <a href="{{ route('home') }}" style="font-size:13px; color:var(--text-muted); text-decoration:none; display:inline-flex; align-items:center; gap:6px; margin-bottom:28px;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
            Kembali ke beranda
        </a>

        <div style="background:white; border-radius:16px; padding:36px; box-shadow:0 4px 24px rgba(0,0,0,0.06);">
            <h1 style="font-size:22px; font-weight:700; color:var(--text-dark); margin-bottom:6px;">Daftar Nasabah Baru</h1>
            <p style="font-size:13px; color:var(--text-muted); margin-bottom:28px;">Isi formulir di bawah atau datang langsung ke pos bank sampah setiap Sabtu</p>

            @if ($errors->any())
            <div style="background:#fff0f0; border:1px solid #f5c6cb; border-radius:8px; padding:14px 18px; margin-bottom:20px; font-size:13px; color:#721c24;">
                <strong>Mohon periksa kembali:</strong>
                <ul style="margin-top:6px; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('daftar.store') }}" method="POST">
                @csrf
                <div style="display:flex; flex-direction:column; gap:18px;">

                    <div class="form-group">
                        <label class="form-label">Nama Lengkap <span style="color:#e05;">*</span></label>
                        <input type="text" name="nama" class="form-input"
                            value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">RT / RW <span style="color:#e05;">*</span></label>
                        <input type="text" name="rt_rw" class="form-input"
                            value="{{ old('rt_rw') }}" placeholder="Contoh: RT 03/RW 05" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap <span style="color:#e05;">*</span></label>
                        <textarea name="alamat" class="form-input" rows="3"
                            placeholder="Nama jalan, nomor rumah" required>{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nomor Telepon / WhatsApp <span style="color:#e05;">*</span></label>
                        <input type="text" name="telepon" class="form-input"
                            value="{{ old('telepon') }}" placeholder="Contoh: 0812-3456-7890" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email <span style="color:var(--text-muted); font-weight:400;">(opsional)</span></label>
                        <input type="email" name="email" class="form-input"
                            value="{{ old('email') }}" placeholder="Contoh: budi@email.com">
                    </div>

                    <button type="submit" class="btn btn-dark" style="width:100%; justify-content:center; padding:13px; font-size:14px; margin-top:8px;">
                        Kirim Pendaftaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('styles')
<style>
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-label { font-size: 13px; font-weight: 500; color: var(--text-dark); }
.form-input {
    width: 100%;
    border: 1.5px solid #d8e5df;
    border-radius: 8px;
    padding: 10px 14px;
    font-family: inherit;
    font-size: 14px;
    color: var(--text-dark);
    background: var(--white);
    outline: none;
    transition: border-color 0.18s;
    resize: vertical;
}
.form-input:focus { border-color: var(--green-mid); }
.form-input::placeholder { color: #a0b5ac; }
</style>
@endpush
@endsection
