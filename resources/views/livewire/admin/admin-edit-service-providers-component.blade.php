<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Valider un fournisseur</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Valider un fournisseur</li>
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
                                            Valider un fournisseur
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.sprovider') }}" class="btn btn-info pull-right">Toutes les fournisseur</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="updateSprovider">
                                        @csrf
                                        <div class="form-group">
                                            <label for="valide" class="control-label col-sm-4">Fournisseur valider : </label>
                                            <div class="col-sm-8">
                                                <select name="valide" id="" class="form-control" wire:model="valide">
                                                    <option value="0">Non</option>
                                                    <option value="1">Oui</option>
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
