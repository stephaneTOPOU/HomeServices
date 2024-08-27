<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Profile
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if ($sprovider->image)
                                                <img src="{{ asset('images/sprovider') }}/{{ $sprovider->image }}"
                                                    alt="{{ Auth::user()->name }}}" width="100%">
                                            @else
                                                <img src="{{ asset('images/sprovider/default.png') }}"
                                                    alt="{{ Auth::user()->name }}}" width="100%">
                                            @endif
                                        </div>
                                        <div class="col-md-8">

                                            <h3>Nom : {{ Auth::user()->name }}</h3>

                                            <p>Disponible :  @if ($sprovider->disponible)
                                                    <span id="statusDot"
                                                        style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: green;"></span>
                                                    <span id="statusText">Je suis disponible</span>
                                                @else
                                                    <span id="statusDot"
                                                        style="display: inline-block; width: 10px; height: 10px; border-radius: 50%; background-color: red;"></span>
                                                    <span id="statusText">Je ne suis pas disponible</span>
                                                @endif
                                            </p>

                                            @if (Auth::user()->email)
                                                <p><b>Emai : </b>{{ Auth::user()->email }}</p>
                                            @endif

                                            @if (Auth::user()->phone)
                                                <p><b>Téléphone : </b>{{ Auth::user()->phone }}</p>
                                            @endif

                                            @if ($sprovider->city)
                                                <p><b>Ville : </b>{{ $sprovider->city }}</p>
                                            @endif

                                            @if ($sprovider->service_id)
                                                <p><b>Service rendu : </b>{{ $sprovider->service->name }}</p>
                                            @endif

                                            @if ($sprovider->service_location)
                                                <p><b>Emplacement du service : </b>{{ $sprovider->service_location }}
                                                </p>
                                            @endif


                                        </div>

                                        <div class="col-md-12">
                                            @if ($sprovider->about)
                                                <p> <b>Description :</b> {{ $sprovider->about }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <a href="{{ route('sprovider.profile.edit') }}"
                                                class="btn btn-info pull-right">Modifier</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
