<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $services->name }} Services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li>{{ $services->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>{{ $services->name }} <span>Services</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">
                        @if ($sproviders->count() > 0)
                            @foreach ($sproviders as $sprovider)
                                <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list"
                                        href="{{ route('home.service.detail', ['service_slug' => $sprovider->service->slug]) }}">
                                        <div class="img-hover">
                                            @if ($sprovider->image)
                                                <img src="{{ asset('images/sprovider') }}/{{ $sprovider->image }}"
                                                    alt="{{ $sprovider->user->name }}" class="img-responsive">
                                            @else
                                                <img src="{{ asset('images/sprovider/default.png') }}"
                                                    alt="{{ $sprovider->user->name }}" class="img-responsive">
                                            @endif
                                        </div>
                                        <div class="info-gallery">
                                            @if ($sprovider->disponible)
                                                <span
                                                    style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: green;"></span>
                                                <span style="width: 20px; height: 10px;">Disponible</span>
                                            @else
                                                <span
                                                    style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: red;"></span>
                                                <span>N'est pas disponible</span>
                                            @endif
                                            <h3>{{ $sprovider->user->name }} {{ $sprovider->user->firstname }}</h3>
                                            <hr class="separator">
                                            <p>{{ $sprovider->city }}, {{ $sprovider->service_location }}</p>
                                            <div class="content-btn"><a
                                                    href="{{ route('home.service.detail', ['service_slug' => $sprovider->service->slug]) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </div>
                                            <div class="price"></b>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <p class="text-center">Aucun fournisseur disponible.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
