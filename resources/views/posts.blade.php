@extends("layouts.main")

@section('content')
    <main id="content" role="main">

        <!-- Hero Section -->
        <div class="container space-top-1">
            <div class="bg-primary rounded"
                style="background: url(/template-assets/svg/illustrations/book-portalkarir.svg) right bottom no-repeat;">
                <div class="w-lg-50">
                    <div class="py-8 px-6">
                        <h1 class="display-4 text-white">Katalog Karir</h1>
                        <p class="text-white mb-0">Belajar secara terarah dari <span class="font-weight-bold">kreator
                                Indonesia</span>
                            secara gratis dan berbayar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->


        <!-- Courses Section -->
        <div class="container space-2 space-bottom-lg-3">
            <div class="row">

                <div class="col-12">
                    <!-- Filter -->
                    <div class="border-bottom pb-3 mb-5">
                        <div class="row justify-content-md-start align-items-md-center">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <p class="font-size-1 mr-md-auto mb-0"><span class="text-dark font-weight-bold">
                                        {{ $post->count() }} careers</span> to
                                    get started</p>
                            </div>

                            <div class="col-md-8 text-md-right">
                                <!-- Select -->
                                <div class="btn-group">
                                    <button type="button"
                                        class="btn btn-outline-light border text-dark btn-sm dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Filter berdasarkan
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Terbaru</a>
                                        <a class="dropdown-item" href="#">terlama</a>
                                        <a class="dropdown-item" href="#">Abjad (A - Z)</a>
                                        <a class="dropdown-item" href="#">Abjad (Z - A)</a>
                                    </div>
                                </div>
                                <!-- End Select -->
                            </div>
                        </div>
                    </div>
                    <!-- End Filter -->

                    <!-- Apps Section -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                <div class="ml-lg-2">
                                    <div class="row mx-n2 mb-7">

                                        @foreach ($posts as $post)
                                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                                <!-- Card -->
                                                <a class="card card-frame h-100" href="/careers/{{ $post->slug }}">

                                                    @if ($post->image)
                                                        <img class="card-img-top"
                                                            src="{{ asset('storage/' . $post->image) }}"
                                                            alt="{{ $post->name }}">
                                                    @else
                                                        <img class="card-img-top"
                                                            src="https://source.unsplash.com/260x119?{{ $post->category->name }}"
                                                            alt="{{ $post->name }}">
                                                    @endif

                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center mb-1">
                                                            <span
                                                                class="d-block text-dark font-weight-bold">{{ $post->title }}</span>
                                                            <img class="ml-2"
                                                                src="template-assets/svg/illustrations/top-vendor.svg"
                                                                alt="Image Description" title="Top Vendor" width="16">
                                                        </div>
                                                        <span
                                                            class="d-block text-body font-size-1">{{ $post->excerpt }}</span>
                                                    </div>
                                                </a>
                                                <!-- End Card -->
                                            </div>
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Apps Section -->

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-8">
                        {{-- <small class="d-none d-sm-inline-block text-body">Page 1 out of 6</small> --}}

                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
        <!-- End Courses Section -->

    </main>

@endsection
