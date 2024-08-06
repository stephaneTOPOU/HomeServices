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
            @livewire('navbar-component')
        </header>
            {{ $slot }}
            @livewire('footer-component')
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
