@extends('admin.layouts.app')

@section('title','Tambah Social Media')

@section('content')

<h2 class="mb-4">Tambah Social Media</h2>

<form action="{{ route('socials.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Platform</label>
<input type="text" name="platform" class="form-control">
</div>

<div class="mb-3">
<label>Icon Bootstrap Icons</label>
<input type="text"
name="icon"
class="form-control"
placeholder="bi bi-youtube">
</div>

<div class="mb-3">
<label>URL</label>
<input type="url"
name="url"
class="form-control">
</div>

<button class="btn btn-danger">

Simpan

</button>

<a href="{{ route('socials.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

@endsection