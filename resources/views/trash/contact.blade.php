@extends('layouts.general')

@section('content')
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Informasi Kontak</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-box-section">
    <div class="container-fluid-lg">
        <div class="row g-lg-5 g-3">
            <div class="col-lg-6">
                <div class="left-sidebar-box">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-image">
                                <img src="{{ asset('assets/user/images/contact-us.png') }}"
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
                                                <p>(+1) 618 190 496</p>
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
                                                <p>geweto9420@chokxus.com</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>London Office</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>Cruce Casa de Postas 29</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="contact-detail-box">
                                            <div class="contact-icon">
                                                <i class="fa-solid fa-building"></i>
                                            </div>
                                            <div class="contact-detail-title">
                                                <h4>Bournemouth Office</h4>
                                            </div>

                                            <div class="contact-detail-contain">
                                                <p>Visitación de la Encina 22</p>
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
                                <label for="exampleFormControlInput" class="form-label">First Name</label>
                                <div class="custom-input">
                                    <input type="text" class="form-control" id="exampleFormControlInput"
                                        placeholder="Enter First Name">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                <div class="custom-input">
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Enter Last Name">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput2" class="form-label">Email Address</label>
                                <div class="custom-input">
                                    <input type="email" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Email Address">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-12 col-sm-6">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlInput3" class="form-label">Phone Number</label>
                                <div class="custom-input">
                                    <input type="tel" class="form-control" id="exampleFormControlInput3"
                                        placeholder="Enter Your Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                        this.value.slice(0, this.maxLength);">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-md-4 mb-3 custom-form">
                                <label for="exampleFormControlTextarea" class="form-label">Message</label>
                                <div class="custom-textarea">
                                    <textarea class="form-control" id="exampleFormControlTextarea"
                                        placeholder="Enter Your Message" rows="6"></textarea>
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
