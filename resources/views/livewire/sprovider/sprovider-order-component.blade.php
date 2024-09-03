<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Réservation</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Réservation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div>
                        <style>
                            nav svg{
                                height: 20px;
                            }
                            nav .hidden{
                                display: block !important;
                            }
                        </style>
                        <div class="container" style="padding: 30px 0;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Toutes les Transactions
                                        </div>
                                        <div class="panel-body">
                                            @if (Session::has('order_message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                                            @endif
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        {{-- <th>Sous-Total</th>
                                                        <th>Rabais</th>
                                                        <th>Tax</th>
                                                        <th>Total</th> --}}
                                                        <th>Nom</th>
                                                        <th>Prénom</th>
                                                        <th>Téléphone</th>                                                                       
                                                        <th>Status</th>
                                                        <th>Date de la transaction</th>
                                                        <th colspan="2" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>{{$order->id}}</td>
                                                            {{-- <td>{{$order->subtotal}} FCFA</td>
                                                            <td>{{$order->discount}} FCFA</td>
                                                            <td>{{$order->tax}} FCFA</td>
                                                            <td>{{$order->total}} FCFA</td> --}}
                                                            <td>{{$order->lastname}}</td>
                                                            <td>{{$order->firstname}}</td>
                                                            <td>{{$order->mobile}}</td>                                                                                
                                                            <td>{{$order->status}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td><a href="{{route('sprovider.orderdetails',['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Détails</a></td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">livré</a></li>
                                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Annulé</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$orders->links()}}
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

