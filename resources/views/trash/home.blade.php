@extends('layouts.general');

@section('content')
    <section class="home-section pt-2 ratio_50">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-9 col-lg-8 ratio_50_1">
                    <div class="home-contain furniture-contain-2" style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.137);">
                        <img src="{{ asset('uploads/banner_home/' . $bannerHome->banner_left) }}"
                            class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left mend-auto w-100">
                            <div>
                                <h6>Exclusive offer <span>30% Off</span></h6>
                                <h1 class="text-uppercase poster-1 text-content furniture-heading">Stay home &
                                    delivered your <span class="daily">Daily Needs</span></h1>
                                <button onclick="location.href = '{{ url('/news') }}'"
                                    class="btn btn-furniture mt-xxl-4 mt-3 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long ms-2 icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 d-lg-inline-block d-none">
                    <div class="home-contain h-100 home-furniture" style="box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.137);">
                        <img src="{{ asset('uploads/banner_home/' . $bannerHome->banner_right) }}"
                            class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-sm feature-detail mend-auto">
                            <div>
                                <h2 class="mt-0 theme-color text-kaushan fw-normal">Exclusive</h2>
                                <h3 class="furniture-content">Flower</h3>
                                <a href="{{ url('/news') }}"
                                    class="shop-button btn btn-furniture mt-0 d-inline-block btn-md text-content">Shop
                                    Now <i class="fa-solid fa-right-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-section">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#shipping"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Free Shipping</h3>
                            <h6 class="text-content">Free Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#service"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#pay"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#offer"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="../assets/svg/svg/service-icon-4.svg#return"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-section-2">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider arrow-slider">
                        @foreach ($categories as $result)
                            <div>
                                <div class="shop-category-box border-0 wow fadeIn">
                                    <a href="{{ url('/news/category', $result->slug) }}" class="circle-1">
                                        <img style="height: 80px; width:80px; border-radius:4px;"
                                            src="{{ asset('uploads/category/' . $result->image) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="category-name">
                                        <h6>{{ $result->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section mb-3">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Our news</h2>
            </div>

            <div class="row g-8">
                @foreach ($news as $result => $key)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp">
                        <div class="news-box-4">
                            <div class="news-image">
                                <a href="{{ url('/news', $key->slug) }}">
                                    <img style="border-radius: 4px;" src="{{ asset('uploads/news/' . $key->image) }}"
                                        class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="{{ url('/news', $key->slug) }}">
                                            <i class="iconly-Show icli"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="news-detail">
                                <a href="{{ url('/news', $key->slug) }}">
                                    <h5 class="price theme-color">{{ $key->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
