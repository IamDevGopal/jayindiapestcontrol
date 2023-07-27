@extends("default.default")

@section("Title")
About Us
@endsection

@section("Content")


@include("components.header")
@yield("header")

  <div class="breadcrumb-option set-bg" data-setbg="{{asset('img/hero/hero-1.jpg')}}">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="breadcrumb__text">
  <h2>About Company</h2>
  <div class="breadcrumb__links">
  <a href="{{route("home")}}">Home</a>
  <span>About</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
    <section class="about-page spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="about__page__title">
                        <h2>The company was founded in 1990</h2>
                        <p>Builwork is a Japanese, world-class property management and building maintenance company, with its head office located in Sendai, Japan, and operations concentrated in Japan, Vietnam, Cambodia and Singapore, and is expanding into
                            Malaysia and Indonesia in 2019.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__page__pic">
                        <div class="about__page__pic__item">
                            <img src="{{asset('img/about/ap-1.jpg')}}" alt="">
                        </div>
                        <div class="about__page__pic__item">
                            <img src="{{asset('img/about/ap-2.jpg')}}" alt="">
                        </div>
                        <div class="about__page__pic__item">
                            <img src="{{asset('img/about/ap-3.jpg')}}" alt="">
                        </div>
                        <div class="about__page__pic__item">
                            <img src="{{asset('img/about/ap-4.jpg')}}" alt="">
                        </div>
                        <div class="about__page__pic__item">
                            <img src="{{asset('img/about/ap-5.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__counter__item">
                        <img src="{{asset('img/about/ac-1.png')}}" alt="">
                        <div class="about__counter__number">
                            <h2 class="c_num">50</h2>
                            <span>+</span>
                        </div>
                        <h5>Years Of Experience</h5>
                        <p>For one thing they usually step all over the hedges and plants on the side of someone’s house killing them.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__counter__item">
                        <img src="{{asset('img/about/ac-2.png')}}" alt="">
                        <div class="about__counter__number">
                            <h2 class="c_num">1254</h2>
                            <span>+</span>
                        </div>
                        <h5>Satisfied Clients</h5>
                        <p>Once we have known the environment and its definition, we can discuss about the functions that the logo must fulfill.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__counter__item">
                        <img src="{{asset('img/about/ac-3.png')}}" alt="">
                        <div class="about__counter__number">
                            <h2 class="c_num">2000</h2>
                            <span>+</span>
                        </div>
                        <h5>Happy Customers</h5>
                        <p>Taking part with the flyers – they are tiny form or a single sheet promotional tool that easily spreads by hand.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="about__counter__item">
                        <img src="{{asset('img/about/ac-4.png')}}" alt="">
                        <div class="about__counter__number">
                            <h2 class="c_num">42</h2>
                            <span>+</span>
                        </div>
                        <h5>Awards & Certificates</h5>
                        <p>Buying advertising media based on interpersonal relationships is a common mistake made by many small businesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial about_testimonial spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>Testimonials</h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial__widget">
                                    <div class="rating__number set-bg" data-setbg="{{asset('img/icon/icon-1.png')}}">
                                        4.7
                                    </div>
                                    <div class="rating__text">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>3000 Rating</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__slider owl-carousel">
                        <div class="testimonial__item">
                            <p>“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save.”</p>
                            <h6>By John Smith</h6>
                        </div>
                        <div class="testimonial__item">
                            <p>“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change.”</p>
                            <h6>By John Smith</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Our Team</h2>
                        <p>As a leading expert in Insect and Pest Control</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{asset('img/team/team-1.jpg')}}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Jorge Hunter</h5>
                            <span>Leader</span>
                            <div class="team__item__phone">
                                <img src="{{asset('img/team/phone-white.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{asset('img/team/team-2.jpg')}}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Cecelia Web</h5>
                            <span>Leader</span>
                            <div class="team__item__phone">
                                <img src="{{asset('img/team/phone-white.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{asset('img/team/team-3.jpg')}}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Oscar Barker</h5>
                            <span>Leader</span>
                            <div class="team__item__phone">
                                <img src="{{asset('img/team/phone-white.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <div class="team__item__pic">
                            <img src="{{asset('img/team/team-4.jpg')}}" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Daisy Dennis</h5>
                            <span>Leader</span>
                            <div class="team__item__phone">
                                <img src="{{asset('img/team/phone-white.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   {{-- Import Footer --}}
   @include("components.footer")
   @yield("footer")