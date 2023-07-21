@extends('layouts.general')

@section('sub_title-1', 'Program')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Program')

@section('content')

    @include('layouts.sub_title')

    <section class="fresh-vegetable-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row gx-xl-5 gy-xl-0 g-3 ratio_148_1">
                <div class="col-xl-6 col-12">
                    <div class="row g-sm-4 g-2">
                        <div class="col-6">
                            <div class="fresh-image-2">
                                <div class="bg-size blur-up lazyloaded"
                                    style="background-image: url(&quot;{{ asset('user/images/slider (1).jpg') }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="{{ asset('user/images/slider (1).jpg') }}" class="bg-img blur-up lazyload"
                                        alt="" style="display: none;">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="fresh-image">
                                <div class="bg-size blur-up lazyloaded"
                                    style="background-image: url(&quot;{{ asset('user/images/slider (1).jpg') }}&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                    <img src="{{ asset('user/images/slider (1).jpg') }}" class="bg-img blur-up lazyload"
                                        alt="" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-12">
                    <div class="fresh-contain p-center-left">
                        <div>
                            <div class="review-title">
                                <h4>Laporan Tahunan</h4>
                                <h2>Lorem ipsum dolor sit</h2>
                            </div>

                            <div class="delivery-list">
                                <p class="text-content">Just a few seconds to measure your body temperature. Up to 5
                                    users! The battery lasts up to 2 years. There are many variations of passages of
                                    Lorem Ipsum available.We started in 2019 and haven't stopped smashing it since. A
                                    global brand that doesn't sleep, we are 24/7 and always bringing something new with
                                    over 100 new products dropping on the monhtly, bringing you the latest looks for
                                    less.</p>

                                <ul class="delivery-box">
                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="../assets/svg/3/delivery.svg" class="blur-up lazyloaded"
                                                    alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Free delivery for all orders</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="../assets/svg/3/leaf.svg" class="blur-up lazyloaded"
                                                    alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Only fresh foods</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="../assets/svg/3/delivery.svg" class="blur-up lazyloaded"
                                                    alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Free delivery for all orders</h5>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="delivery-box">
                                            <div class="delivery-icon">
                                                <img src="../assets/svg/3/leaf.svg" class="blur-up lazyloaded"
                                                    alt="">
                                            </div>

                                            <div class="delivery-detail">
                                                <h5 class="text">Only fresh foods</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title text-center">
                        <h4>Program</h4>
                        <h2 class="center">Program CSR Kabupaten Jepara</h2>
                    </div>

                    <div class="report-table-2">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle table-striped">
                                <thead>
                                    <th style="width: 3%;">No.</th>
                                    <th style="width: 30%;" class="text-start">Program Kegiatan</th>
                                    <th style="width: 15%;">Jumlah Kegiatan</th>
                                    <th style="width: 20%;">Total Anggaran</th>
                                    <th style="width: 30%;">Keterangan</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Lorem Ipsum Corousel Generate Token</td>
                                        <td class="text-center">170</td>
                                        <td class="text-center">Rp. 6.351.407.738</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Lorem Ipsum Corousel Generate Token</td>
                                        <td class="text-center">170</td>
                                        <td class="text-center">Rp. 6.351.407.738</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Lorem Ipsum Corousel Generate Token</td>
                                        <td class="text-center">170</td>
                                        <td class="text-center">Rp. 6.351.407.738</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Lorem Ipsum Corousel Generate Token</td>
                                        <td class="text-center">170</td>
                                        <td class="text-center">Rp. 6.351.407.738</td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    </tr>
                                    <tr class="text-center">
                                        <th colspan="2">JUMLAH</th>
                                        <th>2.557</th>
                                        <th>Rp. 19.567.345.346</th>
                                        <th></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
