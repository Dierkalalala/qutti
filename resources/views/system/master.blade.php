<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 05:23:23 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Page Title -->
	<title>Qutti.uz - Все для вашего хозяйства </title>
	<!--Fevicon-->
	<link rel="icon" href="{{ asset('assets/img/icon/favicon.ico') }}" type="image/x-icon" />
	<!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}  ">
    <!-- linear-icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/linear-icon.css') }} ">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }} ">
    <!-- default style -->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }} ">
    <!-- Main Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }} ">

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }} "></script>
</head>
<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header area start -->
    <header class="header-pos">
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="header-top-left">
                            <ul>
                                <li><span>Email: </span><a href="mailto:support@qutti.uz"></a>support@qutti.uz</li>
                                <li>Бесплатная доставка 24/7</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        {{-- <div class="box box-right">
                            <ul>
                                <li class="settings">
                                    <a class="ha-toggle" href="#">Личный кабинет<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html">Регистрация</a></li>
                                        <li><a href="login.html">Вход</a></li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a class="ha-toggle" href="#">Язык<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html"><img src="assets/img/icon/en.png" alt=""> English</a></li>
                                        <li><a href="login.html"><img src="assets/img/icon/ge.png" alt=""> Русский</a></li>
                                    </ul>
                                </li>
                                <li class="currency">
                                    <a class="ha-toggle" href="#">Валюта<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html">UZS Cум</a></li>
                                        <li><a href="login.html">$ US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                        <div class="logo">
                            <a href="{{ route('main') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt="brand-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 order-sm-last">
                        <div class="header-middle-inner">
                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="top-cat hm1">
                                    <div class="search-form">
                                         <select name="category">
                                             @foreach ($categories as $cat) 
                                                <option value="{{ $cat->code }}">{{ $cat->name }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input name="product_name" type="text" class="top-cat-field" placeholder="Найти ">
                                <input type="submit" class="top-search-btn" value="Найти">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                        <div class="mini-cart-option">
                            <ul>
                               {{--  <li class="compare">
                                    <a class="ha-toggle" href="compare.html"><span class="lnr lnr-sync"></span>Сравнение</a>
                                </li>  --}}
                                <li class="wishlist">
                                    <a class="ha-toggle" href="{{ route('wishlist') }}"><span class="lnr lnr-heart"></span>{{-- <span class="count">1</span> --}}Избранное</a>
                                </li>
                                <li class="my-cart">
                                    <a class="" href="{{ route('cart') }}"><span class="lnr lnr-cart"></span>{{-- <span class="count"></span> --}}Корзина</a>
                                    {{-- <ul class="mini-cart-drop-down ha-dropdown">
                                        <li class="mb-30">
                                            <div class="cart-img">
                                                <a href="product-details.html"><img alt="" src="assets/img/cart/cart-1.jpg"></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="product-details.html">Koss Porta Pro On Ear  Headphones </a></h4>
                                                <span> <span>1 x </span>£165.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Sub-total: </div>
                                            <div class="subtotal-price">£48.94</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Eco Tax (-2.00): </div>
                                            <div class="subtotal-price">£1.51</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Vat (20%): </div>
                                            <div class="subtotal-price">£9.79</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Total: </div>
                                            <div class="subtotal-price"><span>£60.24</span></div>
                                        </li>
                                        <li class="mt-30">
                                            <a class="cart-button" href="cart.html">view cart</a>
                                        </li>
                                        <li>
                                            <a class="cart-button" href="checkout.html">checkout</a>
                                        </li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-top-menu theme-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-main-menu">
                            <div class="categories-menu-bar">
                                <div class="categories-menu-btn ha-toggle">
                                    <div class="left">
                                        <i class="lnr lnr-text-align-left"></i>
                                        <span>Категории</span>
                                    </div>
                                    <div class="right">
                                        <i class="lnr lnr-chevron-down"></i>
                                    </div>
                                </div>
                                <nav class="categorie-menus ha-dropdown">
                                    <ul id="menu2">
                                        @foreach ($categories as $cat)
                                            <li><a href="{{ route( 'categories' , $cat->code) }}">{{ $cat->name }}</a></li>                                    
                                        @endforeach 
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('main') }}">Главная</a>
                                        </li>
                                        <li><a href="{{ route('categories', 'categories') }}">Мы рекомендуем </a>
                                        </li>
                                        <li><a href="{{ route('blog') }}">Блог</a>
                                        </li>
                                        <li><a href="{{ route('contacts') }}">Связаться с нами</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- </div> end main menu -->
                            <div class="header-call-action">
                                <p><span class="lnr lnr-phone"></span>Позвонить: <strong><a href="tel:+998977722954">+998977722954</a></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->


    @yield('content')

       <!-- scroll to top -->
       <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <!-- footer area start -->  
    <footer>
        <!-- news-letter area start -->
        <div class="newsletter-group">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-box">
                            <div class="newsletter-inner">
                                <div class="newsletter-title">
                                    <h3>Новостная рассылка</h3>
                                    <p>Будьте первым, кто узнает о наших акциях и распродажах</p>
                                </div>
                                <div class="newsletter-box">
                                    <form id="mc-form">
                                        <input type="email" id="mc-email" autocomplete="off" class="email-box" placeholder="Введите свою почту">
                                        <button class="newsletter-btn" type="submit" id="mc-submit">Подписаться</button>
                                    </form>
                                </div>
                            </div>
                            <div class="link-follow">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-telegram"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- news-letter area end -->
        <!-- footer top area start -->
        <div class="footer-top pt-50 pb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <div class="footer-logo mb-30">
                                    <a href="{{ route('main') }}">
                                         <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <p>Мы - команда единомышленников, старающихся сделать вашу жизнь комфортнее</p>
                                {{-- <div class="payment-method">
                                    <h4>payment</h4>
                                    <img src="assets/img/payment/payment.png" alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Информация</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><a href="javascript: void(0);" data-src="#in_development" data-fancybox="in_development">О нас</a></li>
                                        <li><a href="javascript: void(0);" data-src="#in_development" data-fancybox="in_development">Доставка</a></li>
                                        <li><a href="javascript: void(0);" data-src="#in_development" data-fancybox="in_development">Политика конфиденциальности</a></li>
                                        <li><a href="javascript: void(0);" data-src="#in_development" data-fancybox="in_development">Контакты</a></li>
                                        <li><a href="javascript: void(0);" data-src="#in_development" data-fancybox="in_development">Карта сайта</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Связаться с нами</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><span>Адрес:</span> 4710-4890 Breckinridge St,Fayetteville, NC 28311</li>
                                        <li><a href="mailto:support@qutti.uz"><span>email:</span> support@qutti.uz</a></li>
                                        <li><a href="tel:+998977722954"><span>Позвоните нам:</span> <strong>+998977722954</strong></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Предстоящие распродажи</h4>
                            </div>
                            <div class="widget-body">
                                <div class="twitter-article">
                                    <div class="twitter-text">
                                        Распродажа -50% на какую-либо продукцию
                                        <span class="tweet-time">30 сентября</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer bottom area start -->
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <div class="footer-copyright ">
                            <p>Copyright © 2020 <a href="#">Qutti.uz </a>Все права защищены</p>
                            </div>
                            {{-- <div class="footer-custom-link">
                                <a href="#">Brands</a>
                                <a href="#">Specials</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->
    </footer>
    <!-- footer area end -->

    <!-- Quick view modal start -->
    <div class="modal fade" id="quickk_view">
        <div class="container">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-5.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-6.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-7.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-8.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-9.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-5.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-6.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-7.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-8.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-9.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-inner">
                                    <div class="product-details-contentt">
                                        <div class="pro-details-name mb-10">
                                            <h3>Bose SoundLink Bluetooth Speaker</h3>
                                        </div>
                                        {{-- <div class="pro-details-review mb-20">
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </li>
                                                <li><a href="#">1 Reviews</a></li>
                                            </ul>
                                        </div> --}}
                                        <div class="price-box mb-15">
                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                            <span class="old-price"><del>£60.00</del></span>
                                        </div>
                                        <div class="product-detail-sort-des pb-20">
                                            <p>Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned</p>
                                        </div>
                                        <div class="pro-details-list pt-20">
                                            <ul>
                                                <li><span>Availability :</span>In Stock</li>
                                            </ul>
                                        </div>
                                        <div class="product-availabily-option mt-15 mb-15">
                                            <h3>Available Options</h3>
                                            <div class="color-optionn">
                                                <h4><sup>*</sup>color</h4>
                                                <ul>
                                                    <li>
                                                        <a class="c-black" href="#" title="Black"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-blue" href="#" title="Blue"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-brown" href="#" title="Brown"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-gray" href="#" title="Gray"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-red" href="#" title="Red"></a>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="pro-quantity-box mb-30">
                                            <div class="qty-boxx">
                                                <label>qty :</label>
                                                <input type="text" placeholder="0">
                                                <button class="btn-cart lg-btn">add to cart</button>
                                            </div>
                                        </div>
                                        <div class="pro-social-sharing">
                                            <label>share :</label>
                                            <ul>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-facebook" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                        <span>like 0</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-twitter" title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                        <span>tweet</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-google" title="Google Plus">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span>google +</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->
    <div id="added_good" class="modal commodity_added">
        <div class="commodity-modal-text-box">
            <h2>
                Данный продукт был добавлен в вашу корзину!
            </h2>
            <p>
                Спасибо, что вы выбрали нас!
            </p>
        </div>
    </div>
    <div id="in_development" class="modal">
        <div class="commodity-modal-text-box">
            <h2>
                Данная страница ещё в процессе разработки
            </h2>
            <p>
                Уже совсем скоро она будет добавлена
            </p>
        </div>
    </div>
	<!-- all js include here -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{ asset('assets/js/popper.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/js/plugins.js') }} "></script>
    <script src="{{ asset('assets/js/ajax-mail.js') }} "></script>
    <script src="{{ asset('assets/js/main.js') }} "></script>
</body>

<!-- Mirrored from demo.hasthemes.com/sinrato-preview/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 May 2020 05:24:10 GMT -->
</html>