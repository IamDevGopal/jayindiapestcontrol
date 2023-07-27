@extends("default.default")

@section("Title")
About Us
@endsection

@section("Content")


@include("components.header")
@yield("header")


<div class="breadcrumb-option set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">
  <div class="container">
  <div class="row">
  <div class="col-lg-12">
  <div class="breadcrumb__text">
  <h2>Our Blog</h2>
  <div class="breadcrumb__links">
  <a href="{{route("home")}}">Home</a>
  <span>Blog</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  


<section class="blog spad">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="blog__large blog__page__large">
<div class="blog__large__pic">
<img src="{{asset('img/blog/blog-1.jpg')}}" alt="">
</div>
<div class="blog__large__text">
<div class="blog__date">
<span class="icon_calendar"></span>
13 January 2020 / Climb
</div>
<h3>Teeth are a very important aspect for the overall appearance of a person.</h3>
<p>The fat soluble part of the product clings to the oil and dirt as the water soluble part
allows the lipophilic part to be washed away...</p>
<a href="blog.html#">Read More</a>
</div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="{{asset('img/blog/blog-2.jpg')}}" alt="">
</div>
<div class="blog__item__text">
<div class="blog__date">
<span class="icon_calendar"></span>
13 January 2020 / Climb
</div>
 <h4><a href="blog.html#">15 Tips To Increase Your Adw....</a></h4>
<p>In today’s net-savvy world it has become common for any business to have a
website...</p>
<a href="blog.html#" class="read_more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="{{asset('img/blog/blog-3.jpg')}}" alt="">
</div>
<div class="blog__item__text">
<div class="blog__date">
<span class="icon_calendar"></span>
13 January 2020 / Climb
</div>
<h4><a href="blog.html#">Make Money Online Through...</a></h4>
<p>In today’s net-savvy world it has become common for any business to have a
website...</p>
<a href="blog.html#" class="read_more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="{{asset('img/blog/blog-4.jpg')}}" alt="">
</div>
<div class="blog__item__text">
<div class="blog__date">
<span class="icon_calendar"></span>
13 January 2020 / Climb
</div>
<h4><a href="blog.html#">Creative Outdoor Ads...</a></h4>
<p>In today’s net-savvy world it has become common for any business to have a
website...</p>
<a href="blog.html#" class="read_more">Read More</a>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
<div class="blog__item">
<div class="blog__item__pic">
<img src="{{asset('img/blog/blog-5.jpg')}}" alt="">
</div>
<div class="blog__item__text">
<div class="blog__date">
<span class="icon_calendar"></span>
13 January 2020 / Climb
</div>
<h4><a href="blog.html#">Truck Side Advertising Isn T...</a></h4>
<p>In today’s net-savvy world it has become common for any business to have a
website...</p>
<a href="blog.html#" class="read_more">Read More</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="blog__pagination">
<a href="blog.html#">1</a>
<a href="blog.html#">2</a>
<a href="blog.html#">3</a>
<a href="blog.html#">Next <i class="fa fa-angle-right"></i></a>
</div>
 </div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="blog__sidebar">
<div class="blog__sidebar__search">
<h4>Search</h4>
<form action="blog.html#">
<input type="text" placeholder="Search...">
<button type="submit"><span class="icon_search"></span></button>
</form>
</div>
<div class="blog__sidebar__categories">
<h4>Categories</h4>
<ul>
<li><a href="blog.html#">Mice</a></li>
<li><a href="blog.html#">Ants</a></li>
<li><a href="blog.html#">Bed Bugs</a></li>
<li><a href="blog.html#">Wildlife</a></li>
<li><a href="blog.html#">Roaches</a></li>
<li><a href="blog.html#">Stinging Pest</a></li>
</ul>
</div>
<div class="blog__sidebar__recent">
<h4>Recent Posts</h4>
<div class="blog__sidebar__recent__item">
<img src="{{asset('img/blog/recent-1.jpg')}}" alt="">
<h5><a href="blog.html#">A Sound Way To Treat Hearing Loss In...</a></h5>
<p><span class="icon_calendar"></span> May 15, 2020</p>
</div>
</div>
<div class="blog__sidebar__tag">
<h4>Popular Tag</h4>
<div class="blog__sidebar__tag__links">
<a href="blog.html#">Control</a>
<a href="blog.html#">Pest</a>
<a href="blog.html#">Clean</a>
<a href="blog.html#">Unique</a>
<a href="blog.html#">Safety</a>
<a href="blog.html#">Bed Bugs</a>
<a href="blog.html#">Roches</a>
<a href="blog.html#">Ants</a>
<a href="blog.html#">Stinging Pest</a>
<a href="blog.html#">Trendding</a>
</div>
</div>
<div class="blog__sidebar__subscribe">
<h4>Subscribe</h4>
<p>We treat every single pest removal job the way we would manage the job at our own home
</p>
<form action="blog.html#">
<input type="text" placeholder="Email address....">
<button type="submit">Sign Up</button>
</form>
</div>
</div>
</div>
</div>
</div>
</section>

   {{-- Import Footer --}}
   @include("components.footer")
   @yield("footer")