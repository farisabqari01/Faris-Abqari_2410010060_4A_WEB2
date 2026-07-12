@extends('admin.layouts.app')

@section('title','Edit Game')

@section('content')

<h2 class="fw-bold mb-4">

Edit Game

</h2>

<form action="{{ route('games.update',$game) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

@method('PUT')

@if($game->thumbnail)

<div class="mb-3">

<img src="{{ asset('storage/'.$game->thumbnail) }}"
     width="180"
     class="rounded">

</div>

@endif

<div class="mb-3">

<label class="form-label">

Thumbnail Baru

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
       value="{{ old('title',$game->title) }}">

</div>

<div class="mb-3">

<label class="form-label">

Genre

</label>

<input type="text"
       name="genre"
       class="form-control"
       value="{{ old('genre',$game->genre) }}">

</div>

<div class="mb-3">

<label class="form-label">

Status

</label>

<select
    name="status"
    class="form-select">

<option value="Playing"
{{ $game->status=='Playing' ? 'selected' : '' }}>

Playing

</option>

<option value="Completed"
{{ $game->status=='Completed' ? 'selected' : '' }}>

Completed

</option>

<option value="Upcoming"
{{ $game->status=='Upcoming' ? 'selected' : '' }}>

Upcoming

</option>

</select>

</div>

<button class="btn btn-primary">

Update

</button>

<a href="{{ route('games.index') }}"
   class="btn btn-secondary">

Kembali

</a>

</form>

@endsection