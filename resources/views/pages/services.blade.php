
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
 vel facilisis.</p>
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
<p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
vel facilisis.</p>
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