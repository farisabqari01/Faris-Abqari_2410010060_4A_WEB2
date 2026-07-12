@extends('admin.layouts.app')

@section('title','Schedule')

@section('content')

<div class="d-flex justify-content-between mb-4">

<h2>Streaming Schedule</h2>

<a href="{{ route('schedules.create') }}"
class="btn btn-danger">

Tambah Jadwal

</a>

</div>

<table class="table table-bordered">

<thead class="table-dark">

<tr>

<th>Judul</th>

<th>Tanggal</th>

<th>Jam</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@forelse($schedules as $schedule)

<tr>

<td>{{ $schedule->title }}</td>

<td>{{ $schedule->stream_date }}</td>

<td>{{ $schedule->stream_time }}</td>

<td>

<a href="{{ route('schedules.edit',$schedule) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form action="{{ route('schedules.destroy',$schedule) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus jadwal?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="4">

Belum ada jadwal.

</td>

</tr>

@endforelse

</tbody>

</table>

@endsection