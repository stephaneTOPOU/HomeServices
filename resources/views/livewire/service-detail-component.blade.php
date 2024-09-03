<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{ $services->name }}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>{{ $services->name }}</li>
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
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-header">
                                            <div class="post-format-icon post-format-standard"
                                                style="margin-top: -10px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="post-info-wrap">
                                                <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                        rel="bookmark">{{ $services->name }}:
                                                        {{ $services->service_categories->name }}</a></h2>
                                                <div class="post-meta" style="height: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="single-carousel">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services') }}/{{ $services->image }}"
                                                    alt="{{ $services->name }}" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post-content">
                                            <h3>{{ $services->name }}</h3>
                                            <p>{{ $services->description }}</p>
                                            <h4>Inclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode('|', $services->inclusion) as $inclusion)
                                                    <li><i class="fa fa-plus"></i>{{ $inclusion }}.</li>
                                                @endforeach
                                            </ul>
                                            <h4>Exclusion</h4>
                                            <ul class="list-styles">
                                                @foreach (explode('|', $services->exclusion) as $exclusion)
                                                    <li><i class="fa fa-minus"></i>{{ $exclusion }}.</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Détails de la réservation</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Prix</td>
                                                <td style="border-top: none;">
                                                    <span>&euro;</span>{{ $services->price }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quntité</td>
                                                <td>1</td>
                                            </tr>
                                            @php
                                                $total = $services->price;
                                            @endphp
                                            @if ($services->sp_discount)
                                                @if ($services->sp_discount_type == 'fixed')
                                                    <tr>
                                                        <td>Réduction</td>
                                                        <td>{{ $services->sp_discount }} F</td>
                                                    </tr>
                                                    @php
                                                        $total = $total - $services->sp_discount;
                                                    @endphp
                                                @elseif ($services->sp_discount_type == 'percent')
                                                    <tr>
                                                        <td>Réduction</td>
                                                        <td>{{ $services->sp_discount }} %</td>
                                                        @php
                                                            $total = $total - ($total * $services->sp_discount) / 100;
                                                        @endphp
                                                    </tr>
                                                @endif
                                            @endif
                                            <tr>
                                                <td>Total</td>
                                                <td><span>&euro;</span> {{ $total }}</td>
                                            </tr>

                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <form >
                                            <a type="submit" class="btn btn-primary" name="submit" href="{{ route('home.reservation',['service_slug'=>$services->slug]) }}"
                                                >Réserver maintenant</a>
                                            </form>
                                    </div>
                                </div>
                            </aside>
                            <aside>
                                @if ($r_services)
                                    <h3>Service Relative</h3>
                                    <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                        style="max-width: 360px">
                                        <a
                                            href="{{ route('home.service.sprovider', ['service_slug' => $r_services->slug]) }}">
                                            <div class="img-hover">
                                                <img src="{{ asset('images/services/thumbnails') }}/{{ $r_services->thumbnail }}"
                                                    alt="{{ $r_services->name }}" class="img-responsive">
                                            </div>
                                            <div class="info-gallery">
                                                <h3>
                                                    {{ $r_services->name }}
                                                </h3>
                                                <hr class="separator">
                                                <p>{{ $r_services->name }}</p>
                                                <div class="content-btn"><a
                                                        href="{{ route('home.service.sprovider', ['service_slug' => $r_services->slug]) }}"
                                                        class="btn btn-warning">Voir les détails</a></div>
                                                <div class="price">
                                                    <span>&euro;</span><b>de</b>{{ $r_services->price }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @else
                                @endif
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
