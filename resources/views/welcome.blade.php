<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>PholeBari - স্বাধের রাজা হিমসাগর আম – ১০০% ফরমালিনমুক্ত</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="PholeBari - স্বাধের রাজা হিমসাগর আম – ১০০% ফরমালিনমুক্ত" />
    <meta property="og:type" content="Ecommerce" />
    <meta property="og:url" content="https://pholbari.com/" />
    <meta property="og:image" content="{{ asset('themes/pholbari/imgs/pholbari.png') }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/pholbari/imgs/pholbari.png') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('themes/pholbari') }}/css/main5103.css?v=6.0" />
</head>

<body>
    <!--End header-->
    <main class="main pages mb-80">
        <div class="page-content pt-50">
            <div class="container">
                <div class="archive-header-2 text-center">
                    <h1 class="display-2 mb-50">PholBari</h1>
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="sidebar-widget-2 widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search vendors (by name or ID)..." />
                                        <button type="submit"><i class="fi-rs-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row vendor-grid">
                    @forelse ($products as $product)
                        <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                            <div class="vendor-wrap mb-40">
                                <div class="vendor-img-action-wrap">
                                    <div class="vendor-img">
                                        <a href='{{ route('landing.index', $product->slugs) }}'>
                                            @if ($product->images)
                                                {{-- @foreach ($product->images as $key => $image) --}}
                                                <img class="default-img"
                                                    src="{{ asset('files/product/' . $product->images->first()->image) }}"
                                                    alt="" />
                                                {{-- @endforeach --}}
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">New</span>
                                    </div>
                                </div>
                                <div class="vendor-content-wrap">
                                    <div class="d-flex justify-content-between align-items-end mb-30">
                                        <div>
                                            <div class="product-category">
                                                <span
                                                    class="text-muted">{{ $product->category ? $product->category->name : 'Unknown' }}</span>
                                            </div>
                                            <h4 class="mb-5 font-bd"><a
                                                    href='{{ route('landing.index', $product->slugs) }}'>{{ $product->name }}</a>
                                            </h4>
                                            <div class="product-rate-cover">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: 90%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (4.8)</span>
                                            </div>
                                            <div class="product-rate-cover">
                                                <h5 class="text-brand">{{ $product->getFinalPrice() }} ৳</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="vendor-info mb-30">
                                        <ul class="contact-infor text-muted">
                                            <li class="font-bd"><span>{{ $product->short_description }}</span></li>
                                        </ul>
                                    </div>
                                    <a class='btn btn-xs' href='{{ route('landing.index', $product->slugs) }}'>Visit
                                        Store <i class="fi-rs-arrow-small-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </main>
    <footer class="main">
        <div class="container pb-30">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">&copy; 2025, <strong class="text-brand">Pholbari</strong><br />All rights
                        reserved</p>
                </div>
                {{-- <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                    <div class="hotline d-lg-inline-flex mr-30">
                        <img src="{{ asset('themes/pholbari') }}/imgs/theme/icons/phone-call.svg" alt="hotline" />
                        <p>1900 - 6666<span>Working 8:00 - 22:00</span></p>
                    </div>
                    <div class="hotline d-lg-inline-flex">
                        <img src="{{ asset('themes/pholbari') }}/imgs/theme/icons/phone-call.svg" alt="hotline" />
                        <p>1900 - 8888<span>24/7 Support Center</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
                        <h6>Follow Us</h6>
                        <a href="#"><img
                                src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-facebook-white.svg"
                                alt="" /></a>
                        <a href="#"><img
                                src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-twitter-white.svg"
                                alt="" /></a>
                        <a href="#"><img
                                src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-instagram-white.svg"
                                alt="" /></a>
                        <a href="#"><img
                                src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-pinterest-white.svg"
                                alt="" /></a>
                        <a href="#"><img
                                src="{{ asset('themes/pholbari') }}/imgs/theme/icons/icon-youtube-white.svg"
                                alt="" /></a>
                    </div>
                    <p class="font-sm">Up to 15% discount on your first subscribe</p>
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('themes/pholbari') }}/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('themes/pholbari') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/slick.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/jquery.syotimer.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/wow.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/perfect-scrollbar.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/magnific-popup.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/select2.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/waypoints.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/counterup.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/jquery.countdown.min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/images-loaded.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/isotope.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/scrollup.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/jquery.vticker-min.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/jquery.theia.sticky.js"></script>
    <script src="{{ asset('themes/pholbari') }}/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="{{ asset('themes/pholbari') }}/js/main5103.js?v=6.0"></script>
    <script src="{{ asset('themes/pholbari') }}/js/shop5103.js?v=6.0"></script>
</body>

</html>
