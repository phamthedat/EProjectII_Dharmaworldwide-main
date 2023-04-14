{{--<div id="preloder">--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}

<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="/libs/client/img/logo/logo.png" style="width: 100px"></a>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <a href="#"><i class="fa fa-shopping-bag"></i></a>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/products">Product</a></li>
            <li><a href="/shopping-cart">Shopping Cart</a></li>
{{--            <li><a href="#">Pages</a>--}}
{{--                <ul class="header__menu__dropdown">--}}
{{--                    <li><a href="/checkout">Thanh Toán</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li><a href="#">Label Name</a>
                <ul class="header__menu__dropdown">
                    <li><a href="/label/name1">MonsterCat</a></li>
                    <li><a href="/label/name2">Ultra Sonic</a></li>
                    <li><a href="/label/name3">Dharma Worldwide</a></li>
                    <li><a href="/label/name4">Revealed</a></li>
                </ul>
            </li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
</div>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="/libs/client/img/logo/logo.png"></a>
                </div>
            </div>
            <div class="col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/products">Product</a></li>
                        <li><a href="/shopping/cart">Cart</a></li>
{{--                        <li><a href="#">Pages</a>--}}
{{--                            <ul class="header__menu__dropdown">--}}
{{--                                --}}
{{--                                <li><a href="/checkout">Thanh Toán</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="#">Label Name</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="/label/name1">MonsterCat</a></li>
                                <li><a href="/label/name2">Ultra Sonic</a></li>
                                <li><a href="/label/name3">Dharma Worldwide</a></li>
                                <li><a href="/label/name4">Revealed</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="header__cart">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="dropdown float-right">
                            <button class="btn dropdown-toggle border-bottom" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>&ensp;{{\Illuminate\Support\Facades\Auth::user()->fullName}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item border-0" href="/shopping/cart"><i class="fa fa-shopping-bag">
                                        Cart</i></a>
                                <a class="dropdown-item border-0" href="{{route('logout')}}"><i
                                        class="fas fa-power-off ic-logout"></i> Log Out</a>
                            </div>
                            @else
                                <ul>
                                    <li><a href="{{route('login')}}"><i class="fa fa-user">&ensp; Log In</i></a></li>
                                </ul>
                            @endif
                        </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>

<section class="hero hero-normal">
    <div class="container">
        <div class="row">
{{--            <div class="col-lg-3">--}}
{{--                <div class="hero__categories">--}}
{{--                    <div class="hero__categories__all">--}}
{{--                        <i class="fa fa-bars"></i>--}}
{{--                        <span>Toàn Bộ Sản Phẩm</span>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Rau</a></li>--}}
{{--                        <li><a href="#">Củ</a></li>--}}
{{--                        <li><a href="#">Quả</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-lg-12">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="/products">
                            <input name="search" type="text" placeholder="What are you looking for?">
                            <button type="submit" class="site-btn">Search</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+84 88.888.888</h5>
                            <span>Support 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
