@extends('home.home_master')
@section('home')

{{-- Hero --}}
@include('home.home_layout.slider')

{{-- Features --}}
@include('home.home_layout.features')


@include('home.home_layout.clarifies')
  <!-- end content -->

  @include('home.home_layout.get_all')


  <div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
  </div>
  <!-- end content -->

  @include('home.home_layout.video')
  <div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/assets/images/shape/shape3.svg') }}" alt="">
  </div>
  <!-- end video -->

  @include('home.home_layout.testimonials')
  <!-- end testimonial -->

  @include('home.home_layout.faq')
  <div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
  </div>
  <!-- end faq -->

  @include('home.home_layout.cta')
  <!-- end cta -->

@endsection