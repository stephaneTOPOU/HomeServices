<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Fournisseur de services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Fournisseur de services</li>
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
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Toutes les fournisseurs de services
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <a href="{{ route('admin.service_cat.add') }}" class="btn btn-info pull-right">Ajouter une catégorie</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if ($sproviders->count() > 0)
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Nom</th>
                                                    <th>Email</th>
                                                    <th>Téléphone</th>
                                                    <th>Ville</th>
                                                    <th>Service</th>
                                                    <th>Adresse du fournisseur</th>
                                                    <th>Prix du fournisseur</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($sproviders as $sprovider)
                                                    <tr>
                                                        <td>{{ $sprovider->id }}</td>
                                                        <td><img src="{{ asset('images/sprovider') }}/{{ $sprovider->image }}"
                                                                alt="{{ $sprovider->name }}" width="60" /></td>
                                                        <td>{{ $sprovider->user->name }}</td>
                                                        <td>{{ $sprovider->user->email }}</td>
                                                        <td>{{ $sprovider->user->phone }}</td>
                                                        <td>{{ $sprovider->city }}</td>
                                                        <td>{{ $sprovider->service->name }}</td>
                                                        <td>{{ $sprovider->service_location }}</td>
                                                        <td>{{ $sprovider->prix }}</td>
                                                        <td>{{ $sprovider->created_at }}</td>

                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                        {{ $sproviders->links() }}
                                    @else
                                        <div class="col-md-12">
                                            <p class="text-center">Aucun fournisseur disponible.</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
