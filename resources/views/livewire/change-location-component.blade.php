<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Changer de lieu</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li>/</li>
                        <li>Changer de lieu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{ asset('assets/img/img-theme/shp.png') }}" class="img-responsive" alt="LDN Services">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form wire:submit.prevent="changeLocation">
                            <div class="col-md-8">
                                <h3>Recherchez votre localisation</h3>
                                <p class="lead">
                                </p>
                                <input type="text" class="form-control" id="autocomplete" name="location"
                                    placeholder="Search Location....">
                                <div id="map" style="height: 400px;"></div>
                            </div>
                            <div class="col-md-4">
                                <aside class="addlocation">
                                    <h4>Votre localisation<input type="submit" class="btn btn-primary pull-right"
                                            name="submit" value="Ajouter une localisation"></h4>
                                    <address>
                                        <div class="form-group">
                                            <label for="streetnumber" class="col-form-label">Numéro de rue:</label>
                                            <input type="text" class="form-control" id="street_number"
                                                name="streetnumber" wire:model="streetnumber">
                                        </div>
                                        <div class="form-group">
                                            <label for="routes" class="col-form-label">Itinéraire:</label>
                                            <input type="text" class="form-control" id="route" name="routes"
                                                wire:model="routes">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-form-label">Ville:</label>
                                            <input type="text" class="form-control" id="locality" name="city"
                                                wire:model="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="state" class="col-form-label">État:</label>
                                            <input type="text" class="form-control" id="administrative_area_level_1"
                                                name="state" wire:model="state">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class="col-form-label">Pays:</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                wire:model="country">
                                        </div>
                                        <div class="form-group">
                                            <label for="pincode" class="col-form-label">Code postal:</label>
                                            <input type="text" class="form-control" id="postal_code" name="pincode"
                                                wire:model="pincode">
                                        </div>
                                    </address>
                                </aside>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
