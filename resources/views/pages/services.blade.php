@extends('layouts.app')

@section('content')
    
<div class="inner-banner thm-black-bg text-center">
    <div class="container">
        <h2 class="inner-banner__title">Services Page</h2><!-- /.inner-banner__title -->
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a href="#">Home</a></li>
            <li class="thm-breadcrumb__item"><span>Services Page</span></li>
        </ul><!-- /.breadcrumb -->
    </div><!-- /.container -->
</div><!-- /.inner-banner -->
<section class="service-four sec-pad sec-pad-content-margin-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/tee-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Gift Items</a></h3>
                    <p class="service-four__text">T-Shirt, Polo, Face Cap.</p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/postcard-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Postcards Printing</a></h3>
                    <p class="service-four__text"></p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/phone-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Flyer Printing</a></h3>
                    <p class="service-four__text"></p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/sticker-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Sticker Printing</a></h3>
                    <p class="service-four__text"></p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/poster-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Poster Printing</a></h3>
                    <p class="service-four__text"></p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-four__single content-margin-60">
                    <div class="service-four__icon">
                        <img src="images/icons/envelop-1-1.png" alt="Awesome Image"/>
                    </div><!-- /.service-four__icon -->
                    <h3 class="service-four__title"><a href="single-service.html">Envelope Printing</a></h3>
                    <p class="service-four__text"></p>
                    <a href="single-service.html" class="service-four__link">Read More</a>
                </div><!-- /.service-four__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-four -->

<section class="cta-four thm-primary-bg sec-pad sec-pad-content-margin-30">
    <div class="container">
        <h3 class="cta-four__title content-margin-30">Looking for Design with printing?</h3><!-- /.cta-four__title -->
        <a href="" class="content-margin-30 thm-btn cta-four__btn">Learn More</a>
    </div><!-- /.container -->
</section><!-- /.cta-four -->

@include('inc.service')

@endsection