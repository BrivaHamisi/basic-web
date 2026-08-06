<div class="lonyo-section-padding position-relative overflow-hidden">
    <div class="container">
        <div class="lonyo-section-title">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <h2>Don't take our word for it, check user reviews</h2>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
                    <div class="lonyo-title-btn">
                        <a class="lonyo-default-btn t-btn" href="contact-us.html">Read Customer Stories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lonyo-testimonial-slider-init">

        @php
            use App\Models\Testimonial;
            $testimonials = Testimonial::where('published', true)->latest()->get();
        @endphp

        @foreach ($testimonials as $testimonial)
            <div class="lonyo-t-wrap wrap2 light-bg">
                <div class="lonyo-t-ratting">
                    <img src="{{ asset('frontend/assets/images/shape/star.svg') }}" alt="">
                </div>
                <div class="lonyo-t-text">
                    <p>"{{ $testimonial->message }}"</p>
                </div>
                <div class="lonyo-t-author">
                    <div class="lonyo-t-author-thumb">
                        @if ($testimonial->photo)
                            <img src="{{ asset('upload/testimonials/' . $testimonial->photo) }}" alt="Photo"
                                class="avatar-md rounded-circle" width="60" height="60">
                        @else
                            {{-- <span class="text-muted">No photo</span> --}}
                            <img src="{{ asset('frontend/assets/images/v1/img7.png') }}" alt="No Photo" class="avatar-md rounded-circle">
                        @endif
                    </div>
                    <div class="lonyo-t-author-data">
                        <p>{{ $testimonial->name }}</p>
                        <span>{{ $testimonial->position }}</span>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <div class="lonyo-t-overlay2">
        <img src="{{ asset('frontend/assets/images/v2/overlay.png') }}" alt="">
    </div>
</div>
