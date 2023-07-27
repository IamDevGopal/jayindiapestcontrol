  @extends("default.default")
@section("Title")
Homepage
@endsection

@section("Active")
active
@endsection

@section("Content")

{{-- Import header --}}
@include("components.header")
@yield("header")

    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero__text text-center w-100">
                                <span>Jay India Pest Control</span>
                                <h2>Your Shield Against Pests</h2>
                                <p>Trusted. Experienced. Dedicated.</p>
                                <a href="index.html#" class="primary-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/slide-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero__text text-center w-100">
                                <span>Your Reliable Partner in Pest Management</span>
                                <h2>Your Satisfaction is Our Priority</h2>
                                <p>Maintaining a Pest-Free Environment for Your Home</p>
                                <a href="index.html#" class="primary-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="filter">
        <div class="container">
            <div class="filter__form">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Ready To Appointment</h4>
                        <form action="index.html#">
                            <div class="input__list">
                                <div class="input__item input__large">
                                    <select>
                                        <option value="">Choose Services</option>
                                        <option value="">Ant</option>
                                        <option value="">Spider</option>
                                    </select>
                                </div>
                                <div class="input__item">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="input__item">
                                    <input type="text" placeholder="Your Phone">
                                </div>
                                <div class="input__item">
                                    <input type="text" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="input__btn">
                                <button type="submit">Appoinment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="about__title">
                            <h2>Welcome to the Pest Control Services Company</h2>
                            <p>As a leading expert in Insect and Pest Control, Pest Control is dedicated to meeting the pest control needs of household, commercial and industrial customers.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about__services__item">
                                    <h5>How Does It Work?</h5>
                                    <p>As a leading expert in Insect and Pest Control, Pest Control is dedicated to meeting the pest control needs of household, commercial and industrial customers.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about__services__item">
                                    <h5>Services We Offers</h5>
                                    <ul>
                                        <li><img src="img/icon/spider.png" alt=""> Facility Management</li>
                                        <li><img src="img/icon/spider.png" alt=""> Pest control</li>
                                        <li><img src="img/icon/spider.png" alt=""> Energy management</li>
                                        <li><img src="img/icon/spider.png" alt=""> Technical maintenance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="index.html#" class="primary-btn">About Us</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="about__pic__item about__pic__item--large">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="about__pic__item">
                            <img src="img/about/about-2.jpg" alt="">
                            <img src="img/about/about-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <p>As a leading expert in Insect and Pest Control</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-1.png" alt="">
                        </div>
                        <h5>Cockroaches</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-2.png" alt="">
                        </div>
                        <h5>ANTS</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-3.png" alt="">
                        </div>
                        <h5>Rodents</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-4.png" alt="">
                        </div>
                        <h5>Scorpion</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-5.png" alt="">
                        </div>
                        <h5>Silver Fish</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-6.png" alt="">
                        </div>
                        <h5>Millipedes</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-7.png" alt="">
                        </div>
                        <h5>Spiders</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__pic">
                            <img src="img/services/services-8.png" alt="">
                        </div>
                        <h5>Centipede</h5>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="chooseus__text">
                        <h2>Why People Choose Pest Cotrol</h2>
                        <p>Our clients receive guaranteed results due to our professional quality assurance policy that forms a solid ground for our high level of efficiency. We strive to work up to our own high standards by improving the tools and technology.</p>
                        <a href="index.html#" class="primary-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="chooseus__pic">
                        <img src="img/chooseus/chooseus-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="chooseus__list">
                        <div class="chooseus__list__item">
                            <img src="img/chooseus/ci-1.png" alt="">
                            <h5>Comfortable Price</h5>
                            <p>When you embark on your first PPC journey, you need to keep a small number of keywords at first.
                            </p>
                        </div>
                        <div class="chooseus__list__item">
                            <img src="img/chooseus/ci-2.png" alt="">
                            <h5>Safe And Clean</h5>
                            <p>It’s usually the creator of a new concept who gets the most mileage from it.</p>
                        </div>
                        <div class="chooseus__list__item">
                            <img src="img/chooseus/ci-3.png" alt="">
                            <h5>Friendly Customer Service</h5>
                            <p>Give preference to decorative types, especially it concerns your contact information.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="counter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__pic">
                            <img src="img/counter/counter-1.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="c_num">50</h2>
                            <span>+</span>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__pic">
                            <img src="img/counter/counter-2.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="c_num">1254</h2>
                            <span>+</span>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__pic">
                            <img src="img/counter/counter-3.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="c_num">2000</h2>
                            <span>+</span>
                            <p>Happy Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__pic">
                            <img src="img/counter/counter-4.png" alt="">
                        </div>
                        <div class="counter__item__text">
                            <h2 class="c_num">42</h2>
                            <span>+</span>
                            <p>Awards & Certificates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="testimonial spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="testimonial__content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h2>Testimonials</h2>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="testimonial__widget">
                                    <div class="rating__number set-bg" data-setbg="img/icon/icon-1.png">
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


    <div class="callto set-bg" data-setbg="img/callto/call-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="callto__text">
                        <span>Have Any Question ?</span>
                        <h2>Call Us: (+800) 1234 56781</h2>
                        <p>Our highly trained pest control professionals have a consistent, proven approach to addressing your unique pest problems.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="callto__pic">
                        <img src="img/callto/call-pic.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="latest spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Latest Blog Post</h2>
                        <p>As a leading expert in Insect and Pest Control</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog__large">
                        <div class="blog__large__pic">
                            <img src="img/latest/latest-large.jpg" alt="">
                        </div>
                        <div class="blog__large__text">
                            <div class="blog__date">
                                <span class="icon_calendar"></span> 13 January 2020 / Climb
                            </div>
                            <h4>Teeth are a very important aspect for the overall appearance of a person.</h4>
                            <p>The fat soluble part of the product clings to the oil and dirt as the water soluble part allows the lipophilic part to be washed away...</p>
                            <a href="index.html#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="img/latest/latest-2.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <div class="blog__date">
                                <span class="icon_calendar"></span> 13 January 2020 / Climb
                            </div>
                            <h5><a href="index.html#">Here at Whistler Pest Control, we provide business owners with multiple...</a></h5>
                            <p>The fat soluble part of the product clings to the oil and dirt as the water soluble part allows the lipophilic part to be washed away...</p>
                        </div>
                    </div>
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="img/latest/latest-3.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <div class="blog__date">
                                <span class="icon_calendar"></span> 13 January 2020 / Climb
                            </div>
                            <h5><a href="index.html#">Here at Whistler Pest Control, we provide business owners with multiple...</a></h5>
                            <p>The fat soluble part of the product clings to the oil and dirt as the water soluble part allows the lipophilic part to be washed away...</p>
                        </div>
                    </div>
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src="img/latest/latest-4.jpg" alt="">
                        </div>
                        <div class="latest__item__text">
                            <div class="blog__date">
                                <span class="icon_calendar"></span> 13 January 2020 / Climb
                            </div>
                            <h5><a href="index.html#">Here at Whistler Pest Control, we provide business owners with multiple...</a></h5>
                            <p>The fat soluble part of the product clings to the oil and dirt as the water soluble part allows the lipophilic part to be washed away...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    {{-- Import Footer --}}
    @include("components.footer")
    @yield("footer")
@endsection