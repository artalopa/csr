<header class="pb-md-4 pb-0">
    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <div class="nav-logo">
                            <a href="{{ url('/') }}" class="web-logo nav-logo">
                                <img src="{{ asset('assets/user/logo/logo-komite-simoncer.png') }}"
                                    class="img-fluid blur-up lazyload" style="height: 55px; width: 58px" alt="">
                                <img src="{{ asset('assets/user/logo/icon logo web 1 lebar.png') }}"
                                    class="img-fluid blur-up lazyload"
                                    style="height: 55px; width: 172px; position : relative ; top: 0px" alt="">
                            </a>
                        </div>

                        <div class="middle-box">
                            <div class="search-box" style="position: relative;left : 10px ">
                                <div class="input-group">
                                    <input type="search" style="width: 44vw;" class="form-control"
                                        placeholder="Cari Program Csr ..." aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                    <button class="btn" type="button" id="button-addon2">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box ">
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type"
                                        placeholder="Cari Program Csr..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="add-btn">
                                                <a class="btn theme-bg-color text-white shadow-sm"
                                                    href="{{ route('login') }}" style="height: 52px">
                                                    <i class="fas fa-user me-3"></i> Login
                                                </a>
                                            </div>

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

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-3">

                    <div class="header-nav ">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span class="me-3">Program CSR</span>
                                <i class="fa fa-angle-down"></i>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Program CSR</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <ul class="category-list">
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Categories 1</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>

                                        <div class="onhover-category-box">
                                            <div class="list-1">
                                                <div class="category-title-box">
                                                    <h5>Organic Vegetables</h5>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">Potato & Tomato</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Categories 2</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>

                                        <div class="onhover-category-box">
                                            <div class="list-1">
                                                <div class="category-title-box">
                                                    <h5>Organic Vegetables</h5>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">Potato & Tomato</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-category-list">
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Categories 3</h6>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>

                                        <div class="onhover-category-box">
                                            <div class="list-1">
                                                <div class="category-title-box">
                                                    <h5>Organic Vegetables</h5>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)">Potato & Tomato</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-6">
                    <div class="header-nav-middle ">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky "
                            style="right: 10px !important">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>Menu</h5>
                                    <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/">
                                                Home
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">
                                                Profile
                                                <i class="fa fa-angle-down ms-2"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/profile/jepara') }}">Kabupaten Jepara</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/profile/komite') }}">Komite TSP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/profile/regulation') }}">Regulasi</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">
                                                Informasi CSR
                                                <i class="fa fa-angle-down ms-2"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('simoncer-web.index') }}">Si
                                                        Moncer</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('csr-about-web.index') }}">Tentang CSR</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('csr-program-web.index') }}">Program CSR</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('csr-sector-web.index') }}">Sektor CSR</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('news-web.index') }}">Berita CSR</a>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">
                                                Galeri CSR
                                                <i class="fa fa-angle-down ms-2"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('gallery-csr-web.index') }}">Kegiatan
                                                        CSR</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('gallery-committee-web.index') }}">Kegiatan
                                                        Komite</a>
                                                </li>

                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                data-bs-toggle="dropdown">
                                                Laporan
                                                <i class="fa fa-angle-down ms-2"></i>
                                            </a>


                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/report/years') }}">Tahunan</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/report/program') }}">Program</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/report/sector') }}">Sektor
                                                        / Bidang</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ url('/report/company') }}">Perusahaan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 d-flex justify-content-end">
                    <button class="btn theme-bg-yellow text-white justify-content-end">
                        <img title="Video Tutorial" src="{{ asset('assets/user/images/icon/icon recorder.png') }}"
                            style="width: 25px; height:25px" alt="" srcset="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu d-md-none d-block mobile-cart">
    <ul>
        <li class="active">
            <a href="{{ url('/') }}">
                <i class="iconly-Home icli"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="mobile-category">
            <a href="javascript:void(0)">
                <i class="iconly-Category icli js-link"></i>
                <span>Category</span>
            </a>
        </li>

        <li>
            <a href="search.html" class="search-box">
                <i class="iconly-Search icli"></i>
                <span>Search</span>
            </a>
        </li>

        <li>
            <a href="wishlist.html" class="notifi-wishlist">
                <i class="iconly-Heart icli"></i>
                <span>My Wish</span>
            </a>
        </li>

        <li>
            <a href="cart.html">
                <i class="iconly-Bag-2 icli fly-cate"></i>
                <span>Cart</span>
            </a>
        </li>
    </ul>
</div>
