@extends('layouts.general')

@section('content')
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Jelajahi Berita</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Berita</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section mb-3">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Our news</h2>
            </div>

            <div class="row g-8">
                @foreach ($news as $result => $key)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp">
                        <div class="news-box-4">
                            <style>
                                @media screen and (max-width: 768px) {
                                    .news-box-4 .news-image img {
                                        width: 100%;
                                        height: 150px;
                                    }
                                }
                            </style>
                            <div class="news-image">
                                <a href="{{ url('/news', $key->slug) }}">
                                    <img style="border-radius: 4px;" src="{{ asset('uploads/news/' . $key->image) }}"
                                        class="img-fluid" alt="">
                                </a>

                                <ul class="option">
                                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                        <a href="{{ url('/news', $key->slug) }}">
                                            <i class="iconly-Show icli"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="news-detail">
                                <a href="{{ url('/news', $key->slug) }}">
                                    <h5 class="price theme-color">{{ $key->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <style>
                .pagination .page-item {
                    border-radius: 5px;
                    overflow: hidden;
                }

                .pagination .page-item .page-link {
                    color: #4a5568;
                    border: 1px solid transparent;
                }

                .page-item:first-child .page-link {
                    border-top-left-radius: 0.25rem;
                    border-bottom-left-radius: 0.25rem;
                }

                .page-item.disabled .page-link {
                    color: #6c757d;
                    pointer-events: none;
                    background-color: #fff;
                }

                .page-link {
                    padding: 0.375rem 0.75rem;
                }

                .page-link {
                    position: relative;
                    font-weight: 900;
                    display: block;
                    color: #0d6efd;
                    text-decoration: none;
                    background-color: #fff;
                    border: 1px solid #dee2e6;
                    -webkit-transition: all 0.3s ease-in-out;
                    transition: all 0.3s ease-in-out;
                }

                .pagination .page-item.active .page-link {
                    background-color: var(--theme-color);
                    border-color: var(--theme-color);
                    color: #fff;
                }
            </style>
            <div class="d-flex justify-content-center">
                {{ $news->links() }}
            </div>

        </div>
    </section>
@endsection
