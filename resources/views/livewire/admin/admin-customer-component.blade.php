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
                <h1>Nos clients</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Nos clients</li>
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
                                            Toutes les clients
                                        </div>
                                        <div class="col-md-6">
                                            {{-- <a href="{{ route('admin.service_cat.add') }}" class="btn btn-info pull-right">Ajouter une catégorie</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    @if ($customers->count() > 0)
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nom</th>
                                                    <th>Prénoms</th>
                                                    <th>Email</th>
                                                    <th>Téléphone</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($customers as $customer)
                                                    <tr>
                                                        <td>{{ $customer->id }}</td>
                                                        <td>{{ $customer->name }}</td>
                                                        <td>{{ $customer->firstname }}</td>
                                                        <td>{{ $customer->email }}</td>
                                                        <td>{{ $customer->phone }}</td>
                                                        <td>{{ $customer->created_at }}</td>
                                                        <td>
                                                            <a href="#" onclick="confirm('Voulez - vous supprimer ce fournisseur !?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCustomer({{ $customer->id }})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                        {{ $customers->links() }}
                                    @else
                                        <div class="col-md-12">
                                            <p class="text-center">Aucun client disponible.</p>
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
