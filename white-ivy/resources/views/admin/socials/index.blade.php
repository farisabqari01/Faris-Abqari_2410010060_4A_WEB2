@extends('admin.layouts.app')

@section('title','Social Media')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Social Media</h2>

    <a href="{{ route('socials.create') }}"
       class="btn btn-danger">

        <i class="bi bi-plus-circle"></i>

        Tambah Social

    </a>

</div>

<table class="table table-striped">

<thead class="table-dark">

<tr>

<th>Platform</th>

<th>Icon</th>

<th>URL</th>

<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($socials as $social)

<tr>

<td>{{ $social->platform }}</td>

<td><i class="{{ $social->icon }}"></i> {{ $social->icon }}</td>

<td>
<a href="{{ $social->url }}" target="_blank">
{{ $social->url }}
</a>
</td>

<td>

<a href="{{ route('socials.edit',$social) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="{{ route('socials.destroy',$social) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus social media ini?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center">

Belum ada data.

</td>

</tr>

@endforelse

</tbody>

</table>

@endsection