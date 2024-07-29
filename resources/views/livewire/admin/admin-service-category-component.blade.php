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
                <h1>Catégories des services</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Catégories des services</li>
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
                                            Toutes les catégories de service
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service_cat.add') }}" class="btn btn-info pull-right">Ajouter une catégorie</a>
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
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Slug</th> 
                                                <th>En vedette</th>                                       
                                                <th>Action</th>                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td><img src="{{ asset('images/categories') }}/{{ $category->image }}" alt="{{ $category->name }}" width="60"/></td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>
                                                        @if ($category->featured)
                                                            Oui
                                                        @else
                                                            Non
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.services_by_cat',['category_slug'=>$category->slug]) }}" style="margin-right: 10px"><i class="fa fa-list fa-2x text-info"></i></a>
                                                        <a href="{{ route('admin.service_cat.edit',['category_id'=>$category->id]) }}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                        <a href="#" onclick="confirm('Voulez - vous supprimer cette catégorie !?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $categories->links() }}
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
