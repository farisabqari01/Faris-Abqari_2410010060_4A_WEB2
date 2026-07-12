@extends('admin.layouts.app')

@section('title','Tambah Jadwal')

@section('content')

<h2 class="mb-4">

Tambah Jadwal

</h2>

<form
action="{{ route('schedules.store') }}"
method="POST">

@csrf

<div class="mb-3">

<label>Judul Stream</label>

<input
type="text"
name="title"
class="form-control">

</div>

<div class="mb-3">

<label>Tanggal</label>

<input
type="date"
name="stream_date"
class="form-control">

</div>

<div class="mb-3">

<label>Jam</label>

<input
type="time"
name="stream_time"
class="form-control">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="description"
class="form-control"
rows="4"></textarea>

</div>

<button class="btn btn-danger">

Simpan

</button>

<a href="{{ route('schedules.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

@endsection