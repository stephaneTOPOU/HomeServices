<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Contact</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="LDN Services">
        </div>
        <div id="map" class="honmob">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7933.738644950409!2d1.2586903999999999!3d6.1482472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab7eb7808df5ed7%3A0xa7193cf4a08c5614!2sSolution%20Logicielle%20Expert!5e0!3m2!1sfr!2stg!4v1739523892515!5m2!1sfr!2stg"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" style="border:0;" allowfullscreen="false"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <aside>
                                <h4>Notre Bureau</h4>
                                <address>
                                    <strong>LDN Services</strong><br>
                                    <i class="fa fa-map-marker"></i><strong>Adresss: </strong>Lomé, Togo<br>
                                    <i class="fa fa-phone"></i><strong>Téléphone: </strong> +32 499 91 44 73
                                </address>
                                <address>
                                    <strong>LDN Services emails</strong><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                        href="mailto:contact@homes-services.com"> contact@homes-services.com</a><br>
                                    <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                        href="mailto:support@homes-services.com"> support@homes-services.com</a>
                                </address>
                            </aside>
                            <hr class="tall">
                        </div>
                        <div class="col-md-8">
                            <h3>Laisser un message</h3>
                            <p class="lead">
                            </p>
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form id="contactform" class="form-theme" wire:submit.prevent="sendMessage">
                                @csrf
                                <input type="text" placeholder="Nom" name="name" id="name" required=""
                                    wire:model="name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="email" placeholder="Email" name="email" id="email"
                                    required=""wire:model="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="text" placeholder="Téléphone" name="phone" id="phone"
                                    required="" wire:model="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <textarea placeholder="Votre Message" name="message" id="message" required="" wire:model="message"></textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <input type="submit" name="Submit" value="Envoyer" class="btn btn-primary">
                            </form>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
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
    </div>
    <script type="text/javascript">
        function initAutocomplete() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 19.0760,
                    lng: 72.8777
                },
                zoom: 13
            });
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
        }
    </script>
    <script src="maps/api/js?key=AIzaSyDUivMJTPZn0DVMCnTmeOxPEAC6kSuplwU&libraries=places&callback=initAutocomplete"
        async="" defer=""></script>
</div>
