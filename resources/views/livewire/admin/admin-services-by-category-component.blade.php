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
                <h1>{{ $category_name }} services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>{{ $category_name }} services</li>
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
                                            {{ $category_name }} service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service.add') }}"
                                                class="btn btn-info pull-right">Ajouter un service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                        </div>
                                    @endif
                                    @if ($services->count() > 0)
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Catégorie</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Prix</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($services as $service)
                                                    <tr>
                                                        <td>{{ $service->id }}</td>
                                                        <td>{{ $service->service_categories->name }}</td>
                                                        <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}"
                                                                alt="{{ $service->name }}" width="60" /></td>
                                                        <td>{{ $service->name }}</td>
                                                        <td>{{ $service->price }}</td>
                                                        <td>
                                                            @if ($service->status)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td>{{ $service->created_at }}</td>
                                                        <td>
                                                            <a href="#"><i
                                                                    class="fa fa-edit fa-2x text-info"></i></a>
                                                            <a href="#"
                                                                onclick="confirm('Voulez - vous supprimer cet Service !?') || event.stopImmediatePropagation()"
                                                                wire:click.prevent="#" style="margin-left: 10px"><i
                                                                    class="fa fa-times fa-2x text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $services->links() }}
                                    @else
                                        <div class="col-md-12">
                                            <p class="text-center">Aucun service disponible pour cette catégorie.</p>
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
