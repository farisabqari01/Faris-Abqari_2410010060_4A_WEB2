@extends('layouts.app')

@section('title','404')

@section('content')

<div class="container text-center py-5">

<h1 class="display-1 text-danger">

404

</h1>

<h3>

Halaman Tidak Ditemukan

</h3>

<p>

Maaf, halaman yang Anda cari tidak tersedia.

</p>

<a href="{{ route('home') }}" class="btn btn-danger">

Kembali ke Beranda

</a>

</div>

@endsection