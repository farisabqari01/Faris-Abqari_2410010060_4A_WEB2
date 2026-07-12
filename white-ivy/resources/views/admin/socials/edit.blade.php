@extends('admin.layouts.app')

@section('title','Edit Social Media')

@section('content')

<h2 class="mb-4">Edit Social Media</h2>

<form action="{{ route('socials.update',$social) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Platform</label>
<input type="text"
name="platform"
class="form-control"
value="{{ old('platform',$social->platform) }}">
</div>

<div class="mb-3">
<label>Icon</label>
<input type="text"
name="icon"
class="form-control"
value="{{ old('icon',$social->icon) }}">
</div>

<div class="mb-3">
<label>URL</label>
<input type="url"
name="url"
class="form-control"
value="{{ old('url',$social->url) }}">
</div>

<button class="btn btn-primary">

Update

</button>

<a href="{{ route('socials.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

@endsection