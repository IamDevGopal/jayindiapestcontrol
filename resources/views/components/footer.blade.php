@section("footer")
<footer class="footer">
    <div class="footer__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="index.html#"><img src="{{asset('img/footer-logo.png')}}" alt=""></a>
                        </div>
                        <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsa.</p>
                        <h5><img src="{{asset('img/icon/phone.png')}}" alt=""> (+91) 9135362558</h5>
                        <a href="index.html#" class="primary-btn">Request An Appoinment</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Userfull Link</h5>
                        <ul>
                            <li><a href="{{route("about")}}">About Us</a></li>
                            <li><a href="{{route("contact")}}">Contact Us</a></li>
                            <li><a href="{{route("home")}}">Testmonials</a></li>
                            <li><a href="index.html#">Terms & Conditions</a></li>
                            <li><a href="index.html#">Affiliate Program</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Our Sevices</h5>
                        <ul>
                            <li><a href="index.html#">Pest Control Services</a></li>
                            <li><a href="index.html#">Lawn and Landscape</a></li>
                            <li><a href="index.html#">Termite Treatment</a></li>
                            <li><a href="index.html#">Irrigation Services</a></li>
                            <li><a href="index.html#">Mosquito Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Contacts Us</h5>
                        <p>Address: PC colony, Malani pakdi devi sathan, Patna 20</p>
                        <ul class="footer__widget__address">
                            <li>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="31585f575e1f525e5d5e5d585371565c50585d1f525e5c">[email&#160;protected]</a></li>
                            <li>Working Hours: 24/7 Support available</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="footer__copyright__links">
                        <a href="{{route("home")}}"><span class="social_facebook"></span></a>
                        <a href="{{route("home")}}"><span class="social_twitter"></span></a>
                        <a href="{{route("home")}}"><span class="social_linkedin"></span></a>
                        <a href="{{route("home")}}"><span class="social_pinterest"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection