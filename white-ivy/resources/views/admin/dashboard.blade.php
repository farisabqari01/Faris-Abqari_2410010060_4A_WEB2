@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')

<h2 class="fw-bold mb-4">

Dashboard White Ivy

</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body">

<h6>Total Games</h6>

<h2>{{ $totalGames }}</h2>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body">

<h6>Total Schedule</h6>

<h2>{{ $totalSchedules }}</h2>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body">

<h6>Social Media</h6>

<h2>{{ $totalSocials }}</h2>

</div>

</div>

</div>

</div>

<hr class="my-5">

<div class="row">

<div class="col-lg-6">

<div class="card shadow border-0">

<div class="card-header">

Game Terbaru

</div>

<ul class="list-group list-group-flush">

@forelse($latestGames as $game)

<li class="list-group-item">

<strong>{{ $game->title }}</strong>

<br>

<small>{{ $game->genre }}</small>

</li>

@empty

<li class="list-group-item">

Belum ada data game.

</li>

@endforelse

</ul>

</div>

</div>

<div class="col-lg-6">

<div class="card shadow border-0">

<div class="card-header">

Streaming Terdekat

</div>

<ul class="list-group list-group-flush">

@forelse($latestSchedules as $schedule)

<li class="list-group-item">

<strong>{{ $schedule->title }}</strong>

<br>

<small>

{{ $schedule->stream_date }}

|

{{ $schedule->stream_time }}

</small>

</li>

@empty

<li class="list-group-item">

Belum ada jadwal.

</li>

@endforelse

</ul>

</div>

</div>

</div>

@endsection