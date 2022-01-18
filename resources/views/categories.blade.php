@extends("layouts.main")

@section('content')

    <!-- Apps Section -->
    <div class="container space-bottom-2 space-bottom-lg-3 space-top-2">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <div class="mr-lg-3">
                    <!-- Navbar -->
                    <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
                        <!-- Responsive Toggle Button -->
                        <button type="button" class="navbar-toggler btn btn-block border py-3" aria-label="Toggle navigation"
                            aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse"
                            data-target="#sidebarNav">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">View all Careers</span>
                                <span class="navbar-toggler-default">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                                    </svg>
                                </span>
                                <span class="navbar-toggler-toggled">
                                    <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="currentColor"
                                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <!-- End Responsive Toggle Button -->

                        <div id="sidebarNav" class="collapse navbar-collapse">
                            <div class="p-2 p-lg-0">
                                <div class="mt-3 mt-lg-0">
                                    <h2 class="h4">Karir Terbaru</h2>

                                    <!-- Nav Link -->
                                    <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                        href="{{ route('careers') }}">
                                        Semua Karir
                                        <span class="badge border badge-pill">{{ $post_count->count() }}</span>
                                    </a>
                                    @foreach ($posts as $post)
                                        <a class="dropdown-item d-flex justify-content-between align-items-center px-0"
                                            href="/careers/{{ $post->slug }}">
                                            {{ $post->title }}
                                        </a>
                                    @endforeach
                                    <!-- End Nav Link -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Navbar -->
                </div>
            </div>

            <div class="col-lg-9 column-divider-lg">
                <div class="ml-lg-2">
                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="mb-0">Semua Kategori</h3>
                    </div>
                    <!-- End Title -->

                    <div class="row mx-n2 mb-7">
                        @foreach ($categories as $category)
                            <!-- Card -->
                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <div class="card card-frame h-100">
                                    <a class="card-body" href="/careers?category={{ $category->slug }}">
                                        <div class="media">
                                            <div class="avatar avatar-xs mt-1 mr-3">
                                                <img class="avatar-img" src="template-assets/img/160x160/img25.png"
                                                    alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="d-block text-dark font-weight-bold">{{ $category->name }}</span>
                                                    <img class="ml-2"
                                                        src="template-assets/svg/illustrations/top-vendor.svg"
                                                        alt="Image Description" title="Top Vendor" width="16">
                                                </div>
                                                <small class="d-block text-body">{{ $category->slug }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Card -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Apps Section -->

@endsection
