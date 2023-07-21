@extends('layouts.general')

@section('sub_title-1', 'Contact Us')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Contact Us')

@section('content')

    @include('layouts.sub_title')

    {{-- <section class="fresh-vegetable-section section-lg-space">
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
    </section> --}}

    <section class="contact-box-section p-5">
        <div class="container-fluid-lg">
            <div class="row g-lg-5 g-3">
                <div class="col-lg-6">
                    <div class="left-sidebar-box">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-image">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/contact-us.png"
                                        class="img-fluid blur-up lazyloaded" alt="">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-title">
                                    <h3>Get In Touch</h3>
                                </div>

                                <div class="contact-detail">
                                    <div class="row g-4">
                                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-phone"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Phone</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p>{{ $contact->phone }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Email</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p>{{ $contact->email }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                                            <div class="contact-detail-box">
                                                <div class="contact-icon">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                </div>
                                                <div class="contact-detail-title">
                                                    <h4>Address</h4>
                                                </div>

                                                <div class="contact-detail-contain">
                                                    <p>{{ $contact->address }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="title d-xxl-none d-block">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="right-sidebar-box">
                        <div class="row">

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                                    <div class="custom-input">
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Nama Lengkap">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput2" class="form-label">Alamat</label>
                                    <div class="custom-input">
                                        <input type="email" class="form-control" id="exampleFormControlInput2"
                                            placeholder="Enter Alamat">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-lg-12 col-sm-6">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
                                    <div class="custom-input">
                                        <input type="tel" class="form-control" id="exampleFormControlInput3"
                                            placeholder="Enter Your Phone Number" maxlength="10"
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-md-4 mb-3 custom-form">
                                    <label for="exampleFormControlTextarea" class="form-label">Message</label>
                                    <div class="custom-textarea">
                                        <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter Your Message" rows="6"></textarea>
                                        <i class="fa-solid fa-message"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-animation btn-md fw-bold ms-auto">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
