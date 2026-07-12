<section id="menu" class="py-5">

<div class="container">

<div class="row g-4">

<!-- GAME -->

<div class="col-md-6">

<div class="card feature-card h-100 border-0">

<div class="card-body">
    <hr class="text-danger">

<h3>🎮 Game Collection</h3>

<ul class="mt-3">

@forelse($games as $game)

<li>{{ $game->title }}</li>

@empty

<li>Belum ada data game.</li>

@endforelse

</ul>

</div>

</div>

</div>

<!-- SCHEDULE -->

<div class="col-md-6">

<div class="card feature-card h-100 border-0">

<div class="card-body">
    <hr class="text-danger">

<h3>📅 Upcoming Streams</h3>

<ul class="mt-3">

@forelse($schedules as $schedule)

<li>

<strong>{{ $schedule->title }}</strong>

<br>

<small>

{{ $schedule->stream_date }}

|

{{ $schedule->stream_time }}

</small>

</li>

@empty

<li>Belum ada jadwal.</li>

@endforelse

</ul>

</div>

</div>

</div>

<!-- ABOUT -->

<div class="col-md-6">

<div class="card feature-card h-100 border-0">

<div class="card-body">
    <hr class="text-danger">

<h3>👤 About White Ivy</h3>

<p class="mt-3">

{{ $about->description ?? '-' }}

</p>

</div>

</div>

</div>

<!-- SOCIAL MEDIA -->

<div class="col-md-6">

<div class="card feature-card h-100 border-0">

<div class="card-body">
    <hr class="text-danger">

<h3>🌐 Official Social Media</h3>

<div class="mt-3">

@forelse($socials as $social)

<a href="{{ $social->url }}"
   target="_blank"
   class="btn btn-outline-danger btn-sm me-2 mb-2">

<i class="{{ $social->icon }}"></i>

{{ $social->platform }}

</a>

@empty

Belum ada Social Media.

@endforelse

</div>

</div>

</div>

</div>

</div>

</div>

</section>