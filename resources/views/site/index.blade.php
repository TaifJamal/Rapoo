@extends('site.master')
@section('titel','Home |'.env('APP_NAME'))
@section('content')
 <!-- HERO
    ================================================== -->
    <section class="banner-area py-5" id="banner-3">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-9">
                   <div class="banner-content text-center style-2">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            Industry Leading Managed Services Solutions
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5 pr-0">
                            Pindom is set of landing and support pages aimed at helping companies promote new products and business launches.
                        </p>

                        <!-- Button -->
                        <a href="#!" target="_blank" class="btn btn-primary btn-circled">
                                Purchase now
                        </a>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

<section id="about" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="img-block">
                        <img src="{{ asset('siteasset/images/blog-lg.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-8 pt-6 col-md-12">
                    <div class="row justy-content-center">
                        @foreach ($abouts as $about)
                            <div class="col-lg-6 col-sm-6 col-md-6 {{ $loop->index >1 ?'':'mb-5' }} ">
                                <div class="text-center about-block">
                                    <div class="img-icon mb-4">
                                        <i class="{{$about->icoun  }}"></i>
                                    </div>
                                    <h4 class="mb-2">{{$about->titel  }}</h4>
                                    <p>{!! $about->content !!}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
</section>

@include('site.part.proces')
@include('site.part.service1')
@include('site.part.service2')

<section class="section" id="pricing">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Affordable Price Plan
                        </h2>

                        <!-- Subheading -->
                        <p>
                            Rappo can be used to create anything from a small marketing page to a sophisticated website.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                       <h3>Stnadard</h3>
                        <div class="price-block">
                             <h2><small>$</small>13<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="pricing-box">
                        <h3>Premium</h3>
                        <div class="price-block">
                             <h2><small>$</small>23<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-primary btn-circled">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="pricing-box ">
                        <h3>Business</h3>
                        <div class="price-block">
                             <h2><small>$</small>33<span>monthly</span></h2>
                        </div>

                        <ul class="price-features list-unstyled">
                            <li>Unlimited Domain</li>
                            <li>Unmetered Bandwidth</li>
                            <li>Free SSL Certificate </li>
                            <li>20 Email Subscription</li>
                            <li>SSD Hosting</li>
                        </ul>

                        <a href="#!" class="btn btn-outline-dark btn-circled">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('site.part.project')
@include('site.part.testimonial')
@include('site.part.blog')
@stop
