<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Modifier un profile</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Modifier un profile</li>
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
                                            Modifier un profile
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('sprovider.profile') }}" class="btn btn-info pull-right">Mon profil</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('message') }}</div>
                                            @endif
                                            <form action="" class="form-horizontal"
                                                wire:submit.prevent="updateProfile">
                                                <div class="form-group">
                                                    <label for="newimage" class="control-label col-sm-4">Image :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control-file" name="image"
                                                            wire:model="newimage" />
                                                        @error('newimage')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                        @if ($newimage)
                                                            <img src="{{ $newimage->temporaryUrl() }}" alt=""
                                                                width="220" />
                                                        @elseif ($image)
                                                            <img src="{{ asset('images/sprovider') }}/{{ $image }}"
                                                                alt="" width="220" />
                                                        @else
                                                            <img src="{{ asset('images/sprovider/default.png') }}"
                                                                alt="" width="220" />
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="about" class="control-label col-sm-4">A propos :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <textarea name="about" class="form-control" cols="30" rows="10" wire:model="about"></textarea>
                                                        @error('about')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="city" class="control-label col-sm-4">Ville :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="city"
                                                            wire:model="city">
                                                        @error('city')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="service_category_id"
                                                        class="control-label col-sm-4">Catégorie du service : </label>

                                                    <div class="col-sm-8">
                                                        <select name="service_category_id" id=""
                                                            class="form-control" wire:model="service_category_id">
                                                            <option value="">Choisir la categorie</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('service_category_id')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="service_location"
                                                        class="control-label col-sm-4">L'emplacement du service :
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            name="service_location" wire:model="service_location">
                                                        @error('service_location')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <button type="submit"
                                                    class="btn btn-success pull-right">Modifier</button>
                                            </form>
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
