<!-- ========== HEADER ========== -->
<header id="header" class="header left-aligned-navbar">
    <div class="header-section">
        <!-- Topbar -->
        <div class="container">
            <nav class="js-mega-menu navbar navbar-expand-lg z-index-999">
                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn btn-xs btn-outline-secondary ml-auto"
                    aria-label="Toggle navigation" aria-expanded="false" aria-controls="topBar" data-toggle="collapse"
                    data-target="#topBar">
                    Topbar
                    <i class="fa fa-angle-down ml-2"></i>
                </button>
                <!-- End Responsive Toggle Button -->

                <div id="topBar" class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="navbar-nav-item mr-auto">
                            {{-- <a class="nav-link font-size-1 py-2 pl-0" href="../landings/index.html">
                                <i class="fa fa-angle-left mr-1"></i> Main Demo
                            </a> --}}
                        </li>


                        <!-- Docs -->
                        <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
              "desktop": {
                "position": "right",
                "maxWidth": "260px"
              }
            }'>
                            <a id="docsMegaMenu"
                                class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2 pr-0"
                                href="javascript:;" aria-haspopup="true" aria-expanded="false">
                                @auth
                                    Masuk ke dashboard
                                @else
                                    Bantuan
                                @endauth
                            </a>

                            <!-- Docs - Submenu -->
                            <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu"
                                style="min-width: 330px;">
                                <!-- Promo Item -->
                                <div class="navbar-promo-item">
                                    <a class="navbar-promo-link" href="{{ route('term-and-conditions') }}">
                                        <div class="media align-items-center">
                                            <img class="navbar-promo-icon" src="/template-assets/svg/icons/icon-2.svg"
                                                alt="SVG">
                                            <div class="media-body">
                                                <span class="navbar-promo-title">
                                                    Documentation
                                                    <span class="badge badge-primary badge-pill ml-1">v1.0.0</span>
                                                </span>
                                                <small class="navbar-promo-text">Panduan cara penggunaan
                                                    aplikasi</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Promo Item -->


                                <div class="navbar-promo-footer">
                                    <!-- List -->
                                    <div class="row no-gutters">
                                        @auth
                                            <div class="col-6">
                                                <div class="navbar-promo-footer-item">
                                                    <span class="navbar-promo-footer-text">hallo
                                                        {{ auth()->user()->username }}</span>
                                                    <a class="navbar-promo-footer-text" href="{{ route('dashboard') }}">
                                                        Masuk ke Dashboard
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-6 navbar-promo-footer-ver-divider">
                                                <div class="navbar-promo-footer-item">
                                                    <span class="navbar-promo-footer-text">Hubungi kami untuk ikut
                                                        berkontribusi</span>
                                                    <a class="navbar-promo-footer-text" href="https://wa.me/6282340378657">
                                                        Join Team
                                                    </a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 navbar-promo-footer-ver-divider">
                                                <div class="navbar-promo-footer-item">
                                                    <span class="navbar-promo-footer-text">Hubungi kami untuk ikut
                                                        berkontribusi</span>
                                                    <a class="navbar-promo-footer-text" href="https://wa.me/6282340378657">
                                                        Join Team
                                                    </a>
                                                </div>
                                            </div>
                                        @endauth
                                    </div>
                                    <!-- End List -->
                                </div>
                            </div>
                            <!-- End Docs - Submenu -->
                        </li>
                        <!-- End Docs -->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Topbar -->

        <div id="logoAndNav" class="container mt-lg-n2">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg">
                <div class="navbar-nav-wrap">
                    <!-- Logo -->
                    <a class="navbar-brand navbar-nav-wrap-brand" href="{{ route('welcome') }}" aria-label="Front">
                        <img src="/template-assets/img/logos/portalkarir.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Secondary Content -->
                    <div class="navbar-nav-wrap-content">
                        <!-- Search Classic -->
                        <div class="hs-unfold d-lg-none d-inline-block position-static">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-icon rounded-circle mr-1"
                                href="javascript:;" data-hs-unfold-options='{
              "target": "#searchClassic",
              "type": "css-animation",
              "animationIn": "slideInUp"
             }'>
                                <i class="fas fa-search"></i>
                            </a>

                            <div id="searchClassic"
                                class="hs-unfold-content dropdown-menu w-100 shadow border-0 rounded-0 px-3 mt-0">
                                <form action="/careers" class="input-group input-group-sm input-group-merge">
                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif

                                    @if (request('author'))
                                        <input type="hidden" name="author" value="{{ request('author') }}">
                                    @endif

                                    <label class="sr-only" for="search">What do you want to learn?</label>
                                    <div class="d-inline-block w-75 mr-2">
                                        <input type="tesxt" class="form-control" name="search" id="search"
                                            placeholder="What do you want to learn?"
                                            aria-label="What do you want to learn?">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- End Search Classic -->

                        <!-- Login Button -->
                        <div class="d-inline-block ml-auto">
                            @auth

                                <form action="/logout" method="POST">
                                    @csrf

                                    <button type="submit""
                                                class="
                                        
                                         btn btn-sm btn-primary d-none d-lg-inline-block transition-3d-hover">Sign
                                        Out</button>
                                    <button type="submit"" class="   btn btn-xs btn-icon rounded-circle d-lg-none">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-sm btn-primary d-none d-lg-inline-block transition-3d-hover">Sign In</a>
                                <a href="{{ route('login') }}" class="btn btn-xs btn-icon rounded-circle d-lg-none">
                                    <i class="fas fa-user-circle"></i>
                                </a>
                            @endauth
                        </div>
                        <!-- End Login Button -->
                    </div>
                    <!-- End Secondary Content -->

                    <!-- Responsive Toggle Button -->
                    <button type="button"
                        class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
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
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <!-- Courses -->
                            <li class="hs-has-sub-menu navbar-nav-item">
                                <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
                                    aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                                    <i class="fa fa-th font-size-1 mr-1"></i> Topik
                                </a>

                                <!-- Courses - Submenu -->
                                <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu"
                                    aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                                    <!-- Topic -->
                                    <div class="hs-has-sub-menu">
                                        @foreach ($categories as $category)
                                            <a id="navLinkCoursesDevelopment"
                                                class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                                                href="/careers?category={{ $category->slug }}" aria-haspopup="true"
                                                aria-expanded="false" aria-controls="navSubmenuCoursesDevelopment">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="{{ $category->icon }} font-size-1 mr-1"></i>
                                                </span> {{ $category->name }}
                                            </a>
                                        @endforeach

                                        <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu"
                                            aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">
                                            <a class="dropdown-item" href="#">Comingsoon :)</a>
                                        </div>
                                    </div>
                                    <!-- End Topic -->

                                    <div class="dropdown-divider my-3"></div>

                                    <div class="px-4">
                                        <a class="btn btn-block btn-sm btn-primary transition-3d-hover"
                                            href="{{ route('careers') }}">All
                                            Careers</a>
                                    </div>
                                </div>
                                <!-- End Courses - Submenu -->
                            </li>
                            <!-- End Courses -->

                            <!-- Search Form -->
                            <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">

                                <form action="/careers" lass="js-validate d-flex align-items-center">

                                    @if (request('category'))
                                        <input type="hidden" name="category" value="{{ request('category') }}">
                                    @endif

                                    @if (request('author'))
                                        <input type="hidden" name="author" value="{{ request('author') }}">
                                    @endif

                                    <label class="sr-only" for="search">What do you want to learn?</label>
                                    <div class="d-inline-block w-75 mr-2">
                                        <input type="tesxt" class="form-control" name="search" id="search"
                                            placeholder="What do you want to learn?"
                                            aria-label="What do you want to learn?">
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </form>
                            </li>
                            <!-- End Search Form -->

                            <!-- Pages -->
                            <li class="hs-has-sub-menu navbar-nav-item mr-lg-auto">
                                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Selengkapnya</a>

                                <!-- Pages - Submenu -->
                                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu"
                                    style="min-width: 230px;">
                                    <a class="dropdown-item" href="javascript:;">Tentang Kami</a>
                                    <a class="dropdown-item" href="javascript:;">Kontak Kami</a>
                                </div>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!-- End Pages -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </div>
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->
