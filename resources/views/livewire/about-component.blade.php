<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>A propos</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>A propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="LDN Services">
        </div>
        <div class="content_info">
            <div class="skin_base">
                <div class="row">
                    <div class="col-md-4">
                        <div class="services-lines-info padding-sides color-white">
                            <h2>MEMBRES DE L'ÉQUIPE</h2>
                            <p class="lead">
                                LDN Services
                                <span class="line"></span>
                            </p>
                            <p> {{ Str::limit("Bienvenue sur notre plateforme — votre solution de confiance pour tous vos besoins domestiques. Que vous ayez besoin de faire appel à un professionnel pour des travaux de plomberie, de ménage, de jardinage, ou encore pour la garde de vos enfants, notre plateforme est conçue pour vous simplifier la vie en vous mettant en relation avec des prestataires qualifiés et fiables.", 100) }} </p>
                            <br>
                            <a href="#" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div id="team-carousel-02">
                                <div class="item-team-01">
                                    <img src="{{ asset('assets/img/team/1.jpg') }}" alt="LDN Services">
                                    <div class="info-team">
                                        <h4>HADJI Landrine
                                            <span>Responsable</span>
                                        </h4>
                                        <p>Nous sommes une équipe de personnes productives et efficaces dans le domaine de service en ligne.</p>
                                        <ul class="social-team">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-team-01">
                                    <img src="{{ asset('assets/img/team/2.jpg') }}" alt="LDN Services">
                                    <div class="info-team">
                                        <h4>TOPOU Stéphane
                                            <span>Informaticien</span>
                                        </h4>
                                        <p>Nous sommes une équipe de personnes productives et efficaces dans le domaine de service en ligne.</p>
                                        <ul class="social-team">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="paddings">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Notre mission</h3>
                            <p>Notre mission est de rendre la vie quotidienne plus facile et plus organisée pour chaque foyer. Nous comprenons que la gestion des tâches domestiques peut parfois être accablante, c'est pourquoi nous avons créé une plateforme qui vous permet de trouver rapidement et facilement des prestataires de services compétents, à proximité de chez vous. Nous croyons en l'importance de la qualité du service, de la transparence et de la confiance entre nos utilisateurs et les prestataires.</p>
                            <h3>Pourquoi nous Choisir</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-styles">
                                        <li><i class="fa fa-check"></i> <a href="#">Facilité d'utilisation</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Professionnels vérifiés</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Sélection rigoureuse des prestataires </a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Transparence des tarifs et des services</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Avis et recommandations authentiques</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-styles">
                                        <li><i class="fa fa-check"></i> <a href="#">Plateforme intuitive et conviviale</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Service clientèle réactif</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Offres et promotions exclusives</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Engagement envers la communauté</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Paiement sécurisé et pratique</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="single-carousel">
                                <div class="img-hover">
                                    <div class="overlay"> <a href="{{ asset('assets/img/gallery-2/1.jpg') }}" class="fancybox"><i
                                                class="fa fa-plus-circle"></i></a></div>
                                    <img src="{{ asset('assets/img/gallery-2/1.jpg') }}" alt="LDN Services" class="img-responsive">
                                </div>
                                <div class="img-hover">
                                    <div class="overlay"> <a href="{{ asset('assets/img/gallery-2/2.jpg') }}" class="fancybox"><i
                                                class="fa fa-plus-circle"></i></a></div>
                                    <img src="{{ asset('assets/img/gallery-2/2.jpg') }}" alt="LDN Services" class="img-responsive">
                                </div>
                                <div class="img-hover">
                                    <div class="overlay"> <a href="{{ asset('assets/img/gallery-2/3.jpg') }}" class="fancybox"><i
                                                class="fa fa-plus-circle"></i></a></div>
                                    <img src="{{ asset('assets/img/gallery-2/3.jpg') }}" alt="LDN Services" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info overflow-hidde">
            <video class="bg_video" preload="auto" autoplay="autoplay" loop="" muted="" poster="{{ asset('assets/img/slide/4.jpg') }}"
                data-setup="{}">
                <source src="{{ asset('assets/img/video/video.mp4') }}" type="video/mp4">
                <source src="{{ asset('assets/img/video/video.webm') }}" type="video/webm">
            </video>
            <div class="opacy_bg_02 padding-bottom">
                <div class="container wow fadeInUp">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="titles">
                                        <h2><span>¿</span>Pourquoi <span>Réserver</span> sur LDN Servicess<span>?</span></h2>                                        
                                        <hr class="tall">
                                    </div>
                                </div>
                            </div>
                            <p>Nous offrons une gamme complète de services domestiques, incluant mais sans s'y limiter : Ménage : Trouvez des professionnels du nettoyage pour garder votre maison impeccable.
                                Plomberie : Faites appel à un plombier pour des réparations urgentes ou des installations.
                                Électricité : Besoin de réparations électriques ou d'une installation? Nous avons les experts qu'il vous faut.
                                Jardinage : Pour l'entretien de votre jardin ou la création d'espaces verts, nos jardiniers sont à votre disposition.
                                Garde d'enfants : Recherchez des babysitters ou des nounous de confiance pour veiller sur vos enfants.
                                Bricolage : Petits travaux de rénovation ou réparations diverses, trouvez un bricoleur en quelques clics</p>
                            {{-- <div class="row text-center padding-top-mini">
                                <a href="#" class="btn btn-primary">Détails</a>
                                <a href="#" class="btn btn-primary">Purchase Theme</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
