@extends('layouts.app')

@section('content')
    <div class="main-banner-wrapper">
        <section class="banner-style-one owl-theme owl-carousel">
            <div class="slide slide-one" style="background-image: url(images/modify/dhhffh.jpeg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <span class="tag-line">Welcome to Lekslign Company</span>
                            <h3 class="banner-title">Trusted Printing <br> & Copy Center</h3>
                            <p>Design helps us to stand out, It tells a story <br> about us and what we stand for.
                            </p>
                            <div class="btn-block">
                                <a href="#" class="banner-btn">Order Online Now</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
            <div class="slide slide-one" style="background-image: url(images/modify/blog.jpeg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <span class="tag-line">Welcome to Lekslign Company</span>
                            <h3 class="banner-title">Trusted Printing <br> & Copy Center</h3>
                            <p>Design helps us to stand out, It tells a story <br> about us and what we stand for.
                            </p>
                            <div class="btn-block">
                                <a href="/contact" class="banner-btn">Order Online Now</a>
                            </div><!-- /.btn-block -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide -->
        </section><!-- /.banner-style-one -->
        <div class="carousel-btn-block banner-carousel-btn">
            <span class="carousel-btn left-btn"><i class="Lekslign-icon-music-player-play"></i></span>
            <span class="carousel-btn right-btn"><i class="Lekslign-icon-music-player-play"></i></span>
        </div><!-- /.carousel-btn-block banner-carousel-btn -->
    </div><!-- /.main-banner-wrapper -->
    <section class="service-two sec-pad sec-pad-content-margin-30 thm-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-title mb-0">
                        <p class="block-title__tag-line ">Our Services</p>
                        <h2 class="block-title__title">Lekslign - Printing Your Dreams To Reality
                        </h2>
                    </div><!-- /.block-title -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6 d-flex">
                    <div class="my-auto">
                        <p class="service-two__title-text">We are a customer driven print management company that take 
                            a great pride in positioning ourselves as your partner in communicating your brand to the 
                            target audience through high quality print services. We deploy world class technology and 
                            strict quality control at every stage of the print project in addition to delivering a 
                            great degree of flexibility, versatility and customization on the execution of every job 
                            across a spectrum of different substrates.</p>
                    </div><!-- /.my-auto -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row-5-col">
                <div class="col-5-col">
                    <div class="service-two__single hvr-float-shadow content-margin-30">
                        <img src="images/icons/tee-1-1.png" alt="Awesome Image" />
                        <h3 class="service-two__title">
                            <a href="">T-Shirt Printing</a>
                        </h3><!-- /.service-two__title -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.col-5-col -->
                <div class="col-5-col">
                    <div class="service-two__single hvr-float-shadow content-margin-30">
                        <img src="images/icons/phone-1-1.png" alt="Awesome Image" />
                        <h3 class="service-two__title">
                            <a href="">Flyer Printing</a>
                        </h3><!-- /.service-two__title -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.col-5-col -->
                <div class="col-5-col">
                    <div class="service-two__single hvr-float-shadow content-margin-30">
                        <img src="images/icons/sticker-1-1.png" alt="Awesome Image" />
                        <h3 class="service-two__title">
                            <a href="">Sticker Printing</a>
                        </h3><!-- /.service-two__title -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.col-5-col -->
                <div class="col-5-col">
                    <div class="service-two__single hvr-float-shadow content-margin-30">
                        <img src="images/icons/poster-1-1.png" alt="Awesome Image" />
                        <h3 class="service-two__title">
                            <a href="">Poster Printing</a>
                        </h3><!-- /.service-two__title -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.col-5-col -->
                <div class="col-5-col">
                    <div class="service-two__single hvr-float-shadow content-margin-30">
                        <img src="images/icons/postcard-1-1.png" alt="Awesome Image" />
                        <h3 class="service-two__title">
                            <a href="">Postcards Printing</a>
                        </h3><!-- /.service-two__title -->
                    </div><!-- /.service-two__single -->
                </div><!-- /.col-5-col -->
            </div><!-- /.row-5-col -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->
    @include('inc.service')
    <section class="brand-one">
        <div class="container">
            <div class="brand-one__carousel owl-carousel owl-theme">
                <div class="item">
                    <img src="images/untitled/bhojson.png" width="4px" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/centerspeed.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/stallion.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/ols.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/loved.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/bajaj.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/client/piaggio-logo.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/client/hero.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/faan.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/client/lifan.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/client/standard.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/astra.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/om.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/aircellence.png" alt="Awesome Image" />
                </div><!-- /.item -->
                <div class="item">
                    <img src="images/untitled/unique.png" alt="Awesome Image" />
                </div><!-- /.item -->
            </div><!-- /.brand-one__carousel -->
        </div><!-- /.container -->
    </section><!-- /.brand-one -->
    <section class="cta-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex">
                    <div class="cta-two__content my-auto">
                        <div class="block-title">
                            <p class="block-title__tag-line block-title__light-color">Lekslign Printing Services</p>
                            <h2 class="block-title__title block-title__light-color">Order for Business <br> Stuff
                            </h2>
                        </div><!-- /.block-title -->
                        <ul class="cta-two__features">
                            <li class="cta-two__features-item "><i class="fa fa-check"></i>Consistently high quality print.</li>
                            <li class="cta-two__features-item "><i class="fa fa-check"></i>A support team that absorbs your responsibilities.</li>
                            <li class="cta-two__features-item "><i class="fa fa-check"></i>Exact orders delivered on time.</li>
                            <li class="cta-two__features-item "><i class="fa fa-check"></i>Willing to adapt to your needs and provide customized solutions.</li>
                        </ul><!-- /.cta-two__features -->
                        <a href="/about" class="thm-btn cta-two__btn">Learn More</a>
                    </div><!-- /.cta-two__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <img src="images/modify/side_about.png" width="120%" class="float-left" />
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-two -->
    <section class="about-one sec-pad-top">
        <div class="container">
            <div class="block-title text-center">
                <p class="block-title__tag-line ">Our Introduction</p>
                <h2 class="block-title__title">About Lekslign</h2>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-one__single content-margin-60">
                        <h3 class="about-one__title"><a href="#">Best Printing Services</a></h3>
                        <p class="about-one__text">The quality of our printing is second to none.
                        </p>
                    </div><!-- /.about-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="about-one__single content-margin-60">
                        <h3 class="about-one__title"><a href="#">Trusted & Secure</a></h3>
                        <p class="about-one__text">Job monitoring from start to finish & perfect results for each of our clients.
                        </p>
                    </div><!-- /.about-one__single -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="about-one__single content-margin-60">
                        <h3 class="about-one__title"><a href="#">Customer Satisfaction</a></h3>
                        <p class="about-one__text">Handling critical printing, security, aluminium, & field work.
                        </p>
                    </div><!-- /.about-one__single -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    <section class="cta-one thm-black-bg">
        <div class="container-fluid p-0">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 d-flex">
                    <div class="cta-one__content-block my-auto">
                        <div class="block-title">
                            <p class="block-title__tag-line block-title__primary-color">Order Now</p>
                            <h2 class="block-title__title block-title__light-color">Get a Free Sample <br> to Feel
                                Colors</h2>
                        </div><!-- /.block-title -->
                        <p class="cta-one__text">Order a sample so you can touch and feel our premium range of <br>
                            papers and finishes for yourself. It’s free! Print full color on both <br> sides of your
                            business cards.</p>
                        <a href="/contact" class="thm-btn thm-btn__base-bg cta-one__btn">Contact Us</a>
                    </div><!-- /.cta-one__content-block -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="cta-one__image-block">
                        <img src="images/modify/test.png" alt="Awesome Image" />
                        <div class="cta-one__image-block__content text-center">
                            <h3>Lekslign Makes Every Business Card <br>
                                Unique & Professional</h3>
                        </div><!-- /.cta-one__image-block__content -->
                    </div><!-- /.cta-one__image-block -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
    <section class="project-style-one sec-pad sec-pad-content-margin-80">
        <div class="container">
        </div><!-- /.container -->
        </section><!-- /.project-style-one -->
            
@endsection