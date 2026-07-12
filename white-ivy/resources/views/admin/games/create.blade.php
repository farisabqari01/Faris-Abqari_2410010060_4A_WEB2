@extends('admin.layouts.app')

@section('title','Tambah Game')

@section('content')

<h2 class="fw-bold mb-4">

Tambah Game

</h2>

<form action="{{ route('games.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">

Thumbnail

</label>

<input type="file"
       name="thumbnail"
       class="form-control">

</div>

<div class="mb-3">

<label class="form-label">

Judul Game

</label>

<input type="text"
       name="title"
       class="form-control"
       value="{{ old('title') }}">

</div>

<div class="mb-3">

<label class="form-label">

Genre

</label>

<input type="text"
       name="genre"
       class="form-control"
       value="{{ old('genre') }}">

</div>

<div class="mb-3">

<label class="form-label">

Status

</label>

<select
    name="status"
    class="form-select">

<option value="Playing">

Playing

</option>

<option value="Completed">

Completed

</option>

<option value="Upcoming">

Upcoming

</option>

</select>

</div>

<button class="btn btn-danger">

Simpan

</button>

<a href="{{ route('games.index') }}"
   class="btn btn-secondary">

Kembali

</a>

</form>

@endsection