@extends('layouts.app')

@section('content')
    
<div class="inner-banner thm-black-bg text-center">
    <div class="container">
        <h2 class="inner-banner__title">Contact Us</h2><!-- /.inner-banner__title -->
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a href="/">Home</a></li>
            <li class="thm-breadcrumb__item"><span>Contact Us</span></li>
        </ul><!-- /.breadcrumb -->
    </div><!-- /.container -->
</div><!-- /.inner-banner -->
<div class="contact-block-one sec-pad sec-pad-content-margin-50">
    <div class="container">
        <div class="block-title text-center">
            <p class="block-title__tag-line">Contact Us</p>
            <h2 class="block-title__title">Get in Touch With Us</h2>
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-lg-6">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{route('send.email')}}" method="POST">
                    @csrf
                    <div class="contact-block-one__form content-margin-50">
                        <input type="text" name="name" placeholder="Your name" required>
                        <input type="text" name="email" placeholder="Email address" required>
                        <textarea name="message" placeholder="Write message" required></textarea>
                        <button type="submit">Send Message</button>
                    </div><!-- /.contact-block-one_form -->
                </form>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="contact-block-one__info content-margin-50 thm-black-bg">
                    <p class="contact-block-one__info-item">234 8171988565 </p><!-- /.contact-block-one_info_item -->
                    <p class="contact-block-one__info-item">olalekanoffical@yahoo.com<br>
                        info@lekslign.com</p><!-- /.contact-block-one_info_item -->
                    <p class="contact-block-one__info-item">1 Olohunsogo Street, Shomolu, <br>
                        Lagos, Nigeria.</p><!-- /.contact-block-one_info_item -->
                    {{-- <div class="social-block">
                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div><!-- /.social-block --> --}}
                </div><!-- /.contact-block-one_info -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.contact-block-one -->
<div class="google-map" id="home-google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.866568849341!2d3.370518914770782!3d6.538529595270711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8da4465b7413%3A0x68ef71594e99dae5!2s1%20Olorunsogo%20St%2C%20Somolu%20102216%2C%20Lagos!5e0!3m2!1sen!2sng!4v1663339262948!5m2!1sen!2sng"
        class="google-map__contact" allowfullscreen></iframe>
</div>

@endsection