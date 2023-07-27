@section("header")

<div id="preloder">
    <div class="loader"></div>
</div>

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__search">
        <span class="icon_search search-switch"></span>
    </div>
    <div class="offcanvas__logo">
        <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <ul class="offcanvas__widget">
        <li><span class="icon_map_alt"></span>F-57 PC colony, Malani pakdi devi sathan, Patna 20</li>
        <li><span class="icon_clock_alt"></span> 08:00 - 19:00</li>
    </ul>
    <div class="offcanvas__auth">
        <div class="offcanvas__auth__number"><span class="fa fa-phone"></span> (+800) 1234 56781</div>
        <div class="offcanvas__auth__social">
            <a href="index.html#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="index.html#"><i class="fa-brands fa-square-twitter"></i></a>
            <a href="index.html#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="index.html#"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
    <div class="offcanvas__btn">
        <a href="index.html#" class="primary-btn">Appoinment</a>
    </div>
</div>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="header__top__widget">
                        <li><i class="fa-solid fa-globe"></i> &nbsp; F-57 PC colony, Malani pakdi devi sathan, Patna 20</li>
                        <li><i class="fa-regular fa-clock"></i> &nbsp; 08:00AM - 07:00PM</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__number"><span class="fa fa-phone"></span> (+800) 1234 56781
                        </div>
                        <div class="header__top__right__social">
                            <a href="index.html#" title="Facebook"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="index.html#" title="Twitter"><i class="fa-brands fa-square-twitter"></i></a>
                            <a href="index.html#" title="Instagram"><i class="fa-brands fa-square-instagram"></i></a>
                            <a href="index.html#" title="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="header__options">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route("services")}}">Services</a></li>
                            <li><a href="{{route("about")}}">About</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route("contact")}}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__option__right">
                        <div class="header__option__search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="header__option__btn">
                            <a href="index.html#" class="primary-btn">Appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
@endsection