<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Portal Karir - Find the right learning path for you</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/template-assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/template-assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="/template-assets/css/theme.css">
    <link rel="stylesheet" href="/template-assets/css/custom-css.css">
</head>

<body>
    @include('partials.navbar')

    @yield('content')

    {{-- CTA Section --}}
    <div class="container space-bottom-2">
        <div class="text-center py-6"
            style="background: url(/template-assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
            <h2>Share ke teman kamu</h2>
            <p>Bagikan informasi ini agar temanmu dan orang lain dapat mengupgrade skillnya.</p>
            <span class="d-block mt-5">
                <a class="btn btn-primary transition-3d-hover" href="whatsapp://send?text=www.google.com">Share
                    ke teman</a>
            </span>
        </div>
    </div>
    <!-- End CTA Section -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-light">
        <div class="container">
            <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-4">
                            <a href="index.html" aria-label="Front">
                                <img class="brand" src="/template-assets/svg/logos/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link media" href="javascript:;">
                                    <span class="media">
                                        <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                        <span class="media-body">
                                            Malang, Jawa Timur - Indonesia
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="tel:1-062-109-9222">
                                    <span class="media">
                                        <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                        <span class="media-body">
                                            +62 8234 037 8657
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Company</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link"
                                    href="../pages/about-agency.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('careers') }}">Careers
                                    <span class="badge badge-primary ml-1">new</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://semuabisa.web.id"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="../pages/customers.html">Customers</a></li>
                            <li class="nav-item"><a class="nav-link" href="javascript:;">Hire
                                    us</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Features</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Documentation</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link"
                                    href="mailto:creativedevelopment.id@gmail.com">Support</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('term-and-conditions') }}">Docs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Status</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Resources</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa fa-info-circle mr-2"></i>
                                        <span class="media-body">Help</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://wa.me/6282340378657">
                                    <span class="media align-items-center">
                                        <i class="fa fa-user-circle mr-2"></i>
                                        <span class="media-body">Beri Kontribusi</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                </div>
            </div>

            <hr class="my-0">

            <div class="space-1">
                <div class="row align-items-md-center mb-7">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Route('term-and-conditions') }}">Privacy &amp;
                                    Policy</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('term-and-conditions') }}">Terms</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Documentation</a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-md-6 text-md-right">
                        <ul class="list-inline mb-0">
                            <!-- Social Networks -->
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary"
                                    href="https://instagram.com/muhammadluttfy" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary"
                                    href="mailto:creativedevelopment.id@gmail.com" target="_blank">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary"
                                    href="https://twitter.com/muhammadluttfy_" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary"
                                    href="https://github.com/muhammadluttfy" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <!-- End Social Networks -->
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-75 text-lg-center mx-lg-auto">
                    <p class="text-muted small">&copy; Portal Karir - 2020. All rights reserved.</p>
                    <p class="text-muted small">Bangun potensial skill dan diri kamu dengan belajar secara terarah dari
                        Kreator Indonesia secara terarah dan terurut.</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Login Modal -->
    {{-- cari di template "Login Modal - folder ourses" --}}
    <!-- End Login Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="/template-assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/template-assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="/template-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="/template-assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="/template-assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="/template-assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="/template-assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="/template-assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="/template-assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/template-assets/vendor/typed.js/lib/typed.min.js"></script>
    <script src="/template-assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/template-assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="/template-assets/vendor/hs-scroll-nav/dist/hs-scroll-nav.min.js"></script>
    <script src="/template-assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>




    <!-- JS Front -->
    <script src="/template-assets/js/hs.core.js"></script>
    <script src="/template-assets/js/hs.validation.js"></script>
    <script src="/template-assets/js/hs.fancybox.js"></script>
    <script src="/template-assets/js/hs.slick-carousel.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

            // initialization of scroll nav
            $('.js-scroll-nav').each(function() {
                var scrollNav = new HSScrollNav($(this)).init();
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of text animation (typing)
            var typed = new Typed(".js-text-animation", {
                strings: ["future.", "potential.", "skills."],
                typeSpeed: 90,
                loop: true,
                backSpeed: 30,
                backDelay: 2500
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="/template-assets/vendor/polifills.js"><\/script>');
    </script>

</body>

</html>
