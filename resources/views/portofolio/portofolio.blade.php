@extends('layouts.general')

@section('sub_title-1', 'Portofolio')
@section('sub_title-2')
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house"></i>
        </a>
    </li>
@endsection
@section('sub_title-3', 'Portofolio')

@section('content')

    @include('layouts.sub_title')
    <!-- Poster Section Start -->
    <section class="section-b-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-1 slider-animate product-wrapper no-arrow">
                        <div>
                            <div class="banner-contain-2 hover-effect">
                                <img src="{{ asset('user/images/slide.jpg') }}" class=" rounded-3 blur-up lazyload"
                                    alt="" style="filter: brightness(80%); " height="230" width="100%">

                            </div>
                        </div>
                        <div>
                            <div class="banner-contain-2 hover-effect">
                                <img src="{{ asset('user/images/slide.jpg') }}" class=" rounded-3 blur-up lazyload"
                                    alt="" style="filter: brightness(80%)" height="230" width="100%">

                            </div>
                        </div>
                        <div>
                            <div class="banner-contain-2 hover-effect">
                                <img src="{{ asset('user/images/slide.jpg') }}" class=" rounded-3 blur-up lazyload"
                                    alt="" style="filter: brightness(80%)" height="230" width="100%">

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Poster Section End -->

    <section class="section-b-space shop-section mb-3 mt-4">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-custome-3">
                    <div class="left-box wow fadeInUp">
                        <div class="shop-left-sidebar">
                            <div class="back-button">
                                <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                            </div>

                            <div class="filter-category">
                                <div class="filter-title">
                                    <h2>Filters</h2>
                                    <a href="">Clear All</a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="">Vegetable</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Fruit</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Fresh</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Milk</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Meat</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="accordion custome-accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>Categories</span>

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="search" class="form-control" id="search"
                                                    placeholder="Search ..">
                                                <label for="search">Search</label>
                                            </div>

                                            <ul class="category-list custom-padding custom-height">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="fruit">
                                                        <label class="form-check-label" for="fruit">
                                                            <span class="name">Fruits & Vegetables</span>
                                                            <span class="number">(15)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="cake">
                                                        <label class="form-check-label" for="cake">
                                                            <span class="name">Bakery, Cake & Dairy</span>
                                                            <span class="number">(12)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="behe">
                                                        <label class="form-check-label" for="behe">
                                                            <span class="name">Beverages</span>
                                                            <span class="number">(20)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="snacks">
                                                        <label class="form-check-label" for="snacks">
                                                            <span class="name">Snacks & Branded Foods</span>
                                                            <span class="number">(05)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="beauty">
                                                        <label class="form-check-label" for="beauty">
                                                            <span class="name">Beauty & Household</span>
                                                            <span class="number">(30)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="pets">
                                                        <label class="form-check-label" for="pets">
                                                            <span class="name">Kitchen, Garden & Pets</span>
                                                            <span class="number">(50)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="egg">
                                                        <label class="form-check-label" for="egg">
                                                            <span class="name">Eggs, Meat & Fish</span>
                                                            <span class="number">(19)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="food">
                                                        <label class="form-check-label" for="food">
                                                            <span class="name">Gourment & World Food</span>
                                                            <span class="number">(30)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="care">
                                                        <label class="form-check-label" for="care">
                                                            <span class="name">Baby Care</span>
                                                            <span class="number">(20)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="fish">
                                                        <label class="form-check-label" for="fish">
                                                            <span class="name">Fish & Seafood</span>
                                                            <span class="number">(10)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="marinades">
                                                        <label class="form-check-label" for="marinades">
                                                            <span class="name">Marinades</span>
                                                            <span class="number">(05)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="lamb">
                                                        <label class="form-check-label" for="lamb">
                                                            <span class="name">Mutton & Lamb</span>
                                                            <span class="number">(09)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="other">
                                                        <label class="form-check-label" for="other">
                                                            <span class="name">Port & other Meats</span>
                                                            <span class="number">(06)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="pour">
                                                        <label class="form-check-label" for="pour">
                                                            <span class="name">Pourltry</span>
                                                            <span class="number">(01)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="salami">
                                                        <label class="form-check-label" for="salami">
                                                            <span class="name">Sausages, bacon & Salami</span>
                                                            <span class="number">(03)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-custome-9">
                    <div class="show-button">
                        <div class="filter-button-group mt-0">
                            <div class="filter-button d-inline-block d-lg-none">
                                <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                            </div>
                        </div>

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" id="pop"
                                                href="javascript:void(0)">Popularity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z
                                                Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A
                                                Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="off" href="javascript:void(0)">% Off -
                                                Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div
                        class="row g-sm-4 g-3 row-cols-xxl-3 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{ asset('user/product/sofa-minimalis-kursi-tamu-accent-311-linen-removebg-preview.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>


                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h6 class="unit">Selasa, 24 Januari 2023</h6>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Detail
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                        data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                        name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                        data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                    <nav class="custome-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection
