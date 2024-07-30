<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Ajouter un slide</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Ajouter un slide</li>
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
                                            Ajouter un nouveau slide
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.slider') }}" class="btn btn-info pull-right">Tous les slider</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="createSlider">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title" class="control-label col-sm-4">Titre du slide : </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="title" wire:model="title" />
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="status" class="control-label col-sm-4">Status : </label>
                                            <div class="col-sm-8">
                                                <select name="status" id="" class="form-control" wire:model="status">                                                    
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-4">Image : </label>
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
