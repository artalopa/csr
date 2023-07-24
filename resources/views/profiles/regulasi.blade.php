@section('title', 'Regulasi')
@extends('layouts.general')
@section('sub_title-1', 'Profile - Regulasi')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Profile - Regulasi')
@section('content')
@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Regulasi</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Regulasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="fresh-vegetable-section">
        <div class="container-fluid-lg py-5">
            <div class="gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="fresh-contain p-center-left">
                    <div>
                        <div id="profile-image" class="float-md-start pb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fresh-image-2">
                                        <div class="bg-size blur-up lazyloaded"
                                            style="background-image: url(&quot;{{ asset('uploads/profileRegulasi/' . $profileRegulasi->image_left) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; height:350px">
                                            <img src="{{ asset('uploads/profileRegulasi/' . $profileRegulasi->image_left) }}"
                                                class="bg-img blur-up lazyloaded" alt="" style="display:none">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="fresh-image">
                                        <div class="bg-size blur-up lazyloaded"
                                            style="background-image: url(&quot;{{ asset('uploads/profileRegulasi/' . $profileRegulasi->image_right) }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block; height:350px">
                                            <img src="{{ asset('uploads/profileRegulasi/' . $profileRegulasi->image_right) }}"
                                                class="bg-img blur-up lazyload" alt="" style="display:none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-title">
                            <h4>Regulasi</h4>
                            <h2 class="w-100">Regulasi Komite TSP (Tanggung Jawab Sosial Perusahaan)
                            </h2>
                        </div>
                        <div class="delivery-list">
                            {!! $profileRegulasi->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
