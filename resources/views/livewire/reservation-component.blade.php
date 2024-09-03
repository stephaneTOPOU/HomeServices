<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Réservation</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Réservation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div>

                        <style>
                            .wrap-address-billing .row-in-form input[type="password"],
                            .wrap-address-billing .row-in-form input[type=text],
                            .wrap-address-billing .row-in-form input[type=number] {
                                font-size: 13px;
                                line-height: 19px;
                                display: inline-block;
                                height: 43px;
                                padding: 2px 20px;
                                width: 100%;
                                border: 1px solid #e6e6e6;
                            }
                        </style>
                        <div class="container">
                            <div class="panel-body">
                                <h3 style="text-align: center; font-weight: bold; margin: 10px 15px 20px 5px;">
                                    RESERVATION</h3>
                                <form wire:submit.prevent="placeOrder" onsubmit="$('#traitement').show();"
                                    class="form-horizontal">

                                    <div class="form-group">
                                        <label for="lname" class="control-label col-sm-4">Nom<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="lname" value="" class="form-control"
                                                placeholder="Votre nom" wire:model="lastname">
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fname"
                                            class="control-label col-sm-4">Prénom<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="fname" value="" class="form-control"
                                                placeholder="Votre prénom" wire:model="firstname">
                                            @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label col-sm-4">Adresse e-mail:</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" value="" class="form-control"
                                                placeholder="Tapez votre e-mail" wire:model="email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label col-sm-4">Numéro de
                                            téléphone<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="number" name="phone" value="" class="form-control"
                                                placeholder="Format à 8 chiffres" wire:model="mobile">
                                            @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="country" class="control-label col-sm-4">Pays:<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="country" value="" placeholder="....."
                                                class="form-control" wire:model="country">
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="city"
                                            class="control-label col-sm-4">Ville:<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="city" value="" placeholder="City name"
                                                wire:model="city" class="form-control">
                                            @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-field">
                                            <input name="different-add" id="different-add" value="1"
                                                type="checkbox" wire:model="ship_to_different">
                                            <span>Réserver à une autre adresse ?</span>
                                        </label>
                                    </div>
                                    @if ($ship_to_different)
                                        <div class="col-md-12">
                                            <h3
                                                style="text-align: center; font-weight: bold; margin: 10px 15px 20px 5px;">
                                                ADRESSE DE LA RESERVATION</h3>
                                            <div class="form-group">
                                                <label for="lname"
                                                    class="control-label col-sm-4">Nom<span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lname" value=""
                                                        class="form-control" placeholder="Votre nom"
                                                        wire:model="s_lastname">
                                                    @error('s_lastname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fname"
                                                    class="control-label col-sm-4">Prénom<span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="fname" value=""
                                                        class="form-control" placeholder="Votre prénom"
                                                        wire:model="s_firstname">
                                                    @error('s_firstname')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label col-sm-4">Adresse
                                                    e-mail:</label>
                                                <div class="col-sm-8">
                                                    <input type="email" name="email" value=""
                                                        class="form-control" placeholder="Tapez votre email"
                                                        wire:model="s_email">
                                                    @error('s_email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="control-label col-sm-4">Numéro de
                                                    téléphone<span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="number" name="phone" value=""
                                                        class="form-control" placeholder="Format à 8 chiffres"
                                                        wire:model="s_mobile">
                                                    @error('s_mobile')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country"
                                                    class="control-label col-sm-4">Pays:<span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country" value=""
                                                        class="form-control" placeholder="....."
                                                        wire:model="s_country">
                                                    @error('s_country')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="city"
                                                    class="control-label col-sm-4">Ville:<span>*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="city" value=""
                                                        class="form-control" placeholder="City name"
                                                        wire:model="s_city">
                                                    @error('s_city')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="summary summary-checkout">
                                        <div class="summary-item payment-method">
                                            <h4
                                                style="text-align: center; font-weight: bold; margin: 20px 15px 20px 5px;">
                                                MODE DE PAIEMENT</h4>
                                            @if ($paymentmode == 'card')
                                                <div class="wrap-address-billing">
                                                    @if (Session::has('stripe_error'))
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ Session::get('stripe_error') }}</div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label for="card-no" class="control-label col-sm-4">Numéro de
                                                            carte:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="card-no" value=""
                                                                class="form-control" placeholder="Numéro de carte"
                                                                wire:model="card_no">
                                                            @error('card_no')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exp-month" class="control-label col-sm-4">Mois
                                                            d'expiration:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="exp-month" value=""
                                                                class="form-control" placeholder="MM"
                                                                wire:model="exp_month">
                                                            @error('exp_month')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exp-year" class="control-label col-sm-4">Année
                                                            d'expiration:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="exp-year" value=""
                                                                class="form-control" placeholder="AAAA"
                                                                wire:model="exp_year">
                                                            @error('exp_year')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cvc"
                                                            class="control-label col-sm-4">CVC:</label>
                                                        <div class="col-sm-8">
                                                            <input type="password" name="cvc" value=""
                                                                class="form-control" placeholder="CVC"
                                                                wire:model="cvc">
                                                            @error('cvc')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">
                                                    <input name="paymentmode" id="paymentmode-bank" value="cod"
                                                        type="radio" wire:model="paymentmode">
                                                    <span>Payer à la livraison</span>
                                                </label>
                                                <label class="control-label col-sm-4">
                                                    <input name="paymentmode" id="paymentmode-visa" value="card"
                                                        type="radio" wire:model="paymentmode">
                                                    <span>Carte de Crédit</span>
                                                </label>
                                                <label class="control-label col-sm-4">
                                                    <input name="paymentmode" id="paymentmode-paypal" value="paypal"
                                                        type="radio" wire:model="paymentmode">
                                                    <span>Paypal</span>
                                                </label>
                                                @error('paymentmode')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if (Session::has('checkout'))
                                                <p class="summary-info grand-total"><span>Grand Total</span> <span
                                                        class="grand-total-price">{{ Session::get('checkout')['total'] }}</span>
                                                </p>
                                            @endif

                                            @if ($errors->isEmpty())
                                                <div wire:ignore id="traitement"
                                                    style="font-size: 22px; margin-bottom: 20px; padding-left: 37px; color: green; display: none">
                                                    <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                                    <span>Traitement...</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success pull" style="margin: 20px 15px 20px 5px;">Réserver
                                            maintenant</button>
                                    </div>
                                </form>
                            </div><!--end main content area-->

                        </div><!--end container-->

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
