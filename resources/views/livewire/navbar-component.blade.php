<nav class="flat-mega-menu">
    <label for="mobile-button"> <i class="fa fa-bars"></i></label>
    <input id="mobile-button" type="checkbox">

    <ul class="collapse">
        <li class="title">
            <a href="/"><img src="{{ asset('images/logo.png') }}"></a>
        </li>
        <li> <a href="{{ route('service.categories') }}">Catégories des services</a></li>
        <li> <a href="#">Appareils Ménagers</a>
            <ul class="drop-down one-column hover-fade">
                @foreach ($appliances as $appliance)
                    <li><a href="{{ route('home.service.detail',['service_slug'=>$appliance->slug]) }}">{{ $appliance->name }}</a></li>
                @endforeach
            </ul>
        </li>
        <li> <a href="#">Besoins à domicile</a>
            <ul class="drop-down one-column hover-fade">
                @foreach ($homes as $home)
                    <li><a href="{{ route('home.service.detail',['service_slug'=>$home->slug]) }}">{{ $home->name }}</a></li>
                @endforeach
            </ul>
        </li>        
        @if (Route::has('login'))
            @auth
                @if (Auth::user()->utype === 'ADM')
                    <li class="login-form"> <a href="#" title="Register">Mon compte(Admin)</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('admin.service_categories') }}">Catégories services</a></li>
                            <li><a href="{{ route('admin.service') }}">Les services</a></li>
                            <li><a href="{{ route('admin.slider') }}">Les sliders</a></li>
                            <li><a href="{{ route('admin.contact') }}">Les messages</a></li>
                            <li><a href="{{ route('admin.sprovider') }}">Les fournisseurs</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                @elseif (Auth::user()->utype === 'SVP')
                    <li class="login-form"> <a href="#" title="Register">Mon compte(Prestataire de
                            services)</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('sprovider.dashboard') }}">DashBoard</a></li>
                            <li><a href="{{ route('sprovider.profile') }}">Profil</a></li>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="login-form"> <a href="#" title="Register">Mon compte(Client)</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{ route('customer.dashboard') }}">DashBoard</a></li>
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
                <li class="login-form"> <a href="{{ route('register') }}" title="Register">S'inscrire</a></li>
                <li class="login-form"> <a href="{{ route('login') }}" title="Login">Connexion</a></li>
            @endif
            @endif
            <li class="search-bar">
            </li>
        </ul>
    </nav>
