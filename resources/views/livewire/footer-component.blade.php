<footer id="footer" class="footer-v1">
    <div class="container">
        <div class="row visible-md visible-lg">
            <div class="col-md-3 col-xs-6 col-sm-6">
                <h3>APPAREILS MÉNAGERS </h3>
                <ul>
                    @foreach ($apps as $app)
                        <li>
                            <i class="fa fa-check"></i>
                            <a
                                href="{{ route('home.service.sprovider', ['service_slug' => $app->slug]) }}">{{ $app->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <h3>SERVICES DE CLIMATISATION </h3>
                <ul>
                    @foreach ($clims as $clim)
                        <li>
                            <i class="fa fa-check"></i>
                            <a
                                href="{{ route('home.service.sprovider', ['service_slug' => $clim->slug]) }}">{{ $clim->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <h3>ENTRETIENT MAISON </h3>
                <ul>
                    @foreach ($footers as $footer)
                        <li><i class="fa fa-check"></i>
                            <a
                                href="{{ route('home.service.sprovider', ['service_slug' => $footer->slug]) }}">{{ $footer->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-xs-6 col-sm-6">
                <h3>CONTACT</h3>
                <ul class="contact_footer">
                    <li class="location">
                        <i class="fa fa-map-marker"></i> <a href="">Lomé, Togo</a>
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
                    <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a>
                    </li>
                    <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                    <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a>
                    </li>
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
                        <i class="fa fa-map-marker"></i> <a href="">Lomé, Togo</a>
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
                    <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a>
                    </li>
                    <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                    <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a>
                    </li>
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
                        <li><a href="{{ route('cgu') }}">CGU</a></li>
                        <li><a href="{{ route('privacy') }}">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="text-xs-center crtext">&copy; 2024 LDN Service. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
