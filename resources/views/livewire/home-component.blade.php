<div>
    <section class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach ($slides as $slide)
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="{{ asset('images/slider') }}/{{ $slide->image }}" alt="{{ $slide->title }}" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <div class="filter-title">
            <div class="title-header">
                <h2 style="color:#fff;">BOOK A SERVICE</h2>
                <p class="lead">Book a service at very affordable price, </p>
            </div>
            <div class="filter-header">
                <form id="sform" action="searchservices" method="post">
                    <input type="text" id="q" name="q" required="required"
                        placeholder="What Services do you want?" class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </section>
    <section class="content-central">
        <div class="content_info content_resalt">
            <div class="container" style="margin-top: 40px;">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul id="sponsors" class="tooltip-hover">
                            @foreach ($categories as $category)
                                <li data-toggle="tooltip" title="" data-original-title="{{ $category->name }}">
                                    <a href="{{ route('home.service', ['category_slug' => $category->slug]) }}">
                                        <img src="{{ asset('images/categories') }}/{{ $category->image }}"
                                            alt="{{ $category->name }}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2>Land Service <span>Choix</span> de Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                    <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach ($fservices as $fservice)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list"
                                    href="{{ route('home.service.detail', ['service_slug' => $fservice->slug]) }}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails') }}/{{ $fservice->thumbnail }}"
                                            alt="{{ $fservice->non }}" class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{ $fservice->non }}</h3>
                                        <hr class="separator">
                                        <p>{{ $fservice->tagline }}</p>
                                        <div class="content-btn"><a
                                                href="{{ route('home.service.detail', ['service_slug' => $fservice->slug]) }}"
                                                class="btn btn-primary">Réserver</a></div>
                                        <div class="price"><span>FCFA</span><b>pour</b>{{ $fservice->price }}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="content_info">
            <div class="bg-dark color-white border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="services-lines-info">
                                <h2>BIENVENUE CHEZ LAND SERVICES</h2>
                                <p class="lead">
                                    Réserver les meilleurs services en un seul lieu.
                                    <span class="line"></span>
                                </p>

                                <p>Trouvez un large éventail de services à domicile.</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="services-lines">
                                @foreach ($fcategories as $cats)
                                    <li>
                                        <a href="{{ route('home.service', ['category_slug' => $cats->slug]) }}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="{{ asset('images/categories') }}/{{ $cats->image }}"
                                                        alt="{{ $cats->name }}"></i>
                                                <h5>{{ $cats->name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="titles">
                        <h2><span>appareils électroménagers</span>Services</h2>
                        <i class="fa fa-plane"></i>
                        <hr class="tall">
                    </div>
                </div>
            </div>
            <div id="boxes-carousel">
                @foreach ($aservices as $aservice)
                    <div>
                        <a class="g-list" href="{{ route('home.service.detail', ['service_slug' => $aservice->slug]) }}">
                            <div class="img-hover">
                                <img src="{{ asset('images/services/thumbnails') }}/{{ $aservice->thumbnail }}"
                                    alt="{{ $aservice->name }}" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>{{ $aservice->name }}</h3>
                                <hr class="separator">
                                <p>{{ $aservice->tagline }}</p>
                                <div class="content-btn"><a
                                        href="{{ route('home.service.detail', ['service_slug' => $aservice->slug]) }}"
                                        class="btn btn-primary">Réservez</a></div>
                                <div class="price"><span>FCFA</span><b>pour</b>{{ $aservice->price }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
