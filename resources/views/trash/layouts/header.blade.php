   <!-- Header Start -->
   <header class="">
       <div class="top-nav top-header sticky-header">
           <div class="container-fluid-lg">
               <div class="row">
                   <div class="col-12">
                       <div class="navbar-top">
                           <button class="navbar-toggler d-xl-none d-inline navbar-menu-button me-2" type="button"
                               data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                               <span class="navbar-toggler-icon">
                                   <i class="fa-solid fa-bars"></i>
                               </span>
                           </button>
                           <a href="{{ url('/') }}" class="web-logo nav-logo" id="logo">
                               <img src="{{ asset('assets/user/logo/logo_custome.png') }}" alt="">
                           </a>

                           <div class="header-nav-middle">
                               <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                   <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                       <div class="offcanvas-header navbar-shadow">
                                           <h5>Menu</h5>
                                           <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                               aria-label="Close"></button>
                                       </div>
                                       <div class="offcanvas-body">
                                           <ul class="navbar-nav">
                                               <li class="nav-item">
                                                   <a class="nav-link dropdown-toggle ps-xl-2 ps-0 @if (Request::is('/')) active @endif"
                                                       href="{{ url('/') }}">
                                                       Home
                                                   </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link dropdown-toggle ps-xl-2 ps-0 @if (Request::is('about')) active @endif"
                                                       href="{{ url('/about') }}">
                                                       Tentang Kami
                                                   </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link dropdown-toggle ps-xl-2 ps-0  @if (Request::is('news*')) active @endif"
                                                       href="{{ url('/news') }}">
                                                       Berita
                                                   </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link dropdown-toggle ps-xl-2 ps-0 @if (Request::is('faq')) active @endif"
                                                       href="{{ url('/faq') }}">
                                                       Faqs
                                                   </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a class="nav-link dropdown-toggle ps-xl-2 ps-0 @if (Request::is('contact')) active @endif"
                                                       href="{{ url('/contact') }}">
                                                       Contact
                                                   </a>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="rightside-box">
                               <div class="search-full">
                                   <div class="input-group">
                                       <span class="input-group-text">
                                           <i data-feather="search" class="font-light"></i>
                                       </span>
                                       <input type="text" class="form-control search-type"
                                           placeholder="Search here..">
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
                                   <li class="right-side">
                                       <a href="#" class="btn p-0 position-relative header-wishlist">
                                           <i data-feather="bookmark"></i>
                                       </a>
                                   </li>
                                   <li class="right-side onhover-dropdown">
                                       <div class="delivery-login-box">
                                           <div class="delivery-icon">
                                               <i data-feather="user"></i>
                                           </div>
                                           <div class="delivery-detail">
                                               <h6>Hello,</h6>
                                               <h5>My Account</h5>
                                           </div>
                                       </div>

                                       <div class="onhover-div onhover-div-login">
                                           <ul class="user-box-name">
                                               <li class="news-box-contain">
                                                   <i></i>
                                                   <a href="#">Log In</a>
                                               </li>

                                               <li class="news-box-contain">
                                                   <a href="#">Register</a>
                                               </li>

                                               <li class="news-box-contain">
                                                   <a href="#">Forgot Password</a>
                                               </li>
                                           </ul>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- Header End -->

   <!-- mobile fix menu start -->
   <div class="mobile-menu d-md-none d-block mobile-cart">
       <ul>
           <li class="@if (Request::is('/')) active @endif">
               <a href="{{ url('/') }}">
                   <i class="iconly-Home icli"></i>
                   <span>Home</span>
               </a>
           </li>

           <li class="@if (Request::is('news*')) active @endif">
               <a href="{{ url('/news') }}">
                   <i class="iconly-Bag-2 icli fly-cate"></i>
                   <span>Berita</span>
               </a>
           </li>

           <li class="@if (Request::is('about')) active @endif">
               <a href="{{ url('/about') }}">
                   <i class="iconly-Info-Circle icli"></i>
                   <span>About</span>
               </a>
           </li>
           <li class="@if (Request::is('faq')) active @endif">
               <a href="{{ url('/faq') }}">
                   <i class="iconly-Paper icli"></i>
                   <span>Faq</span>
               </a>
           </li>
           <li class="@if (Request::is('contact')) active @endif">
               <a href="{{ url('/contact') }}" class="notifi-wishlist">
                   <i class="iconly-Message icli"></i>
                   <span>Contact</span>
               </a>
           </li>
       </ul>
   </div>
   <!-- mobile fix menu end -->
