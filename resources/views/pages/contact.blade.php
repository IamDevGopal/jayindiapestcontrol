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
  <h2>Contact Us</h2>
  <div class="breadcrumb__links">
  <a href="{{route("home")}}">Home</a>
  <span>Contact-Us</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  


<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<section class="contact spad">
<div class="container">
<div class="contact__content">
<div class="row d-flex justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h2>Contact Details</h2>
<p>As a leading expert in Insect and Pest Control</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact__widget__item">
<span class="icon_pin"></span>
<p>450 Strand, Charing Cross, United Stated</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact__widget__item">
<span class="icon_mobile"></span>
<ul>
<li>01 123 456 888</li>
<li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e07000801400d0102011c02070c2e09030f0702400d0103">[email&#160;protected]</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="contact__widget__item">
<span class="icon_mobile"></span>
<ul>
<li>Weekday: 08:00 - 20:00</li>
<li>Sunday: Closed</li>
</ul>
</div>
</div>
</div>
</div>
<div class="contact__form">
<div class="row d-flex justify-content-center">
<div class="col-lg-6">
<div class="section-title text-center">
<h2>Leave A Comment</h2>
<p>Your email address will not be published. Required fields are marked *</p>
</div>
</div>
</div>
<form action="contact.html#">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="input__item">
<p>Name</p>
<input type="text">
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="input__item">
<p>Email</p>
<input type="text">
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="input__item">
<p>Phone</p>
<input type="text">
</div>
</div>
<div class="col-lg-12">
<div class="input__item text__item">
<p>Comment</p>
<textarea></textarea>
</div>
</div>
<div class="col-lg-12 text-center">
<button type="submit" class="site-btn">Post Comment</button>
</div>
</div>
</form>
</div>
</div>
</section>

  {{-- Import Footer --}}
  @include("components.footer")
  @yield("footer")
@endsection