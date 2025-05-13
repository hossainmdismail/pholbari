@php
    $data = [
        [
            'id' => 1,
            'name' => '10 KG',
            'price' => 1300,
        ],
        [
            'id' => 2,
            'name' => '12 KG',
            'price' => 1500,
        ],
        [
            'id' => 3,
            'name' => '22 KG',
            'price' => 2750,
        ],
        [
            'id' => 4,
            'name' => '34 KG',
            'price' => 4250,
        ],
        [
            'id' => 5,
            'name' => '40 KG',
            'price' => 5000,
        ],
    ];
@endphp

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>{{ $product->name }}</title>
    <meta name="description" content="{{ $product->seo_description }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="keywords" content="{{ $product->seo_tags }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/pholbari/imgs/pholbari.png') }}" />
    <link rel="stylesheet" href="{{ asset('themes/pholbari') }}/css/main5103.css?v=6.0" />
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '730073492259194');
        // Track AddToCart Event
        fbq('track', 'PageView', {
            content_ids: [{{ $product->id }}], // Replace with your product ID
            content_type: 'product',
            value: {{ $product->price }}, // Replace with your product price
            currency: 'BDT'
        });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=730073492259194&ev=PageView&noscript=1" /></noscript>
    <style>
        .banner {
            background-color: #F3F9F7;
            padding: 20px 0;
        }

        .banner h1 {
            font-size: 2em;
            color: #E53D40;
            font-weight: bold;
        }

        .banner ul {
            list-style: none;
            font-size: 1.1em;
            color: #4B4B4B;
        }

        .banner img {
            max-width: 100%;
            height: auto;
        }

        .custom-flex {
            font-size: 18px;
            color: #000000b3
                /* Custom font size */
        }

        .social {
            position: fixed;
            bottom: 63px;
            right: 10px;
            z-index: 9999;
        }

        a.social-items {
            background: green;
            padding: .4rem;
            display: flex;
            border-radius: 50%;
        }
    </style>
</head>

<body class="single-product font-bd">

    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-2.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-1.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-3.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-4.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-5.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-6.jpg"
                                            alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('themes/pholbari') }}/imgs/shop/product-16-7.jpg"
                                            alt="product image" />
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-3.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-4.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-5.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-6.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-7.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-8.jpg"
                                            alt="product image" /></div>
                                    <div><img src="{{ asset('themes/pholbari') }}/imgs/shop/thumbnail-9.jpg"
                                            alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a class='text-heading' href='shop-product-right.html'>Seeds of
                                        Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$5211</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="text" name="quantity" class="qty-val" value="1"
                                            min="1">
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i
                                                class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2024</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social">
        <a href="https://wa.me/+8801338699499" target="_blank" class="social-items font-bd fw-light mb-1">
            <svg fill="#FFFFFF" width="22px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve"
                stroke="#FFFFFF">
                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                <g id="SVGRepo_iconCarrier">
                    <g id="XMLID_468_">
                        <path id="XMLID_469_"
                            d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z" />
                        <path id="XMLID_470_"
                            d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z" />
                    </g>
                </g>
            </svg>
        </a>
        <a href="https://m.me/pholbari" target="_blank" style="    background: #0d90f0;"
            class="social-items font-bd fw-light mb-1">
            <svg width="22px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0" />
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M17.3 9.6C17.6314 9.15817 17.5418 8.53137 17.1 8.2C16.6582 7.86863 16.0314 7.95817 15.7 8.4L13.3918 11.4776L11.2071 9.29289C11.0021 9.08791 10.7183 8.98197 10.4291 9.00252C10.1399 9.02307 9.87393 9.16809 9.7 9.4L6.7 13.4C6.36863 13.8418 6.45817 14.4686 6.9 14.8C7.34183 15.1314 7.96863 15.0418 8.3 14.6L10.6082 11.5224L12.7929 13.7071C12.9979 13.9121 13.2817 14.018 13.5709 13.9975C13.8601 13.9769 14.1261 13.8319 14.3 13.6L17.3 9.6Z"
                        fill="#ffffff" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z"
                        fill="#ffffff" />
                </g>
            </svg>
        </a>
    </div>
    <!--End header-->
    <main class="main">
        <div class="container mb-30">
            <div class="row">
                <div class="col-xl-10 col-lg-12 m-auto">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50 mt-30">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        @foreach ($product->uniqueAttributes() as $key => $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('files/product/' . $image->image) }}"
                                                    alt="product image" />
                                            </figure>
                                        @endforeach
                                        @if ($product->images)
                                            @foreach ($product->images as $key => $image)
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('files/product/' . $image->image) }}"
                                                        alt="product image" />
                                                </figure>
                                            @endforeach
                                        @endif
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                         @foreach ($product->uniqueAttributes() as $key => $image)
                                           <div><img src="{{ asset('files/product/' . $image->image) }}"
                                                alt="product image" /></div>
                                        @endforeach
                                        @if ($product->images)
                                            @foreach ($product->images as $key => $image)
                                                <div><img src="{{ asset('files/product/' . $image->image) }}"
                                                alt="product image" /></div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <h2 class="title-detail font-bd">{{ $product->name }}</h2>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand font-bd">{{ $product->final_price }}
                                                ৳</span>
                                            <span>
                                                <span
                                                    class="save-price font-md color3 ml-15">{{ $product->price - $product->final_price }}
                                                    Off</span>
                                                <span class="old-price font-md ml-15">{{ $product->price }}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="short-desc mb-30">
                                        <p class="font-lg font-bd">{{ $product->short_description }}</p>
                                    </div>
                                    <div class="detail-extralink mb-50">
                                        {{-- <div class="product-extra-link2">
                                            <button href="#billings" class="button button-add-to-cart"><i
                                                    class="fi-rs-shopping-cart font-bd"></i>অর্ডার করুন</button>
                                        </div> --}}
                                        <a href="#billings" class="custom-button btn btn-primary fw-light font-bd"><i
                                                class="fi-rs-shopping-cart font-bd"
                                                style="margin-right: 12px;"></i>অর্ডার করুন</a>
                                    </div>
                                    <div class="font-xs">
                                        <ul class="mr-50 float-start">
                                            <li class="mb-5">Type: <span class="text-brand">Organic</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2024</span></li>
                                            <li>LIFE: <span class="text-brand">70 days</span></li>
                                        </ul>
                                        <ul class="float-start">
                                            <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Snack</a>, <a
                                                    href="#" rel="tag">Organic</a>, <a href="#"
                                                    rel="tag">Brown</a></li>
                                            <li>Stock:<span class="in-stock text-brand ml-5">8 Items In Stock</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="product-info mb-4">
                            <div class="row align-items-center">
                                <!-- Image Section -->
                                <div class="col-md-6 mb-1">
                                    <div class="image d-flex justify-content-center align-items-center">
                                        <img width="250"
                                            src="{{ asset('themes/pholbari/imgs/svg/delivery.svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <!-- Text Section -->
                                <div class="col-md-6">
                                    <h3 class="mb-3 font-bd">সারা বাংলাদেশ ফ্রি হোম ডেলিভারি</h3>
                                    <ul>
                                        <li class="d-flex align-items-center custom-flex gap-2 mb-2">
                                            <img src="{{ asset('themes/pholbari/imgs/svg/checkmark-circle-svgrepo-com.svg') }}"
                                                alt="check"> ঢাকা শহরের সব জায়গায় হোম
                                            ডেলিভারি
                                        </li>
                                        <li class="d-flex align-items-center custom-flex gap-2 mb-2">
                                            <img src="{{ asset('themes/pholbari/imgs/svg/checkmark-circle-svgrepo-com.svg') }}"
                                                alt="check"> দেশের সব বড় শহরে হোম ডেলিভারি
                                        </li>
                                        <li class="d-flex align-items-center custom-flex gap-2 mb-2">
                                            <img src="{{ asset('themes/pholbari/imgs/svg/checkmark-circle-svgrepo-com.svg') }}"
                                                alt="check"> উপজেলা সদর থেকে ৫ কিলোমিটার
                                            এর মধ্যে হোম ডেলিভারি
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info mb-4">
                            <div class="tab-style3">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="tab-style3 text-center">
                                <h4 class="font-bd" style="color: #10783D">ওয়েবসাইটে অর্ডার করতে সমস্যা হলে বা অর্ডার
                                    করতে না পারলে প্রয়োজনে কল করুন</h4>

                                <div class="social-link mt-4 position-relative gap-3">
                                    <a href="https://wa.me/+8801338699499" target="_blank"
                                        class="btn btn-primary font-bd fw-light mb-1">
                                        <svg fill="#FFFFFF" height="16px" width="16px" version="1.1"
                                            id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308"
                                            xml:space="preserve" stroke="#FFFFFF">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <g id="SVGRepo_iconCarrier">
                                                <g id="XMLID_468_">
                                                    <path id="XMLID_469_"
                                                        d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z" />
                                                    <path id="XMLID_470_"
                                                        d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z" />
                                                </g>
                                            </g>
                                        </svg>
                                        হোয়াটসঅ্যাপে অর্ডার করুন
                                    </a>
                                    <a href="https://m.me/pholbari" target="_blank"
                                        class="btn btn-secondary font-bd fw-light mb-1">
                                        <svg width="16px" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0" />
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M17.3 9.6C17.6314 9.15817 17.5418 8.53137 17.1 8.2C16.6582 7.86863 16.0314 7.95817 15.7 8.4L13.3918 11.4776L11.2071 9.29289C11.0021 9.08791 10.7183 8.98197 10.4291 9.00252C10.1399 9.02307 9.87393 9.16809 9.7 9.4L6.7 13.4C6.36863 13.8418 6.45817 14.4686 6.9 14.8C7.34183 15.1314 7.96863 15.0418 8.3 14.6L10.6082 11.5224L12.7929 13.7071C12.9979 13.9121 13.2817 14.018 13.5709 13.9975C13.8601 13.9769 14.1261 13.8319 14.3 13.6L17.3 9.6Z"
                                                    fill="#ffffff" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12 23C10.7764 23 10.0994 22.8687 9 22.5L6.89443 23.5528C5.56462 24.2177 4 23.2507 4 21.7639V19.5C1.84655 17.492 1 15.1767 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23ZM6 18.6303L5.36395 18.0372C3.69087 16.4772 3 14.7331 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21C11.0143 21 10.552 20.911 9.63595 20.6038L8.84847 20.3397L6 21.7639V18.6303Z"
                                                    fill="#ffffff" />
                                            </g>
                                        </svg>
                                        মেসেঞ্জারে অর্ডার করুন
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-12">
                                <h2 class="section-title style-1 mb-30 font-bd">আপনি কতটুকু নিতে চান নির্বাচন করুন</h2>
                            </div>
                            <form action="{{ route('landing.order') }}" method="POST" class="col-12"
                                id="billings">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="attr-detail attr-size mb-30">
                                                <strong class="mr-10">Size / Weight: </strong>
                                                <ul class="list-filter size-filter font-small">
                                                    @if ($data)
                                                        @foreach ($data as $key => $pack)
                                                            <li class="active">
                                                                <input type="radio" id="size_{{ $key }}"
                                                                    name="package" value="{{ $pack['id'] }}"
                                                                    @if ($key == 0) checked @endif
                                                                    data-price="{{ $pack['price'] }}" />
                                                                <label for="size_{{ $key }}" class="d-flex">
                                                                    <span>{{ $pack['name'] }}</span>
                                                                    <strong>{{ $pack['price'] }} tk</strong>
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            {{-- <div class="attr-detail attr-size mb-30">
                                                <strong class="mr-10">Quantity: </strong>
                                                <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i
                                                            class="fi-rs-angle-small-down"></i></a>
                                                    <input type="text" name="quantity" class="qty-val"
                                                        value="1" min="1">
                                                    <a href="#" class="qty-up"><i
                                                            class="fi-rs-angle-small-up"></i></a>
                                                </div>
                                            </div> --}}
                                            <div class="detail-extralink mb-50">
                                                {{-- <div class="detail-qty border radius">
                                                    <a href="#" class="qty-down"><i
                                                            class="fi-rs-angle-small-down"></i></a>
                                                    <input type="text" name="quantity" class="qty-val"
                                                        value="1" min="1">
                                                    <a href="#" class="qty-up"><i
                                                            class="fi-rs-angle-small-up"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <h2 class="section-title style-1 mb-30 font-bd">আপনার তথ্য</h2>
                                        @error('err')
                                            <div class="text-danger font-bd">{{ $message }}</div>
                                        @enderror
                                        @if (session('err'))
                                            <div class="alert alert-danger"
                                                style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 15px;">
                                                {{ session('err') }}
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger"
                                                style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 15px;">
                                                <ul style="margin: 0; padding-left: 20px;">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <div class="row">
                                            <input type="text" name="product_id" value="{{ $product->id }}"
                                                hidden>
                                            <input type="text" name="inventory_id"
                                                value="{{ $product->attributes ? $product->attributes->first()->id : '' }}"
                                                hidden>
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <input type="text" required="" value="{{ old('name') }}"
                                                        name="name" placeholder="আপনার সম্পূর্ণ নাম লিখুন *">
                                                    @error('name')
                                                        <div class="text-danger font-bd">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <input type="text" required="" value="{{ old('number') }}"
                                                        name="number"
                                                        placeholder="আপনার সম্পূর্ণ মোবাইল নাম্বার লিখুন *">
                                                    @error('number')
                                                        <div class="text-danger font-bd">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row shipping_calculator">
                                                <div class="form-group col-lg-12">
                                                    <div class="custom_select">
                                                        <select class="form-control select-active" name="jela">
                                                            <option value="">আপনার জেলা নির্বাচন করুন*</option>
                                                            @php
                                                                $districts = [
                                                                    'Bagerhat',
                                                                    'Bandarban',
                                                                    'Barguna',
                                                                    'Barishal',
                                                                    'Bhola',
                                                                    'Bogura',
                                                                    'Brahmanbaria',
                                                                    'Chandpur',
                                                                    'Chattogram',
                                                                    'Chuadanga',
                                                                    "Cox's Bazar",
                                                                    'Cumilla',
                                                                    'Dhaka',
                                                                    'Dinajpur',
                                                                    'Faridpur',
                                                                    'Feni',
                                                                    'Gaibandha',
                                                                    'Gazipur',
                                                                    'Gopalganj',
                                                                    'Habiganj',
                                                                    'Jamalpur',
                                                                    'Jashore',
                                                                    'Jhalokati',
                                                                    'Jhenaidah',
                                                                    'Joypurhat',
                                                                    'Khagrachhari',
                                                                    'Khulna',
                                                                    'Kishoreganj',
                                                                    'Kurigram',
                                                                    'Kushtia',
                                                                    'Lakshmipur',
                                                                    'Lalmonirhat',
                                                                    'Madaripur',
                                                                    'Magura',
                                                                    'Manikganj',
                                                                    'Meherpur',
                                                                    'Moulvibazar',
                                                                    'Munshiganj',
                                                                    'Mymensingh',
                                                                    'Naogaon',
                                                                    'Narail',
                                                                    'Narayanganj',
                                                                    'Narsingdi',
                                                                    'Natore',
                                                                    'Nawabganj',
                                                                    'Netrakona',
                                                                    'Nilphamari',
                                                                    'Noakhali',
                                                                    'Pabna',
                                                                    'Panchagarh',
                                                                    'Patuakhali',
                                                                    'Pirojpur',
                                                                    'Rajbari',
                                                                    'Rajshahi',
                                                                    'Rangamati',
                                                                    'Rangpur',
                                                                    'Satkhira',
                                                                    'Shariatpur',
                                                                    'Sherpur',
                                                                    'Sirajganj',
                                                                    'Sunamganj',
                                                                    'Sylhet',
                                                                    'Tangail',
                                                                    'Thakurgaon',
                                                                ];
                                                            @endphp

                                                            @foreach ($districts as $district)
                                                                <option value="{{ $district }}"
                                                                    {{ old('jela') == $district ? 'selected' : '' }}>
                                                                    {{ $district }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12">
                                                    <input required="" type="text" name="house"
                                                        placeholder="আপনার সম্পূর্ণ ঠিকানা লিখুন গ্রাম ও থানা সহ*"
                                                        value="{{ old('house') }}">
                                                </div>
                                            </div>
                                            <div class="form-group mb-30">
                                                <textarea rows="5" placeholder="Additional information" name="note">{{ old('note') }}</textarea>
                                            </div>
                                        </div>
                                        <h2 class="section-title style-1 mb-30 font-bd">Shipping Area</h2>
                                        <div class="row">
                                            <div class="frb-group">
                                                @foreach ($shippings as $key => $shipping)
                                                    <div class="custom-radio-card">
                                                        <input type="radio" id="shipping-{{ $key }}"
                                                            name="shipping" value="{{ $shipping->id }}"
                                                            class="shipping-radio"
                                                            data-price="{{ $shipping->price }}" checked>
                                                        <label for="shipping-{{ $key }}"
                                                            class="custom-label">
                                                            <div class="card-content">
                                                                <div class="service-title">{{ $shipping->name }}</div>
                                                                <div class="service-price">{{ $shipping->price }} Tk
                                                                </div>
                                                            </div>
                                                            <div class="checkmark">
                                                                <span>&#10003;</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endforeach
                                                <!-- Show error message -->
                                                @error('shipping')
                                                    <div class="text-danger font-bd">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="border p-40 cart-totals ml-30 mb-50">
                                            <div class="d-flex align-items-end justify-content-between mb-30">
                                                <h4>Your Order</h4>
                                                <h6 class="text-muted">Subtotal</h6>
                                            </div>
                                            <div class="divider-2 mb-30"></div>
                                            <div class="table-responsive order_table checkout">
                                                <table class="table no-border">
                                                    <tbody>
                                                        <tr>
                                                            {{-- <td class="image product-thumbnail"><img
                                                                    src="assets/imgs/shop/product-1-1.jpg"
                                                                    alt="#"></td> --}}
                                                            <td>
                                                                <h6 class="w-160 mb-5"><a
                                                                        class='text-heading font-bd'>সাতক্ষীরার বিখ্যাত
                                                                        হিমসাগর আম</a></h6></span>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted pl-20 pr-20 quantityDisplay">x 1
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <p class="packagePrice">0</p>
                                                            </td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td>
                                                                <h6 class="w-160 mb-5">Subtotal</h6>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted pl-20 pr-20"></h6>
                                                            </td>
                                                            <td>
                                                                <p class="subtotal"></p>
                                                            </td>
                                                        </tr> --}}
                                                        <tr>
                                                            <td>
                                                                <h6 class="w-160 mb-5">Shipping</h6>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted pl-20 pr-20"></h6>
                                                            </td>
                                                            <td>
                                                                <p class="shippingPrice">60 Tk</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h6 class="w-160 mb-5">Total</h6>
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-muted pl-20 pr-20"></h6>
                                                            </td>
                                                            <td>
                                                                <h4 class="text-brand totalPrice">5689 Tk</h4>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="payment ml-30">
                                            <h4 class="mb-30">Payment</h4>
                                            <div class="payment_option">
                                                <div class="custome-radio">
                                                    <input class="form-check-input" required="" type="radio"
                                                        name="payment_option" id="exampleRadios4" checked="">
                                                    <label class="form-check-label" for="exampleRadios4"
                                                        data-bs-toggle="collapse" data-target="#checkPayment"
                                                        aria-controls="checkPayment">Cash on delivery</label>
                                                </div>
                                            </div>
                                            <div class="payment-logo d-flex">
                                                <img class="mr-15" src="assets/imgs/theme/icons/payment-paypal.svg"
                                                    alt="">
                                                <img class="mr-15" src="assets/imgs/theme/icons/payment-visa.svg"
                                                    alt="">
                                                <img class="mr-15" src="assets/imgs/theme/icons/payment-master.svg"
                                                    alt="">
                                                <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                                            </div>
                                            <button type="submit" id="submitBtn"
                                                class="btn btn-fill-out btn-block mt-30 add-to-cart">অর্ডার
                                                নিশ্চিত
                                                করুন 5,960.00৳ <i class="fi-rs-sign-out ml-15"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const packageRadios = document.querySelectorAll('input[name="package"]');
            const productPriceElem = document.querySelector(".packagePrice");
            // const subtotalElem = document.querySelector(".subtotal");
            const shippingElem = document.querySelector(".shippingPrice");
            const totalElem = document.querySelector(".totalPrice");

            function getPriceFromText(text) {
                return parseFloat(text.replace(/[^\d.]/g, "")) || 0;
            }

            function getSelectedPackagePrice() {
                const selected = Array.from(packageRadios).find(r => r.checked);
                return selected ? parseFloat(selected.dataset.price || 0) : 0;
            }

            function updatePrices() {
                const quantity = parseInt(document.querySelector(".qty-val").value) || 1;
                const baseProductPrice = getSelectedPackagePrice();
                const shippingPrice = getPriceFromText(shippingElem.textContent);

                const productPrice = baseProductPrice * quantity;
                const subtotal = productPrice;
                const total = subtotal + shippingPrice;

                productPriceElem.textContent = `${productPrice} Tk`;
                // subtotalElem.textContent = `${subtotal} Tk`;
                totalElem.textContent = `${total} Tk`;

                const addToCartBtn = document.querySelector(".add-to-cart");
                if (addToCartBtn) {
                    addToCartBtn.textContent = `অর্ডার নিশ্চিত করুন - ${total} Tk`;
                }
            }

            // Init shipping display
            const selectedShipping = document.querySelector('input[name="shipping"]:checked');
            if (selectedShipping) {
                shippingElem.textContent = `${selectedShipping.getAttribute("data-price")} Tk`;
            }

            updatePrices(); // initial load

            // Package & shipping listeners
            packageRadios.forEach(radio =>
                radio.addEventListener("change", updatePrices)
            );

            document.querySelectorAll('input[name="shipping"]').forEach(radio =>
                radio.addEventListener("change", function() {
                    const selected = document.querySelector('input[name="shipping"]:checked');
                    if (selected) {
                        shippingElem.textContent = `${selected.getAttribute("data-price")} Tk`;
                    }
                    updatePrices();
                })
            );

            document.getElementById('submitBtn').addEventListener('click', function() {
                fbq('track', 'InitiateCheckout', {
                    content_ids: [1], // Product ID(s)
                    content_type: 'product',
                    value: getSelectedPackagePrice(), // Price of the product
                    currency: 'BDT'
                });
            });

            // // Quantity input
            // document.querySelector(".qty-val").addEventListener("input", updatePrices);

            // // Qty up/down buttons
            // document.querySelector(".qty-up").addEventListener("click", function (e) {
            //     e.preventDefault();
            //     const input = document.querySelector(".qty-val");
            //     input.value = parseInt(input.value || 1) + 1;
            //     input.dispatchEvent(new Event("input"));
            // });

            // document.querySelector(".qty-down").addEventListener("click", function (e) {
            //     e.preventDefault();
            //     const input = document.querySelector(".qty-val");
            //     input.value = Math.max(1, parseInt(input.value || 1) - 1);
            //     input.dispatchEvent(new Event("input"));
            // });
        });
    </script>



</body>

</html>
