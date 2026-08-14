@php
    $slider = App\Models\Slider::where('published', 1)->first();
    $heroTitle = $slider?->title ?? 'Briva Digital';
    $heroDescription = $slider?->description ?? 'Full-Stack Digital Partner';
    $heroLink = $slider?->link ?? '#contact';
    $heroImage = $slider?->image ? asset('upload/sliders/' . $slider->image) : null;
@endphp


<!-- hero -->
<div class="lonyo-hero-section light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex align-items-center">
                <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
                    <h1 id="slider-title" contenteditable="{{ auth()->check() && auth()->user()->is_admin ? 'true' : 'false' }}" class="hero-title">{{ $heroTitle }}</h1>
                    <p class="text">{{ $heroDescription }}</p>
                    <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ $heroLink }}" class="lonyo-default-btn hero-btn">Create a free account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
                    @if ($heroImage)
                        <img src="{{ $heroImage }}" alt="Slider Image">
                    @else
                        <div class="w-full h-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                            <svg class="w-24 h-24 text-gray-300 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif
                    <div class="lonyo-hero-shape">
                        <img src="{{ asset('frontend/assets/images/shape/hero-shape1.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->
