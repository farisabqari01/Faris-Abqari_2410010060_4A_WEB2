<section id="hero" class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h1 class="display-3 fw-bold text-danger">

                    {{ $about->channel_name ?? 'White Ivy' }}

                </h1>

                <h3 class="mb-4">

                    {{ $about->tagline ?? 'Let The Smile Always Stay' }}

                </h3>

                <p class="text-secondary">

                    {{ $about->description ?? 'Welcome to the official White Ivy Channel Management Website.' }}

                </p>

                <a href="https://www.youtube.com/@whiteidd"
                   target="_blank"
                   class="btn btn-danger btn-lg rounded-pill">

                    <i class="bi bi-youtube"></i>

                    Visit White Ivy Channel

                    <div class="mt-4">

<span class="badge bg-dark me-2">

Laravel 12

</span>

<span class="badge bg-danger me-2">

Channel Management

</span>

<span class="badge bg-secondary">

White Ivy

</span>

</div>
                </a>

            </div>

            <div class="col-lg-6 text-center">

                @if(!empty($about?->profile_image))

                    <img src="{{ asset('storage/'.$about->profile_image) }}"
                         class="img-fluid hero-image"
                         alt="White Ivy">

                @else

                    <img src="{{ asset('images/profile/whiteivy.png') }}"
                         class="img-fluid hero-image"
                         alt="White Ivy">

                @endif

            </div>

        </div>

    </div>

</section>