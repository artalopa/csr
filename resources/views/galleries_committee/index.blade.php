@extends('layouts.general')

@section('sub_title-1', 'Kegiatan Komite')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Kegiatan Komite')

@section('content')

    @include('layouts.sub_title')

    <!-- Blog Section Start -->
    <section class="blog-section section-b-space pt-4">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-12 col-xl-12 col-lg-7 order-lg-1">
                    <div class="row g-4 ratio_65">

                        {{-- preview: 12 Kegiatan Komite --}}
                        @foreach ($galleries as $result => $key)
                            <div class="col-xxl-4 col-sm-6">
                                <div class="blog-box wow fadeInUp">
                                    <div class="blog-image">
                                        <a href="{{ route('gallery-committee-web.show', ['slug' => $key->slug]) }}"
                                            class="bg-size blur-up lazyload"
                                            style="background-image: url(&quot;{{ asset('uploads/gallery/' . $key->image) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="{{ asset('uploads/gallery/' . $key->image) }}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>

                                    <div class="blog-contain">
                                        <div class="blog-label">
                                            <span class="super"><i data-feather="map-pin"></i>
                                                <span>{{ $key->location }}</span></span>
                                            <span class="time"><i data-feather="clock"></i>
                                                <span>{{ $key->date }}</span></span>
                                        </div>
                                        <a href="{{ route('gallery-committee-web.show', ['slug' => $key->slug]) }}">
                                            <h3>{{ $key->title }}</h3>
                                        </a>
                                        <button
                                            onclick="location.href = '{{ route('gallery-committee-web.show', ['slug' => $key->slug]) }}';"
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
                            {{ $galleries->links() }}
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
