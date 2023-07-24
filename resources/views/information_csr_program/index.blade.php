@section('title', 'Program CSR')

@extends('layouts.general')

@section('sub_title-1', 'Program CSR')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Program CSR')

@section('content')

    @include('layouts.sub_title')

    <!-- Blog Section Start -->
    <section class="blog-section section-b-space pt-4">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-9 col-xl-8 col-lg-7 order-lg-1">
                    <div class="row g-4 ratio_65">

                        {{-- slider --}}
                        <div id="carouselExampleControls" class="carousel slide h-25" data-bs-ride="carousel">
                            <div class="carousel-inner h-25 ">
                                @foreach ($slider as $slider)
                                    <div class="carousel-item">
                                        <img src="{{ asset('uploads/csr_program/' . $slider->image) }}"
                                            class="d-block w-100 carousel-img-news rounded" alt="..."
                                            style="filter: brightness(70%)">
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

                        {{-- preview: 12 berita --}}
                        @foreach ($csr_program as $result => $key)
                            <div class="col-xxl-4 col-sm-6">
                                <div class="blog-box wow fadeInUp">
                                    <div class="blog-image">
                                        <a href="{{ route('csr-program-web.show', ['slug' => $key->slug]) }}"
                                            class="bg-size blur-up lazyload"
                                            style="background-image: url(&quot;{{ asset('uploads/csr_program/' . $key->image) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="{{ asset('uploads/csr_program/' . $key->image) }}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>

                                    <div class="blog-contain">
                                        <div class="blog-label">
                                            <span class="time"><i data-feather="clock"></i>
                                                <span>{{ $key->created_at }}</span></span>
                                            <span class="super"><i data-feather="user"></i> <span>Mark J.
                                                    Speight</span></span>
                                        </div>
                                        <a href="{{ route('csr-program-web.show', ['slug' => $key->slug]) }}">
                                            <h3>{{ $key->title }}</h3>
                                        </a>
                                        <button
                                            onclick="location.href = '{{ route('csr-program-web.show', ['slug' => $key->slug]) }}';"
                                            class="blog-button">Read
                                            More
                                            <i class="fa-solid fa-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <nav class="custome-pagination">
                        <ul class="pagination justify-content-center">
                            {{ $csr_program->links() }}
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

                        {{-- Recent post --}}
                        @include('information_csr_program.components.recent-post')
                        {{-- Recent post end --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection

@section('script')
    {{-- <script src="{{ asset('assets/user/js/jquery-3.6.0.min.js') }}"></script> --}}
    {{-- <script>
        $('.carousel-item:first-child').addClass(['active', 'd-flex']);
    </script> --}}
@endsection
