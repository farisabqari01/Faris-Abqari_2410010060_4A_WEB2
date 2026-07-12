@extends('admin.layouts.app')

@section('title','About Channel')

@section('content')

<h2 class="mb-4">

About Channel

</h2>

<form
action="{{ route('about.update') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@method('PUT')

@if($about->profile_image)

<div class="mb-3">

<img
src="{{ asset('storage/'.$about->profile_image) }}"
width="180"
class="rounded shadow">

</div>

@endif

<div class="mb-3">

<label>Foto Profil</label>

<input
type="file"
name="profile_image"
class="form-control">

</div>

<div class="mb-3">

<label>Nama Channel</label>

<input
type="text"
name="channel_name"
class="form-control"
value="{{ old('channel_name',$about->channel_name) }}">

</div>

<div class="mb-3">

<label>Tagline</label>

<input
type="text"
name="tagline"
class="form-control"
value="{{ old('tagline',$about->tagline) }}">

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea
name="description"
rows="8"
class="form-control">{{ old('description',$about->description) }}</textarea>

</div>

<button
class="btn btn-danger">

Simpan

</button>

</form>

@endsection