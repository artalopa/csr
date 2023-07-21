@extends('layouts.general')

@section('content')
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>{{ $news->name }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/news') }}">
                                        Berita
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">{{ $news->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section mb-3">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-6 wow fadeInUp">
                            <div class="news-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="news-main-2 no-arrow">
                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('uploads/news/' . $news->image) }}"
                                                        style="border-radius: 4px;"
                                                        data-zoom-image="{{ asset('uploads/news/' . $news->image) }}"
                                                        class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                <h2 class="name">{{ $news->name }}</h2>
                                <div>
                                    @if (strlen($news->description) > 200)
                                        {!! substr($news->description, 0, 190) !!} ...
                                    @else
                                        {!! $news->description !!}
                                    @endif
                                </div>
                                <div class="note-box news-packege">
                                    <a href="" target="_blank"
                                        class="btn btn-animation btn-md ms-auto fw-bold">WHATSAPP</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="news-section-box">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true">Description</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                            type="button" role="tab" aria-controls="info"
                                            aria-selected="false">Pemesanan Lewat Email</button>
                                    </li>
                                </ul>

                                <div class="tab-content custom-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="news-description">
                                            <div class="nav-desh">
                                                {!! $news->description !!}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Tulis Nama Lengkap">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Tulis Alamat Disini">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Nomor Telephone / Hp</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Tulis Nomor Telephone / Hp" name="phone">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Email <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Tulis Email Disini">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label class="form-label">Tulis Keterangan Pesanan</label>
                                                    <textarea name="message" class="form-control" placeholder="Tulis Keterangan Pesanan Disini" style="height: 300px;"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="btn btn-animation btn-md fw-bold ms-auto">KIRIM
                                                        PESANAN</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-lg-5 d-none d-lg-block wow fadeInUp">
                    <div class="right-sidebar-box">
                        <div class="vendor-box">
                            <p class="vendor-detail">Noodles & Company is an American fast-casual
                                restaurant that offers international and American noodle dishes and pasta.</p>

                            <div class="vendor-list">
                                <ul>
                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="map-pin"></i>
                                            <h5>Address: <span class="text-content">1288 Franklin Avenue</span></h5>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="address-contact">
                                            <i data-feather="headphones"></i>
                                            <h5>Contact Seller: <span class="text-content">(+1)-123-456-789</span></h5>
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
@endsection
