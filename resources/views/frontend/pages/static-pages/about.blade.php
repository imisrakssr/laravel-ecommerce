@extends('frontend.layout.template')

@section('title')
    <title>Multikart - Multi-purpose E-commerce Html Template</title>
@endsection

@section('body-content')

<body class="theme-color-1">


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account">
                                <i class="fa fa-user" aria-hidden="true"></i> My Account
                                <ul class="onhover-show-div">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="javascript:void(0)" onclick="openNav()">
                                    <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                    aria-hidden="true"></i> Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li>
                                                <a href="#">clothing</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">dresses</a></li>
                                                                        <li><a href="#">skirts</a></li>
                                                                        <li><a href="#">westarn wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                        <li><a href="#">sport wear</a></li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">sports wear</a></li>
                                                                        <li><a href="#">western wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li><a href="#">fashion jewellery</a></li>
                                                                        <li><a href="#">caps and hats</a></li>
                                                                        <li><a href="#">precious jewellery</a></li>
                                                                        <li><a href="#">necklaces</a></li>
                                                                        <li><a href="#">earrings</a></li>
                                                                        <li><a href="#">wrist wear</a></li>
                                                                        <li><a href="#">ties</a></li>
                                                                        <li><a href="#">cufflinks</a></li>
                                                                        <li><a href="#">pockets squares</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4"><a href="#"
                                                                    class="mega-menu-banner"><img
                                                                        src="{{ asset('frontend/images/mega-menu/fashion.jpg') }}"
                                                                        alt="" class="img-fluid blur-up lazyload"></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">bags</a>
                                                <ul>
                                                    <li><a href="#">shopper bags</a></li>
                                                    <li><a href="#">laptop bags</a></li>
                                                    <li><a href="#">clutches</a></li>
                                                    <li>
                                                        <a href="#">purses</a>
                                                        <ul>
                                                            <li><a href="#">purses</a></li>
                                                            <li><a href="#">wallets</a></li>
                                                            <li><a href="#">leathers</a></li>
                                                            <li><a href="#">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">footwear</a>
                                                <ul>
                                                    <li><a href="#">sport shoes</a></li>
                                                    <li><a href="#">formal shoes</a></li>
                                                    <li><a href="#">casual shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">watches</a></li>
                                            <li>
                                                <a href="#">Accessories</a>
                                                <ul>
                                                    <li><a href="#">fashion jewellery</a></li>
                                                    <li><a href="#">caps and hats</a></li>
                                                    <li><a href="#">precious jewellery</a></li>
                                                    <li>
                                                        <a href="#">more..</a>
                                                        <ul>
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li>
                                                                <a href="#">accessories</a>
                                                                <ul>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                    <li><a href="#">helmets</a></li>
                                                                    <li><a href="#">scarves</a></li>
                                                                    <li>
                                                                        <a href="#">more...</a>
                                                                        <ul>
                                                                            <li><a href="#">accessory gift sets</a></li>
                                                                            <li><a href="#">travel accessories</a></li>
                                                                            <li><a href="#">phone cases</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">belts & more</a></li>
                                                            <li><a href="#">wearable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">house of design</a></li>
                                            <li>
                                                <a href="#">beauty & personal care</a>
                                                <ul>
                                                    <li><a href="#">makeup</a></li>
                                                    <li><a href="#">skincare</a></li>
                                                    <li><a href="#">premium beaty</a></li>
                                                    <li>
                                                        <a href="#">more</a>
                                                        <ul>
                                                            <li><a href="#">fragrances</a></li>
                                                            <li><a href="#">luxury beauty</a></li>
                                                            <li><a href="#">hair care</a></li>
                                                            <li><a href="#">tools & brushes</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home & decor</a></li>
                                            <li><a href="#">kitchen</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="brand-logo"><a href="index.html"><img src="{{ asset('frontend/images/icon/logo.png') }}"
                                        class="img-fluid blur-up lazyload" alt=""></a></div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="index.html">Home</a></li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#">feature <div class="lable-nav">new</div></a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-1.html">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-2.html">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-3.html">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-4.html">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-5.html">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/welcome.html">welcome</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/new-product-announcement.html">announcement</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/abandonment-email.html">abandonment</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/offer.html">offer</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/offer-2.html">offer
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/product-review.html">review</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/featured-products.html">featured
                                                                                    product</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/black-friday.html">black
                                                                                    friday</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/cyber-monday.html">cyber-monday</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/flash-sale.html">flash
                                                                                    sale</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">bottom<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a></li>
                                                                            <li><a href="fashion-4.html">bottom left</a>
                                                                            </li>
                                                                            <li><a href="bicycle.html">bottom right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>search</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>model</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">Newsletter</a></li>
                                                                            <li><a href="index.html">exit<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a></li>
                                                                            <li><a href="christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a href="furniture-3.html">black
                                                                                    friday</a></li>
                                                                            <li><a href="fashion-4.html">cyber
                                                                                    monday</a></li>
                                                                            <li><a href="marketplace-demo-3.html">new
                                                                                    year</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="nursery.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="vegetables.html">qty. counter
                                                                                    <i class="fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a></li>
                                                                            <li><a href="bags.html">cart top</a></li>
                                                                            <li><a href="shoes.html">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="watch.html">cart left</a></li>
                                                                            <li><a href="tools.html">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="{{ asset('frontend/images/menu-banner.jpg') }}"
                                                                    class="img-fluid mega-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">shop</a>
                                            <ul>
                                                <li><a href="category-page(vegetables).html">tab style<span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="category-page(top-filter).html">top filter</a></li>
                                                <li><a href="category-page(modern).html">modern</a></li>
                                                <li><a href="category-page.html">left sidebar</a></li>
                                                <li><a href="category-page(right).html">right sidebar</a></li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a></li>
                                                <li><a href="category-page(metro).html">metro</a></li>
                                                <li><a href="category-page(full-width).html">full width</a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite scroll</a>
                                                </li>
                                                <li><a href=category-page(3-grid).html>three grid</a></li>
                                                <li><a href="category-page(6-grid).html">six grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">product</a>
                                            <ul>
                                                <li><a href="product-page(360-view).html">360 view <span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="product-page(video-thumbnail).html">video thumbnail<span
                                                            class="new-tag">new</span></a></li>
                                                <li>
                                                    <a href="#">sidebar</a>
                                                    <ul>
                                                        <li><a href="product-page.html">left sidebar</a></li>
                                                        <li><a href="product-page(right-sidebar).html">right sidebar</a>
                                                        </li>
                                                        <li><a href="product-page(no-sidebar).html">no sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">thumbnail image</a>
                                                    <ul>
                                                        <li><a href="product-page(left-image).html">left image</a></li>
                                                        <li><a href="product-page(right-image).html">right image</a>
                                                        </li>
                                                        <li><a href="product-page(image-outside).html">image outside</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">three column</a>
                                                    <ul>
                                                        <li><a href="product-page(3-col-left).html">thumbnail left</a>
                                                        </li>
                                                        <li><a href="product-page(3-col-right).html">thumbnail right</a>
                                                        </li>
                                                        <li><a href="product-page(3-column).html">thubnail bottom</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="product-page(4-image).html">four image</a></li>
                                                <li><a href="product-page(sticky).html">sticky</a></li>
                                                <li><a href="product-page(accordian).html">accordian</a></li>
                                                <li><a href="product-page(bundle).html">bundle</a></li>
                                                <li><a href="product-page(image-swatch).html">image swatch </a></li>
                                                <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="#">vendor</a>
                                                    <ul>
                                                        <li><a href="vendor-dashboard.html">vendor dashboard</a></li>
                                                        <li><a href="vendor-profile.html">vendor profile</a></li>
                                                        <li><a href="become-vendor.html">become vendor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">account</a>
                                                    <ul>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget_pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="order-success.html">order success</a></li>
                                                        <li><a href="order-tracking.html">order tracking<span
                                                                    class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">portfolio</a>
                                                    <ul>
                                                        <li><a href="">grid</a>
                                                            <ul>
                                                                <li><a href="grid-2-col.html">grid
                                                                        2</a></li>
                                                                <li><a href="grid-3-col.html">grid
                                                                        3</a></li>
                                                                <li><a href="grid-4-col.html">grid
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">masonry</a>
                                                            <ul>
                                                                <li><a href="masonary-2-grid.html">grid 2</a></li>
                                                                <li><a href="masonary-3-grid.html">grid 3</a></li>
                                                                <li><a href="masonary-4-grid.html">grid 4</a></li>
                                                                <li><a href="masonary-fullwidth.html">full width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="review.html">review</a>
                                                </li>
                                                <li>
                                                    <a href="#">compare</a>
                                                    <ul>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="lookbook.html">lookbook</a></li>
                                                <li><a href="sitemap.html">site map</a>
                                                </li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog-page.html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div><img src="{{ asset('frontend/images/icon/search.png') }}" onclick="openSearch()"
                                                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form>
                                                                        <div class="form-group"><input type="text"
                                                                                class="form-control"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product"></div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><img src="{{ asset('frontend/images/icon/setting.png') }}"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-settings"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#">english</a></li>
                                                    <li><a href="#">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#">euro</a></li>
                                                    <li><a href="#">rupees</a></li>
                                                    <li><a href="#">pound</a></li>
                                                    <li><a href="#">doller</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="{{ asset('frontend/images/icon/cart.png') }}"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
                                            <ul class="show-div shopping-cart">
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img class="me-3"
                                                                src="{{ asset('frontend/images/fashion/product/1.jpg') }}"
                                                                alt="Generic placeholder image"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <a href="#"><img class="me-3"
                                                                src="{{ asset('frontend/images/fashion/product/2.jpg') }}"
                                                                alt="Generic placeholder image"></a>
                                                        <div class="media-body">
                                                            <a href="#">
                                                                <h4>item name</h4>
                                                            </a>
                                                            <h4><span>1 x $ 299.00</span></h4>
                                                        </div>
                                                    </div>
                                                    <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="total">
                                                        <h5>subtotal : <span>$299.00</span></h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="buttons"><a href="cart.html" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>about us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- about section start -->
    <section class="about-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-section"><img src="{{ asset('frontend/images/about/about-us.jpg') }}"
                            class="img-fluid blur-up lazyload" alt=""></div>
                </div>
                <div class="col-sm-12">
                    <h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
                    </h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    </p>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                        demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot
                        foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail
                        in their duty through weakness of will, which is the same as saying through shrinking from toil
                        and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our
                        power of choice is untrammelled and when nothing prevents our being able to do what we like
                        best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and
                        owing to the claims of duty or the obligations of business it will frequently occur that
                        pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in
                        these matters to this principle of selection: he rejects pleasures to secure other greater
                        pleasures, or else he endures pains to avoid worse pains.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!--Testimonial start-->
    <section class="testimonial small-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slide-2 testimonial-slider no-arrow">
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/avtar.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/2.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/avtar.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/avtar.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/avtar.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <div class="text-center">
                                    <img src="{{ asset('frontend/images/avtar.jpg') }}" alt="#">
                                    <h5>Mark Jecno</h5>
                                    <h6>Designer</h6>
                                </div>
                                <div class="media-body">
                                    <p>you how all this mistaken idea of denouncing pleasure and praising pain was born
                                        and I will give you a complete account of the system, and expound the actual
                                        teachings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial ends-->


    <!--Team start-->
    <section id="team" class="team section-b-space slick-default-margin ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Our Team</h2>
                    <div class="team-4">
                        <div>
                            <div>
                                <img src="{{ asset('frontend/images/team/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Hileri Keol</h4>
                            <h6>CEo & Founder At Company</h6>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('frontend/images/team/2.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Hileri Keol</h4>
                            <h6>CEo & Founder At Company</h6>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('frontend/images/team/3.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Hileri Keol</h4>
                            <h6>CEo & Founder At Company</h6>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('frontend/images/team/4.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Hileri Keol</h4>
                            <h6>CEo & Founder At Company</h6>
                        </div>
                        <div>
                            <div>
                                <img src="{{ asset('frontend/images/team/1.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <h4>Hileri Keol</h4>
                            <h6>CEo & Founder At Company</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team ends-->


    <!-- service section -->
    <div class="container about-cls section-b-space">
        <section class="service border-section small-section">
            <div class="row">
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                            <path
                                d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0"
                                fill="#ff4c3b" />
                        </svg>
                        <div class="media-body">
                            <h4>free shipping</h4>
                            <p>free shipping world wide</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;"
                            xml:space="preserve" width="512px" height="512px">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160 c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24 c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z"
                                            fill="#ff4c3b" />
                                        <path
                                            d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552 c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8 c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32 l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8 S332.418,464,328,464z"
                                            fill="#ff4c3b" />
                                        <path
                                            d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0 C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288 V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2 c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296 c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0 c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248 c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952 C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112 C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568 c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z"
                                            fill="#ff4c3b" />
                                        <path
                                            d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704 c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947 c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888 C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002 c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002 C224.781,213.464,224.781,218.53,221.658,221.654z"
                                            fill="#ff4c3b" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="media-body">
                            <h4>24 X 7 service</h4>
                            <p>online service for new customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-block">
                    <div class="media">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                            <path
                                d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0"
                                fill="#ff4c3b" />
                            <path
                                d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0"
                                fill="#ff4c3b" />
                            <path
                                d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0"
                                fill="#ff4c3b" />
                            <path
                                d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0"
                                fill="#ff4c3b" />
                            <path
                                d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0"
                                fill="#ff4c3b" />
                            <path
                                d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0"
                                fill="#ff4c3b" />
                        </svg>
                        <div class="media-body">
                            <h4>festival offer</h4>
                            <p>new online special festival offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- service section end -->


    <!-- footer section start -->
    <footer class="footer-light">
        <div class="light-layout">
            <div class="container">
                <section class="small-section border-section border-top-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>KNOW IT ALL FIRST!</h4>
                                    <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form
                                action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                                class="form-inline subscribe-form auth-form needs-validation" method="post"
                                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                <div class="form-group mx-sm-3"><input type="text" class="form-control" name="EMAIL"
                                        id="mce-EMAIL" placeholder="Enter your email" required="required"></div>
                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="{{ asset('frontend/images/icon/logo.png') }}" alt=""></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>why we choose</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">shipping & return</a></li>
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">gallary</a></li>
                                    <li><a href="#">affiliates</a></li>
                                    <li><a href="#">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>store information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India
                                        345-659</li>
                                    <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                    <li><i class="fa fa-envelope"></i>Email Us: Support@Multikart.com</li>
                                    <li><i class="fa fa-fax"></i>Fax: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2023-24 themeforest powered by
                                pixelstrap</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li><a href="#"><img src="{{ asset('frontend/images/icon/visa.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/icon/mastercard.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('frontendimages/icon/paypal.png/') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/icon/american-express.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('frontend/images/icon/discover.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->


@endsection