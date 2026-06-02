@extends('layouts.app')

@section('title', $artikel['judul'])

@section('content')

<section class="page-hero">
    <div class="container">

        <p class="breadcrumb">
            <a href="{{ route('berita') }}">Berita</a>
        </p>

        <h1 class="page-hero-title">
            {{ $artikel['judul'] }}
        </h1>

        <p class="page-hero-desc">
            {{ $artikel['tanggal'] }}
        </p>

    </div>
</section>

<section class="inner-section">
    <div class="container">

        <div class="article-content">

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Donec viverra, neque vitae malesuada malesuada,
                lorem magna posuere erat, vitae luctus ipsum
                velit et purus.
            </p>

            <p>
                Artikel ini nantinya dapat diambil dari database
                melalui dashboard admin.
            </p>

        </div>

    </div>
</section>

@endsection