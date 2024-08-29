<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Ajouter un service</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Ajouter un service</li>
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
                                            Ajouter un service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service') }}" class="btn btn-info pull-right">Tous les services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="createService">
                                        @csrf
                                        <div class="form-group">
                                            <label for="service_category_id" class="control-label col-sm-4">Catégorie : </label>
                                            <div class="col-sm-8">
                                                <select name="service_category_id" id="" class="form-control" wire:model="service_category_id">
                                                    <option value="">Choisir la categorie</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach                                                    
                                                </select>
                                                @error('service_category_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-4">Nom du service : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-4">Slug du service : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="slug" wire:model="slug" />
                                                @error('slug')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tagline" class="control-label col-sm-4">Référence : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="tagline" wire:model="tagline" />
                                                @error('tagline')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="price" class="control-label col-sm-4">Prix : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="price" wire:model="price" />
                                                @error('price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="discount" class="control-label col-sm-4">Réduction : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="discount" wire:model="discount" />
                                                @error('discount')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="discount_type" class="control-label col-sm-4">Type de réduction : </label>
                                            <div class="col-sm-8">
                                                <select name="discount_type" id="" class="form-control" wire:model="discount_type">
                                                    <option value="">choisir</option>
                                                    <option value="fixed">Fixe</option>
                                                    <option value="percent">Pourcentage</option>
                                                </select>
                                                @error('discount_type')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="description" class="control-label col-sm-4">Description : </label>
                                            <div class="col-sm-8">
                                                <textarea name="description" id="" cols="30" rows="5" class="form-control" wire:model="description"></textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inclusion" class="control-label col-sm-4">Inclusion : </label>
                                            <div class="col-sm-8">
                                                <textarea name="inclusion" id="" cols="30" rows="5" class="form-control" wire:model="inclusion"></textarea>
                                                @error('inclusion')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exclusion" class="control-label col-sm-4">Exclusion : </label>
                                            <div class="col-sm-8">
                                                <textarea name="exclusion" id="" cols="30" rows="5" class="form-control" wire:model="exclusion"></textarea>
                                                @error('exclusion')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="thumbnail" class="control-label col-sm-4">vignette : </label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control-file" name="thumbnail" wire:model="thumbnail" />
                                                @error('thumbnail')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                @if ($thumbnail)
                                                    <img src="{{ $thumbnail->temporaryUrl() }}" alt="" width="60" />
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-4">Image du service : </label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control-file" name="image" wire:model="image" />
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" alt="" width="60" />
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success pull-right">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
