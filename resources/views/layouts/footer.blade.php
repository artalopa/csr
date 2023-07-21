<!-- Footer Start -->
<footer class="section-t-space footer-section-2">
    <div class="container-fluid-lg" style="background-color: #ececec ">
        <div class="main-footer">
            <div class="row g-md-4 gy-sm-5 gy-2">
                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <a href="{{ url('/') }}" class="foot-logo">
                        <img src="{{ asset('assets/user/logo/logo-komite-simoncer.png') }}"
                            class="img-fluid blur-up lazyload" style="height: 55px; width: 58px" alt="">
                        <img src="{{ asset('assets/user/logo/icon logo web 1 lebar.png') }}"
                            class="img-fluid blur-up lazyload"
                            style="height: 55px; width: 172px; position : relative ; top: 0px" alt="">
                    </a>
                    <p class="information-text">it is a long established fact that a reader will be distracted
                        by the readable content.</p>

                </div>

                <div class="col-xxl-2 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4>Useful Link</h4>
                    </div>
                    <ul class="footer-list footer-contact mb-sm-0 mb-3">
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Cara Pemesanan</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Produk</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="#" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>FAQs</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Blog</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xxl-2 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4>Kategori</h4>
                    </div>
                    <ul class="footer-list footer-contact mb-sm-0 mb-3">
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Pendidikan</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Kesehatan</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Lingkungan</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Ekonomi</a>
                        </li>
                        <li>
                            <a href="" class="footer-contain-2">
                                <i class="fas fa-angle-right"></i>Infrastruktur</a>
                        </li>
                        {{-- @foreach ($categories->take(5) as $result)
                            <li>
                                <a href="{{url('/product/categories/'.$result->slug)}}" class="footer-contain-2">
                                    <i class="fas fa-angle-right"></i>
                                    {{$result->name}}
                                </a>
                            </li>
                        @endforeach --}}
                    </ul>
                </div>
                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4>Informasi</h4>
                    </div>
                    <ul class="footer-address footer-contact">
                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box flex-start-box">
                                    <i data-feather="map-pin"></i>
                                    <p>
                                        Demangan, RT 04 / 02, Jepara
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box">
                                    <i data-feather="phone"></i>
                                    <p>Telepon: 089876676567</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box">
                                    <i data-feather="mail"></i>
                                    <p>Email: senjafurniture@gmail.com</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-1 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4>Support</h4>
                    </div>
                    <ul class="footer-address footer-contact">
                        <li>
                            <a href="javascript:void(0)">
                                <div class="inform-box flex-start-box">
                                    <i data-feather="map-pin"></i>
                                    <p>
                                        Demangan, RT 04
                                    </p>
                                </div>
                            </a>
                        </li>


                    </ul>
                </div>


            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="cek">
                <p class="text-align">Copyright SiMoncer develop by AstroCloud</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
