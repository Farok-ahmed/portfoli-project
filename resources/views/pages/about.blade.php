@extends('layout.app')
@section('contend')
<section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
    <div class="container">
        <div class="banner-inner text-white">
            <h1 class="page-title wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">About Me</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About Me</li>
                </ol>
            </nav>
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
@include('componands.about')

@include('componands.services')

@include('componands.testimonial')
@endsection
