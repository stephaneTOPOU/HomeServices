{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



<x-base-layout>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Inscription</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Inscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 profile1" style="padding-bottom:40px;">
                        <div class="thinborder-ontop">
                            <h3>Info utilisateurs</h3>
                            <x-jet-validation-errors class="mb-4" />
                            <form id="userregisterationform" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="" required="" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-right">Prénon</label>
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname"
                                            value="" required="" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail
                                    </label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="telefon"
                                        class="col-md-4 col-form-label text-md-right">Téléphone</label>
                                    <div class="col-md-6">
                                        <input id="telefon" type="text" class="form-control" name="telefon"
                                            value="" required="" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de
                                        passe</label>
                                    <div class="col-md-6 eye">
                                        <input id="password" type="password" class="form-control" name="password"
                                            required="">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-right">Confirmez le
                                        mot de passe</label>
                                    <div class="col-md-6 eye2">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required="">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="registeras" class="col-md-4 col-form-label text-md-right">S'inscrire
                                        comme</label>
                                    <div class="col-md-6">
                                        <select name="registeras" id="registeras" class="form-control">
                                            <option value="">Choisir</option>
                                            <option value="CST">Client</option>
                                            <option value="SVP">Prestataire de service</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10">
                                        <span style="font-size: 14px;">Vous êtes déjà inscrit <a
                                                href="{{ route('login') }}" title="Login">cliquez ici</a> pour
                                                se connecter</span>
                                        <button type="submit" class="btn btn-primary pull-right">S'inscrire</button>
                                    </div>
                                </div>
                            </form>
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
</x-base-layout>
<style>
    .eye i {
        position: absolute !important;
        top: 8px !important;
        right: 25px !important;
        font-size: 18px;
        cursor: pointer;
    }

    .eye i.active::before {
        content: '\f070';
        color: #5256ad;
    }

    .eye2 i {
        position: absolute !important;
        top: 8px !important;
        right: 25px !important;
        font-size: 18px;
        cursor: pointer;
    }

    .eye2 i.active::before {
        content: '\f070';
        color: #5256ad;
    }
</style>

<script>
    let input = document.querySelector('.eye input');
    let showBtn = document.querySelector('.eye i');

    showBtn.onclick = function() {
        if (input.type === "password") {
            input.type = "text";
            showBtn.classList.add('active');
        } else {
            input.type = "password";
            showBtn.classList.remove('active');
        }
    }

    let input2 = document.querySelector('.eye2 input');
    let showBtn2 = document.querySelector('.eye2 i');

    showBtn2.onclick = function() {
        if (input2.type === "password") {
            input2.type = "text";
            showBtn2.classList.add('active');
        } else {
            input2.type = "password";
            showBtn2.classList.remove('active');
        }
    }
</script>
