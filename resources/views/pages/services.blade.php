
@extends("default.default")
@section("Title")
Homepage
@endsection

@section("Active")
active
@endsection


@section("Content")

@include("components.header")
@yield("header")

<div class="breadcrumb-option set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb__text">
<h2>Our Services</h2>
<div class="breadcrumb__links">
<a href="{{route("home")}}">Home</a>
<span>Services</span>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="services-page spad">
<div class="container">
<div class="row">

  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="services__page__item">
      <div class="services__page__item__pic">
        <img src="{{ asset("img/services/sp-1.jpg") }}" alt="">
      </div>
      <div class="services__page__item__text">
        <div class="services__page__item__icon">
          <img src="{{asset('img/services/services-1.png')}}" alt="">
        </div>
        <h5>Cockroaches</h5>
        <p>With our team of experienced professionals, we conduct meticulous inspections to identify problem areas. Our eco-friendly treatments guarantee a safe environment for your home or business.
                       </p>
       </div>
    </div>
  </div>


<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-2.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-2.png')}}" alt="">
</div>
<h5>ANTS</h5>
<p>
Experience top-notch ant control services with our expert team. We employ cutting-edge techniques to identify ant colonies and their entry points.  Your satisfaction is our commitment.
                       </p>
 </div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-3.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-3.png')}}" alt="">
</div>
<h5>Rodents</h5>
<p>Experience effective rodent control with our specialized services. Our skilled team swiftly identifies and eliminates infestations, ensuring a pest-free environment. Trust our expertise for tailored solutions.
                       </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-4.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-4.png')}}" alt="">
</div>
<h5>Scorpion</h5>
<p>
Ensure scorpion-free surroundings with our expert control services. Our team swiftly identifies and eliminates scorpion infestations, providing a safe and secure environment. Trust us for effective solutions.
                       </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-5.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-5.png')}}" alt="">
</div>
<h5>Silver Fish</h5>
<p>Eliminate silverfish infestations with our professional control services. Our team swiftly identifies and eradicates silverfish, ensuring a pest-free environment. Trust us for effective solutions and peace of mind.
                        </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-6.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-6.png')}}" alt="">
</div>
<h5>Millipedes</h5>
<p>
Combat millipede infestations with our professional control services. Our experts swiftly identify and eliminate millipedes, creating a pest-free environment. Trust us for effective solutions and lasting relief.
                     </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-7.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-7.png')}}" alt="">
</div>
<h5>Spiders</h5>
<p>Banish spiders from your space with our expert control services. Our team efficiently identifies and removes spiders, ensuring a spider-free environment. Count on us for effective solutions and peace of mind.
                       </p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="services__page__item">
<div class="services__page__item__pic">
<img src="{{ asset("img/services/sp-8.jpg") }}" alt="">
</div>
<div class="services__page__item__text">
<div class="services__page__item__icon">
<img src="{{asset('img/services/services-8.png')}}" alt="">
</div>
<h5>Centipede</h5>
<p>Eradicate centipede infestations with our pest control services. Our skilled team identifies and eliminates centipedes, creating a pest-free environment. Trust us for effective solutions and a centipede-free home or business.</p>
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