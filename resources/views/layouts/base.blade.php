<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>LDN - Fournisseur de services en ligne pour vos besoins domestiques</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    @livewireStyles
</head>

<body>
    <div id="layout">
        <div class="info-head">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="visible-md visible-lg text-left">
                            <li><a href="tel:+32499914473"><i class="fa fa-phone"></i> +32 499 91 44 73</a></li>
                            <li><a href="mailto:contact@homes-services.com"><i class="fa fa-envelope"></i>
                                    contact@homes-services.com</a></li>
                        </ul>
                        <ul class="visible-xs visible-sm">
                            <li class="text-left"><a href="tel:+32499914473"><i class="fa fa-phone"></i>
                                    +32 499 91 44 73</a></li>
                            <li class="text-right"><a href="index.php/changelocation.html"><i
                                        class="fa fa-map-marker"></i> Faridabad, Haryana</a></li>
                        </ul>
                    </div>
                    @livewire('location-component')
                </div>
            </div>
        </div>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="/"><img src="{{ asset('images/logo.png') }}"></a>
                    </li>
                    <li> <a href="{{ route('service.categories') }}">Catégories des services</a></li>                    
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/11.html">Computer Repair</a></li>
                            <li><a href="servicesbycategory/12.html">TV</a></li>
                            <li><a href="servicesbycategory/1.html">AC</a></li>
                            <li><a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><a href="servicesbycategory/21.html">Washing Machine</a></li>
                            <li><a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><a href="servicesbycategory/9.html">Chimney and Hob</a></li>
                            <li><a href="servicesbycategory/10.html">Water Purifier</a></li>
                            <li><a href="servicesbycategory/13.html">Refrigerator</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/19.html">Laundry</a></li>
                            <li><a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                            <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                            <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><a href="servicesbycategory/20.html">Painting</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                            <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/bedroom-deep-cleaning.html">Bedroom Deep Cleaning</a></li>
                            <li><a href="service-details/overhead-water-storage.html">Overhead Water Storage </a></li>
                            <li><a href="/service-details/tank-cleaning">Tank Cleaning</a></li>
                            <li><a href="service-details/underground-sump-cleaning.html">Underground Sump Cleaning</a>
                            </li>
                            <li><a href="service-details/dining-chair-shampooing.html">Dining Chair Shampooing </a></li>
                            <li><a href="service-details/office-chair-shampooing.html">Office Chair Shampooing</a></li>
                            <li><a href="service-details/home-deep-cleaning.html">Home Deep Cleaning </a></li>
                            <li><a href="service-details/carpet-shampooing.html">Carpet Shampooing </a></li>
                            <li><a href="service-details/fabric-sofa-shampooing.html">Fabric Sofa Shampooing</a></li>
                            <li><a href="service-details/bathroom-deep-cleaning.html">Bathroom Deep Cleaning</a></li>
                            <li><a href="service-details/floor-scrubbing-polishing.html">Floor Scrubbing &amp;
                                    Polishing
                                </a></li>
                            <li><a href="service-details/mattress-shampooing.html">Mattress Shampooing </a></li>
                            <li><a href="service-details/kitchen-deep-cleaning.html">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li>                    
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->utype === 'ADM')
                                <li class="login-form"> <a href="#" title="Register">Mon compte(Admin)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('admin.service_categories')}}">Catégories services</a></li>
                                        <li><a href="{{route('admin.service')}}">Les services</a></li>
                                        <li><a href="{{route('admin.slider')}}">Les sliders</a></li>
                                        <li><a href="{{route('admin.contact')}}">Les messages</a></li>
                                        <li><a href="{{route('admin.sprovider')}}">Les fournisseurs</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            @elseif (Auth::user()->utype === 'SVP')
                                <li class="login-form"> <a href="#" title="Register">Mon compte(Prestataire de
                                        services)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('sprovider.dashboard')}}">DashBoard</a></li>
                                        <li><a href="{{route('sprovider.profile')}}">Profil</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Register">Mon compte(Client)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('customer.dashboard')}}">DashBoard</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{ route('register') }}" title="Register">Register</a></li>
                            <li class="login-form"> <a href="{{ route('login') }}" title="Login">Login</a></li>
                        @endif
                        @endif
                        <li class="search-bar">
                        </li>
                    </ul>
                </nav>
            </header>
            {{ $slot }}
            <footer id="footer" class="footer-v1">
                <div class="container">
                    <div class="row visible-md visible-lg">
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>APPAREILS MÉNAGERS </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/12.html">TV</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/14.html">Geyser</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/13.html">Refrigerator</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/21.html">Washing Machine</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/22.html">Microwave Oven</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/10.html">Water Purifier</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>SERVICES DE CLIMATISATION </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a
                                        href="service-details/ac-installation.html">Installation</a></li>
                                <li><i class="fa fa-check"></i> <a
                                        href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-repair.html">AC Repair</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-gas-refill.html">Gas
                                        Refill</a>
                                </li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-wet-servicing.html">Wet
                                        Servicing</a></li>
                                <li><i class="fa fa-check"></i> <a href="service-details/ac-dry-servicing.html">Dry
                                        Servicing </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>ENTRETIENT MAISON </h3>
                            <ul>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/19.html">Laundry </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/4.html">Electrical</a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/8.html">Pest Control </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/7.html">Carpentry </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/3.html">Plumbing </a></li>
                                <li><i class="fa fa-check"></i> <a href="servicesbycategory/20.html">Painting </a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6 col-sm-6">
                            <h3>CONTACT</h3>
                            <ul class="contact_footer">
                                <li class="location">
                                    <i class="fa fa-map-marker"></i> <a href="#">Lomé, Togo</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> <a
                                        href="mailto:contact@homes-services.com">contact@homes-services.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <a href="tel:+32499914473">+32 499 91 44 73</a>
                                </li>
                            </ul>
                            <h3 style="margin-top: 10px">SUIVEZ-NOUS</h3>
                            <ul class="social">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                                <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                                <li class="youtube"><span><i class="fa fa-youtube"></i></span><a href="#"></a></li>
                                <li class="tiktok"><span><i class="fa fa-tiktok"></i></span><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row visible-sm visible-xs">
                        <div class="col-md-6">
                            <h3 class="mlist-h">CONTACT</h3>
                            <ul class="contact_footer mlist">
                                <li class="location">
                                    <i class="fa fa-map-marker"></i> <a href="#"> Lomé, Togo</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i> <a
                                        href="mailto:contact@homes-services.com">contact@homes-services.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> <a href="tel:+32499914473">+32 499 91 44 73</a>
                                </li>
                            </ul>
                            <ul class="social mlist-h">
                                <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                                <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                                <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                                <li class="youtube"><span><i class="fa fa-youtube"></i></span><a href="#"></a></li>
                                <li class="tiktok"><span><i class="fa fa-tiktok"></i></span><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-down">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav-footer">
                                    <li><a href="{{ route('about') }}">À propos</a> </li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('cgu') }}">Conditions d'utilisation</a></li>
                                    <li><a href="{{ route('privacy') }}">Privacy</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <p class="text-xs-center crtext">&copy; 2024 LDN Service. Tous droits réservés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="{{ asset('assets/js/nav/jquery.sticky.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/accordion/accordion.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/js/maps/gmap3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/carousel/carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/filters/jquery.isotope.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/twitter/jquery.tweet.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/theme-options/theme-options.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/dtb/script.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/validation-rule.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('.tp-banner').show().revolution({
                    dottedOverlay: "none",
                    delay: 5000,
                    startwidth: 1170,
                    startheight: 480,
                    minHeight: 250,
                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview1"
                });
            });
        </script>
        @stack('scripts')
        @livewireScripts
    </body>

    </html>
