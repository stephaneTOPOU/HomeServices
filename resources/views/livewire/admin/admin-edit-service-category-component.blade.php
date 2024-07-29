<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Modifier une catégorie de services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Modifier une catégorie de services</li>
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
                                            Modifier une nouvelle catégorie
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service_categories') }}" class="btn btn-info pull-right">Toutes les catégories</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="updateCategory">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-4">Nom de la catégorie : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-4">Slug de la catégorie : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="slug" wire:model="slug" />
                                                @error('slug')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-4">Image de la catégorie : </label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control-file" name="image" wire:model="newimage" />
                                                @error('newimage')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                @if ($newimage)
                                                    <img src="{{ $newimage->temporaryUrl() }}" alt="" width="60" />
                                                @else
                                                    <img src="{{ asset('images/categories') }}/{{ $image }}" alt="" width="60" />
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="featured" class="control-label col-sm-4">En vedette : </label>
                                            <div class="col-sm-8">
                                                <select name="featured" id="" class="form-control" wire:model="featured">                                                    
                                                    <option value="0">Non</option>
                                                    <option value="1">oui</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success pull-right">Modifier</button>
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
