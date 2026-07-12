@extends('admin.layouts.app')

@section('title','Edit Jadwal')

@section('content')

<h2 class="mb-4">

Edit Jadwal

</h2>

<form
action="{{ route('schedules.update',$schedule) }}"
method="POST">

@csrf

@method('PUT')

<div class="mb-3">

<label>Judul Stream</label>

<input
type="text"
name="title"
class="form-control"
value="{{ old('title',$schedule->title) }}">

</div>

<div class="mb-3">

<label>Tanggal</label>

<input
type="date"
name="stream_date"
class="form-control"
value="{{ old('stream_date',$schedule->stream_date) }}">

</div>

<div class="mb-3">

<label>Jam</label>

<input
type="time"
name="stream_time"
class="form-control"
value="{{ old('stream_time',$schedule->stream_time) }}">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="description"
class="form-control"
rows="4">{{ old('description',$schedule->description) }}</textarea>

</div>

<button class="btn btn-primary">

Update

</button>

<a href="{{ route('schedules.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

@endsection