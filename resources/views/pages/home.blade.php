@extends('layout.app')
@section('contend')
<section class="main-hero-area pt-150 pb-80 rel z-1">
    <div class="container container-1620">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-7">
                <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                    <span class="h2">Hello, i’m </span>
                    <h1><b>Farok Ahmed</b> web designer</h1>
                    <p>We denounce with righteous indignation dislike demoralized by the charms of pleasure</p>
                    <div class="hero-btns">
                        <a href="{{ Route('contact') }}" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                        <a href="{{ Route('contact') }}" class="read-more">Download Resume <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5 order-lg-3">
                <div class="hero-counter-wrap ms-lg-auto rmb-55 wow fadeInUp delay-0-4s">
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text plus" data-speed="3000" data-stop="13">0</span>
                        <span class="counter-title">Years Of Experience</span>
                    </div>
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text k-plus" data-speed="3000" data-stop="8">0</span>
                        <span class="counter-title">Project Complete</span>
                    </div>
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text percent" data-speed="3000" data-stop="99">0</span>
                        <span class="counter-title">Client Satisfactions</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="author-image-part wow fadeIn delay-0-3s">
                    <div class="bg-circle"></div>
                    <img src="{{ asset('fontend') }}/images/hero/farok.webp" alt="Author">
                    <div class="progress-shape">
                        <img src="{{ asset('fontend') }}/images/hero/progress-shape.png" alt="Progress">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lines">
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
    </div>
</section>

<!-- About Area start -->
@include('componands.about')
<!-- About Area end -->

<!-- Resume Area start -->
@include('componands.resume')
<!-- Resume Area end -->
 <!-- Services Area start -->
 @include('componands.services')
 <!-- Services Area end -->
  <!-- Skill Area start -->
  @include('componands.skill')
  <!-- Skill Area end -->
<!-- Projects Area start -->
@include('componands.Project')
<!-- Projects Area end -->
 <!-- Testimonial Area start -->
 @include('componands.testimonial')
 <!-- Testimonial Area end -->


 <!-- Pricing Area start -->
 @include('componands.pricing')
 <!-- Pricing Area end -->


 <!-- Contact Area start -->
@include('componands.contactForm')
 <!-- Contact Area end -->


 <!-- Blog Area start -->
@include('componands.blog')
 <!-- Blog Area end -->
@endsection
