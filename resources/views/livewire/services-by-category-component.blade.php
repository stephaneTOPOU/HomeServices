<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $categories->name }} Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li>{{ $categories->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>{{ $categories->name }} <span>Services</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @if ($categories && $categories->services)
                            @if ($categories->services->count() > 0)
                                @foreach ($categories->services as $service)
                                    <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                        style="padding-right: 5px;padding-left: 5px;">
                                        <a class="g-list" href="{{route('home.service.detail',['service_slug'=>$service->slug])}}">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                    alt="{{ $service->name }}" class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>{{ $service->name }}</h3>
                                                <hr class="separator">
                                                <p>{{ $service->tagline }}</p>
                                                <div class="content-btn"><a href="{{route('home.service.detail',['service_slug'=>$service->slug])}}"
                                                        class="btn btn-primary">Réserver</a>
                                                </div>
                                                <div class="price"><span>FCFA</span><b>À partir
                                                        de</b>{{ $service->price }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <p class="text-center">Aucun service disponible.</p>
                                </div>
                            @endif
                        @else
                            <div class="col-md-12">
                                <p class="text-center">Aucun service disponible.</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
