@section('title', 'Komite TSP')
@extends('layouts.general')
@section('sub_title-1', 'Profile - Komite TSP')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Profile - Komite TSP')
@section('content')
@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Komite TSP</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Komite TSP</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="fresh-vegetable-section">
        <div class="container-fluid-lg pt-5">
            <div class="gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div id="profile-image" class="float-md-start pb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fresh-image-2">
                                        <div class="bg-size blur-up lazyloaded"
                                            style="background-image: url(&quot;{{ asset('uploads/profileKomite/' . $profileKomite->image_left) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; height:350px">
                                            <img src="{{ asset('uploads/profileKomite/' . $profileKomite->image_left) }}"
                                                class="bg-img blur-up lazyloaded" alt="" style="display:none">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="fresh-image">
                                        <div class="bg-size blur-up lazyloaded"
                                            style="background-image: url(&quot;{{ asset('uploads/profileKomite/' . $profileKomite->image_right) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; height:350px">
                                            <img src="{{ asset('uploads/profileKomite/' . $profileKomite->image_right) }}"
                                                class="bg-img blur-up lazyload" alt="" style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-title">
                            <h4>Kabupaten Jepara</h4>
                            <h2 class="w-100">Profile Kabupaten Jepara</h2>
                        </div>
                        <div class="delivery-list">
                            {!! $profileKomite->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section Start -->
    {{-- <section class="client-section section-lg-space">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title text-center">
                    <h4>What We Do</h4>
                    <h2 class="center">We are Trusted by Clients</h2>
                </div>

                <div class="slider-3_1 product-wrapper">
                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/work.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>10</h2>
                            <h4>Business Years</h4>
                            <p>A coffee shop is a small business that sells coffee, pastries, and other morning
                                goods. There are many different types of coffee shops around the world.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/buy.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>80 K+</h2>
                            <h4>Products Sales</h4>
                            <p>Some coffee shops have a seating area, while some just have a spot to order and then
                                go somewhere else to sit down. The coffee shop that I am going to.</p>
                        </div>
                    </div>

                    <div>
                        <div class="clint-contain">
                            <div class="client-icon">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/svg/3/user.svg" class="blur-up lazyload" alt="">
                            </div>
                            <h2>90%</h2>
                            <h4>Happy Customers</h4>
                            <p>My goal for this coffee shop is to be able to get a coffee and get on with my day.
                                It's a Thursday morning and I am rushing between meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- Client Section End -->

    <!-- Team Section Start -->
    <section class="team-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="about-us-title text-center">
                <h4 class="text-content">Kabupaten Jepara</h4>
                <h2 class="center">Komite TSP</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-user product-wrapper">

                        @foreach ($komiteTsp as $komiteTsp)
                            <div>
                                <div class="team-box">
                                    <div class="team-iamge team-image-border">
                                        <img src="{{ asset('uploads/komiteTsp/' . $komiteTsp->image) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="team-name">
                                        <h3>{{ $komiteTsp->name }}</h3>
                                        <h5>{{ $komiteTsp->position }}</h5>
                                        <p>{{ $komiteTsp->quotes }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
@endsection
