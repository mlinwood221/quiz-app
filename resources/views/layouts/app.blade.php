<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Quizzly Bears</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="The home of the Quizzly Bears! The number one source of fun and challenging quiz questions relating to Movies, Gaming, Sports, Celebrities and more." name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.png') }}">
    <!-- END Icons -->
    
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link id="bootstrap" href="{{ asset('user-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('user-assets/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('user-assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('user-assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/jquery.countdown.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('user-assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('user-assets/css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
    
    <script>
        var quizzlyBearsAdsLoaded = 1;
        var quizzlyBearsDevice = -1;

        const getDeviceType = () => {
            const ua = navigator.userAgent;
            if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
                return 3; // tablet
            }
            if (/Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
                return 2; // mobile
            }
            return 1; // desktop
        };

        quizzlyBearsDevice = getDeviceType();        
    </script>

    @foreach ($html_sections as $html_section)
        @if ($html_section->name == 'GDPR_CONSENT' || $html_section->name == 'GOOGLE_VERIFICATION' || $html_section->name == 'GOOGLE_ADSENSE' || $html_section->name == 'GOOGLE_ANALYTICS')
        <?php echo $html_section->html; ?>
        @endif
    @endforeach

    <style>
        #mainmenu li.active span {
            width: 100%;
        }
        header {
            background: white;
            box-shadow: 0px 0px 5px rgb(0 0 0 / 50%);
            position: fixed;
        }
        header.smaller {
            background: white;
        }
        #mainmenu a {
            color: #333;
        }
        @media only screen and (max-width: 992px) {
            header.header-mobile {
                position: fixed;
            }
        }
    </style>

    @yield('css')

</head>

<body>
    <div id="wrapper">

            <!-- header begin -->
            <header>
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="{{ url('') }}">
                                            <img alt="" class="logo" src="{{ asset('images/logo.png') }}" />
                                            <img alt="" class="logo-2" src="{{ asset('images/logo.png') }}" />
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                                <!-- <div class="de-flex-col">
                                    <input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />
                                </div> -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainmenu begin -->
                                <ul id="mainmenu">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home<span></span></a>
                                    </li>
                                    <li class="{{ (Request::is('category/*') || Request::is('quiz/*')) ? 'active' : '' }}">
                                        <a href="javascript:void(0);">Quiz<span></span></a>
                                        <ul>
                                            @foreach ($categories as $cat)
                                            <li><a href="{{ url('/category/' . $cat->slug) }}">{{ $cat->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('badge') ? 'active' : '' }}">
                                        <a href="{{ url('/badge') }}">Badges<span></span></a>
                                    </li>
                                    <li class="{{ (Request::is('blog') || Request::is('blog/*')) ? 'active' : '' }}">
                                        <a href="{{ url('/blog') }}">Blog<span></span></a>
                                    </li>
                                    <li class="{{ Request::is('about-us') ? 'active' : '' }}">
                                        <a href="{{ url('/about-us') }}">About Us<span></span></a>
                                    </li>
                                    <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                                        <a href="{{ url('/contact-us') }}">Contact Us<span></span></a>
                                    </li>
                                    @if (Auth::check())
                                    <li>
                                        <a href="javascript:void(0);">{{ ucfirst(Auth::user()->name) }}<span></span></a>
                                        <ul>
                                            <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                    @endif
                                </ul>
                                <div class="menu_side_area">
                                    @if (!Auth::check())
                                    <a href="{{ url('/login') }}" class="btn-main"><i class="icon_wallet_alt"></i><span>Login</span></a>
                                    @endif
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom" id="content">
            <div id="top"></div>

            <!-- section begin -->
            @yield('content')

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-1 col-6">
                        <div class="widget">
                            <h5>Categories</h5>
                            <ul>
                                @foreach ($categories as $cat)
                                <li><a href="{{ url('/category/' . $cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-1 col-6">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="{{ url('/badge') }}">Badges</a></li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="javascript:void(0);" id="btn-subscribe" onclick="onClickSubscribe()"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="{{ url('') }}">
                                        <img alt="" class="f-logo" src="{{ asset('images/logo.png') }}" />
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
        
    </div>

    
    
    <!-- Javascript Files
    ================================================== -->
    
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->    
    <script src="{{ asset('user-assets/js/jquery.min.js') }}"></script>
    <!-- <script src="{{ asset('user-assets/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('user-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/easing.js') }}"></script>
    <script src="{{ asset('user-assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('user-assets/js/validation.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/enquire.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/jquery.lazy.plugins.min.js') }}"></script>
    <script src="{{ asset('user-assets/js/designesia.js') }}"></script>

    <script>
        var site_url = "{{ url('') }}" + "/";
    </script>
    <script src="{{ asset('js/main.js') }}"></script>

    @foreach ($html_sections as $html_section)
        @if ($html_section->name == 'TRAFFIC_COP' || $html_section->name == 'ANTI_ADBLOCK')
        <?php echo $html_section->html; ?>
        @endif
    @endforeach

    @yield('js')

</body>

</html>
