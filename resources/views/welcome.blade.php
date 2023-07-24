@extends('layouts.general')
@section('content')
    <section class=" pt-2 pb-2">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="home-contain h-100">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($slider as $slider)
                                    <div class="carousel-item">
                                        <img src="{{ asset('uploads/news/' . $slider->image) }}" class="d-block w-100 h-100"
                                            alt="..." style="filter: brightness(70%)">
                                        <div class="corousel-item__title">
                                            <h3>{{ $slider->title }}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">

                    <div id="calendar"></div>

                </div>
            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="container-fluid-lg mitra py-55">
            <div class="title">
                <h2>MITRA CSR</h2>
                <span class="title-leaf">
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">

                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo kanindo.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo kpjb.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo PDAM.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo pijar.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo samwon.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/logo wanxinda.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <img src="{{ asset('assets/user/logo/Logo Perumda.png') }}"
                                            class="img-fluid blur-up lazyload" style="height :150px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-2">
        <div class="container-fluid-lg">
            <div class="row row-deck">
                <div class="col-md-3 mb-3">
                    <div class="card card-custome">
                        <div class="card-body">
                            <div class="title">
                                <h2>Berita CSR</h2>
                                <span class="title-leaf">
                                </span>
                            </div>

                            @foreach ($recent as $recent)
                                <div class="card-content mb-4">
                                    <a href="{{ route('news-web.show', ['slug' => $recent->slug]) }}">
                                        <img src="{{ asset('uploads/news/' . $recent->image) }}" alt=""
                                            width="100%" height="200" style="object-fit:cover">
                                        <div class="card-content__desc">
                                            {{ $recent->title }}
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <div class="card-footer card-footer__custome">
                            <a href="{{ route('news-web.index') }}" class="more-news">Lihat berita lebih lanjut <i
                                    class="fa-solid fa-right-long"></i></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 mb-3">
                    <div class="card card-custome">
                        <div class="card-body">
                            <div class="title">
                                <h2>Kegiatan CSR</h2>
                                <span class="title-leaf">
                                </span>
                            </div>
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <div class="slider-7_1 shop-box no-arrow product-wrapper">
                                        <div id="ket1">
                                            <div class="shop-category-box">
                                                <a href="#">
                                                    <div class="shop-category-image">
                                                        <img src="{{ asset('assets/user/images/icon/icon pendidikan.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="category-box-name">
                                                        <h6>Pendidikan</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ket1">
                                            <div class="shop-category-box">
                                                <a href="#">
                                                    <div class="shop-category-image">
                                                        <img src="{{ asset('assets/user/images/icon/Icon Kesehatan.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="category-box-name">
                                                        <h6>Kesehatan</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ket1">
                                            <div class="shop-category-box">
                                                <a href="#">
                                                    <div class="shop-category-image">
                                                        <img src="{{ asset('assets/user/images/icon/Icon Lingkungan.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="category-box-name">
                                                        <h6>Lingkungan</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ket1">
                                            <div class="shop-category-box">
                                                <a href="#">
                                                    <div class="shop-category-image">
                                                        <img src="{{ asset('assets/user/images/icon/icon ekonomi.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="category-box-name">
                                                        <h6>Ekonomi</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="ket1">
                                            <div class="shop-category-box">
                                                <a href="#">
                                                    <div class="shop-category-image">
                                                        <img src="{{ asset('assets/user/images/icon/icon infrastruktur.png') }}"
                                                            class="blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="category-box-name">
                                                        <h6>Infrastruktur</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">

                                        @foreach ($kegiatanCsr as $csr)
                                            <div class="col-md-4 mb-3">
                                                <div class="card card-news__custome">
                                                    <div class="card-body card-body__custome">
                                                        <img src="{{ asset('uploads/gallery/' . $csr->image) }}"
                                                            alt="" width="100%" height="200"
                                                            style="object-fit: cover">
                                                        <div class="news-content mb-1">
                                                            <small class="pb-2">
                                                                <div class="d-flex flex-column pt-2 pb-2">
                                                                    <div><i style="width: 12px; height: 12px"
                                                                            data-feather="map-pin"></i>
                                                                        {{ $csr->location }}
                                                                    </div>
                                                                    <div><i style="width: 12px; height: 12px"
                                                                            data-feather="calendar"></i>
                                                                        {{ $csr->date }}
                                                                    </div>
                                                                </div>
                                                            </small>
                                                            <h3 class="pb-1">{{ $csr->title }}</h3>
                                                            <div>
                                                                <span>{!! $csr->description !!}</span>
                                                            </div>
                                                        </div>
                                                        <a href="{{ route('gallery-csr-web.show', ['slug' => $csr->slug]) }}"
                                                            id="detailbutton"
                                                            class="btn btn-detail__news w-80 mb-3 mx-auto"
                                                            style="border-radius: 5px !important">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-footer__custome">
                            <div class="col-12">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('gallery-csr-web.index') }}" class="more-news">Lihat kegiatan lebih
                                        lanjut <i class="fa-solid fa-right-long"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section pb-4">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custome">
                        <div class="card-body">
                            <div class="title">
                                <h2>Kegiatan Komite</h2>
                                <span class="title-leaf">
                                </span>
                            </div>
                            <div class="row ratio_65">
                                <div class="col-12 mb-3">
                                    <div class="slider-3 shop-box no-arrow product-wrapper">

                                        @foreach ($kegiatanKomite as $komite)
                                            <div>
                                                <div class="blog-box wow fadeInUp">
                                                    <div class="blog-image">
                                                        <a href="#">
                                                            <img src="{{ asset('uploads/gallery/' . $komite->image) }}"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="blog-contain">
                                                        <div class="blog-label">
                                                            <span class="super"><i data-feather="map-pin"></i>
                                                                <span>{{ $komite->location }}</span></span>
                                                            <span class="time"><i data-feather="calendar"></i>
                                                                <span>{{ $komite->date }}</span></span>
                                                        </div>
                                                        <a
                                                            href="{{ route('gallery-committee-web.show', ['slug' => $komite->slug]) }}">
                                                            <h3>{{ $komite->title }}</h3>
                                                        </a>
                                                        <button
                                                            onclick="location.href = '{{ route('gallery-committee-web.show', ['slug' => $komite->slug]) }}';"
                                                            class="blog-button">Read
                                                            More
                                                            <i class="fa-solid fa-right-long"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-section ">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5" style="height: 250px">

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
