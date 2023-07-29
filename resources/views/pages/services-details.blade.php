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


<div class="breadcrumb-option services_breadcrumb set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb__text">
<h2>{{$details}}</h2>
</div>
</div>
</div>
</div>
</div>


<section class="services-details spad">
<div class="container">
<div class="row">
<div class="col-lg-9 order-lg-2">
<div class="services__details__content">
<div class="services__details__text">
<p>Let us keep your house free of bugs and rodents. Bugs, bees, wasps, mice, as well as
rats, may be needed in the outdoor environment; but they become serious pests when they
are in your home.</p>
</div>
<div class="row">

<div class="col-lg-6 col-md-6">
<div class="services__details__widget__item">
   <?php urldecode($content);?>
{{-- <h4>Did you wake up this morning or maybe in the middle of the night.</h4>
<ul>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>In dignissim lorem metus, a cursus quam pulvinar id. In havac habitasse
platea dictumst.</p>
</li>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>Nullam faucibus, duis jessia cursus auctor, odio ante maximus urna, vitae
accumsan dui diam vel orci.</p>
</li>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
 <p>Sed nec augue quis lorem congue maximus. Cras vehicula et lacus sit asmet
convallis.</p>
</li>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>Vestibulum varius sapien eget zamcorper volutpat. Mauris accumsan nunc
sit amet turpis semper</p>
</li>
</ul> --}}
</div>
</div>

<div class="col-lg-6 col-md-6">
<div class="services__details__widget__item">
{{-- <h4>Here at Whistler Pest Control, we provide business and company.</h4>
<ul>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>Vestibulum metus urna, egestas sed sem et, pulvinar bibendum orci. Cras
scelerisque, nulla eu elementum tincidunt, lorem quam ornare metus, in
laoreet tellus eros nec massa.</p>
</li>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>Aenean dapibus fermentum risus, ac euismod purus posuere quis. Duis
dignissim tortor vitae bibendum accumsan. Nullam blandit ornare felis,
id pharetra odio dignissim eget.</p>
</li>
<li>
<img src="{{asset('img/icon/spider.png')}}" alt="">
<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur
ridiculus mus. Sed lacinia hendrerit mauris, non sagittis mi efficitur
nec. </p>
</li>
</ul> --}}
</div>
</div>

</div>
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="services__chooseus__pic">
<img src="{{asset('img/services/details/services-choose.jpg')}}" alt="">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="services__chooseus__text">
<h4>Why Choose Us?</h4>
<ul>
<li><i class="fa fa-check"></i> Expertise: Our skilled team has extensive experience in pest control solutions.</li>
<li><i class="fa fa-check"></i> Safety: We use eco-friendly methods to ensure a safe environment
</li>
<li><i class="fa fa-check"></i> Comprehensive Approach: Thorough inspections and tailored treatments for each case.</li>
<li><i class="fa fa-check"></i> Reliable Results: Count on us for effective and long-lasting pest eradication.</li>
<li><i class="fa fa-check"></i> Customer Satisfaction: Your contentment is our top priority.</li>
<li><i class="fa fa-check"></i> Prompt Response: We address your pest issues quickly and efficiently.</li>
<li><i class="fa fa-check"></i> Affordable Rates: Quality services without breaking your budget.
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="services__details__callto set-bg" data-setbg="{{asset('img/callto/call-bg.jpg')}}">
<div class="row">
<div class="col-lg-7">
<div class="services__details__callto__text">
<span>Have Any Question ?</span>
<h2>Call Us:  (+91) 9135362558</h2>
<p>Our highly trained pest control professionals have a consistent, proven approach
to addressing your unique pest problems.</p>
</div>
</div>
<div class="col-lg-5">
<div class="services__details__callto__pic">
<img src="{{asset('img/services/details/callto-pic.png')}}" alt="">
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 order-lg-1 col-md-6">
<div class="services__sidebar">
<div class="services__sidebar__categories">
<h4>All Services</h4>
<ul>
<li><a href="services-details.html#">Millipedes Control</a></li>
<li><a href="services-details.html#">Cockroaches Control</a></li>
<li><a href="services-details.html#">ANTS Control</a></li>
<li><a href="services-details.html#">Rodents Control</a></li>
<li><a href="services-details.html#">Scorpion Control</a></li>
<li><a href="services-details.html#">Centipede Control</a></li>
</ul>
</div>
<div class="services__sidebar__counter">
<div class="sidebar__counter__item">
<div class="sidebar__counter__item__pic">
<img src="{{asset('img/services/details/ci-1.png')}}" alt="">
</div>
<div class="sidebar__counter__item__text">
<h3 class="c_num">50</h3>
<span>+</span>
<p>Years Of Experience</p>
</div>
</div>
<div class="sidebar__counter__item">
<div class="sidebar__counter__item__pic">
<img src="{{asset('img/services/details/ci-2.png')}}" alt="">
</div>
<div class="sidebar__counter__item__text">
<h3 class="c_num">1254</h3>
<span>+</span>
<p>Satisfied Clients</p>
</div>
</div>
<div class="sidebar__counter__item">
<div class="sidebar__counter__item__pic">
<img src="{{asset('img/services/details/ci-3.png')}}" alt="">
</div>
<div class="sidebar__counter__item__text">
<h3 class="c_num">2000</h3>
<span>+</span>
<p>Happy Customers</p>
</div>
</div>
<div class="sidebar__counter__item">
 <div class="sidebar__counter__item__pic">
<img src="{{asset('img/services/details/ci-4.png')}}" alt="">
</div>
<div class="sidebar__counter__item__text">
<h3 class="c_num">42</h3>
<span>+</span>
<p>Awards & Certif</p>
</div>
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
@endsection