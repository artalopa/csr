@extends('layouts.general')

@section('sub_title-1', 'Berita CSR')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Berita CSR')

@section('content')

    @include('layouts.sub_title')

    <!-- Blog Section Start -->
    <section class="blog-section section-b-space pt-4">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-9 col-xl-8 col-lg-7 order-lg-1">
                    <div class="row g-4 ratio_65">

                        {{-- preview: 12 berita --}}
                        <div id="carouselExampleControls" class="carousel slide h-25" data-bs-ride="carousel">
                            <div class="carousel-inner h-25 ">
                                <div class="carousel-item active d-flex">
                                    <img src="{{ asset('user/images/slider (1).jpg') }}"
                                        class="d-block w-100 carousel-img-news rounded" alt="..."
                                        style="filter: brightness(70%)">
                                    <div class="corousel-item__title">
                                        <h3>Penyerahan Program CSR Oleh Gubernur Jateng di Karimun Jawa - Jepara</h3>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('user/images/slider (1).jpg') }}"
                                        class="d-block w-100 carousel-img-news rounded " alt="..."
                                        style="filter: brightness(70%)">
                                    <div class="corousel-item__title">
                                        <h3>Penyerahan Program CSR Oleh Gubernur Jateng di Karimun Jawa - Jepara</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('user/images/slider (1).jpg') }}"
                                        class="d-block w-100 carousel-img-news rounded" alt="..."
                                        style="filter: brightness(70%)">
                                    <div class="corousel-item__title">
                                        <h3>Penyerahan Program CSR Oleh Gubernur Jateng di Karimun Jawa - Jepara</h3>
                                    </div>
                                </div>
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
                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-sm-6">
                            <div class="blog-box wow fadeInUp">
                                <div class="blog-image">
                                    <a href="{{ url('/information/csr-news/details') }}" class="bg-size blur-up lazyload"
                                        style="background-image: url('../user/images/slider (1).jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="../user/images/slider (1).jpg" class="bg-img blur-up lazyload"
                                            alt="">
                                    </a>
                                </div>

                                <div class="blog-contain">
                                    <div class="blog-label">
                                        <span class="time"><i data-feather="clock"></i> <span>25 Feg, 2022</span></span>
                                        <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                Speight</span></span>
                                    </div>
                                    <a href="{{ url('/information/csr-news/details') }}">
                                        <h3>one pot creamy mediterranean chicken pasta cream.</h3>
                                    </a>
                                    <button onclick="location.href = '{{ url('/information/csr-news/details') }}';"
                                        class="blog-button">Read
                                        More
                                        <i class="fa-solid fa-right-long"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="custome-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 order-lg-2">
                    <div class="left-sidebar-box wow fadeInUp">
                        <div class="left-search-box">
                            <div class="search-box">
                                <input type="search" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Search....">
                            </div>
                        </div>

                        <div class="accordion left-accordion-box" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Recent Post
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body pt-0">
                                        <div class="recent-post-box">

                                            {{-- preview: 4 recent post --}}
                                            <div class="recent-box">
                                                <a href="{{ url('/information/csr-news/details') }}"
                                                    class="recent-image">
                                                    <img src="../user/images/slider (1).jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="{{ url('/information/csr-news/details') }}">
                                                        <h5 class="recent-name">Green onion knife and salad placed</h5>
                                                    </a>
                                                    <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="{{ url('/information/csr-news/details') }}"
                                                    class="recent-image">
                                                    <img src="../user/images/slider (1).jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="{{ url('/information/csr-news/details') }}">
                                                        <h5 class="recent-name">Health and skin for your organic</h5>
                                                    </a>
                                                    <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="{{ url('/information/csr-news/details') }}"
                                                    class="recent-image">
                                                    <img src="../user/images/slider (1).jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="{{ url('/information/csr-news/details') }}">
                                                        <h5 class="recent-name">Health and skin for your organic</h5>
                                                    </a>
                                                    <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
                                                </div>
                                            </div>

                                            <div class="recent-box">
                                                <a href="{{ url('/information/csr-news/details') }}"
                                                    class="recent-image">
                                                    <img src="../user/images/slider (1).jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>

                                                <div class="recent-detail">
                                                    <a href="{{ url('/information/csr-news/details') }}">
                                                        <h5 class="recent-name">Health and skin for your organic</h5>
                                                    </a>
                                                    <h6>25 Jan, 2022 <i data-feather="thumbs-up"></i></h6>
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
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
