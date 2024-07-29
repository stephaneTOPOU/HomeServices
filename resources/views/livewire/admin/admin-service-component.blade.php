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
                <h1>Tous les services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Tous les services</li>
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
                                            Tous les service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service.add') }}" class="btn btn-info pull-right">Ajouter un service</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Catégorie</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Prix</th>                                        
                                                <th>Status</th>
                                                <th>En vedette</th>                                        
                                                <th>Date</th>                                        
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($services as $service)
                                                <tr>
                                                    <td>{{ $service->id }}</td>
                                                    <td>{{ $service->service_categories->name }}</td>
                                                    <td><img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}" alt="{{ $service->name }}" width="60"/></td>
                                                    <td>{{ $service->name }}</td>
                                                    <td>{{ $service->price }}</td>
                                                    <td>
                                                        @if ($service->status)
                                                            Active
                                                        @else
                                                            Inactive
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($service->featured)
                                                            Oui
                                                        @else
                                                            Non
                                                        @endif
                                                    </td>
                                                    <td>{{ $service->created_at }}</td>
                                                    <td>
                                                        <a href="{{route('amin.service.edit',['service_slug'=>$service->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                        <a href="#" onclick="confirm('Voulez - vous supprimer cet Service !?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{ $service->id }})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $services->links() }}
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
