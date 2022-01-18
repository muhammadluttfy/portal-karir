@extends('layouts.main')

@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
                    <img class="img-fluid" src="/template-assets/svg/illustrations/reading.svg" alt="Image Description">
                </div>

                <div class="col-lg-6">
                    <div class="mb-5">
                        <h1 class="display-4 mb-3">
                            Unlock your
                            <br>
                            <span class="text-primary font-weight-bold">
                                <span class="js-text-animation"></span>
                            </span>
                        </h1>
                        <p class="lead">Bangun potensial skill dan diri kamu dengan belajar secara terarah dari
                            Kreator Indonesia secara terarah dan terurut.</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <a class="btn btn-primary transition-3d-hover mb-2" href="../pages/login.html">Coba sekarang</a>

                        <div class="mx-2"></div>

                        <!-- Fancybox -->
                        <a class="js-fancybox video-player video-player-btn media align-items-center text-dark mb-2"
                            href="javascript:;"
                            data-hs-fancybox-options='{                                                                                                                                        }
                                                                                                                                                                                                                                                             }'>
                            <span class="video-player-icon shadow-soft mr-3">
                                <i class="fa fa-play"></i>
                            </span>
                            <span class="media-body">
                                Cara penggunaan
                            </span>
                        </a>
                        <!-- End Fancybox -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->


        <!-- Apps Section -->
        <div class="container space-bottom-2 space-bottom-lg-3 p-lg-0 space-top-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ml-lg-2">
                        <div class="row mx-n2 mb-7">

                            @foreach ($posts as $post)
                                <div class="col-sm-6 col-md-4 px-2 mb-3">
                                    <!-- Card -->
                                    <div class="card card-frame h-100" href="/careers/{{ $post->slug }}">

                                        <a href="/careers/{{ $post->slug }}">
                                            @if ($post->image)
                                                <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}"
                                                    alt="{{ $post->name }}">
                                            @else
                                                <img class="card-img-top"
                                                    src="https://source.unsplash.com/260x119?{{ $post->category->name }}"
                                                    alt="{{ $post->name }}">
                                            @endif
                                        </a>

                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <a href="/careers/{{ $post->slug }}">
                                                    <span class="d-block text-dark font-weight-bold">
                                                        {{ $post->title }}
                                                    </span>
                                                </a>
                                                <a href="/careers?category={{ $post->category->slug }}">
                                                    <span class="badge badge-pill badge-primary">
                                                        {{ $post->category->name }}
                                                    </span>
                                                </a>
                                            </div>
                                            <span class="d-block text-body font-size-1">{{ $post->excerpt }}</span>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Apps Section -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->

@endsection
