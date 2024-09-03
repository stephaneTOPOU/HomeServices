<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Détail réservation</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Détail réservation</li>
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
                        <div class="container" style="padding: 30px 0;">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (Session::has('order_message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('order_message') }}</div>
                                    @endif
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Détail du service
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{ route('customer.orders') }}" class="btn btn-success pull-right">Mes
                                                        transactions</a>
                                                    @if ($order->status == 'ordered')
                                                        <a href="#" wire:click.prevent="cancelOrder" style="margin-right: 20px"
                                                            class="btn btn-warning pull-right">Annuler la transaction</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <th>Id de la transaction</th>
                                                <th>{{ $order->id }}</th>
                                                <th>Date de la transaction</th>
                                                <th>{{ $order->created_at }}</th>
                                                <th>Status</th>
                                                <th>{{ $order->status }}</th>
                                                @if ($order->status == 'delivered')
                                                    <th>Date de livraison</th>
                                                    <th>{{ $order->delivered_date }}</th>
                                                @elseif ($order->status == 'canceled')
                                                    <th>Date d'annulation</th>
                                                    <th>{{ $order->canceled_date }}</th>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Service Demandé
                                        </div>
                                        <div class="panel-body">
                                            <div class="wrap-iten-in-cart">
                    
                                                <div class="products-cart">
                                                    @foreach ($order->orderItems as $item)
                                                        <div class="pr-cart-item">
                                                            <div class="col-md-12">
                                                                <div class="product-image">
                                                                    <figure><img
                                                                            src="{{ asset('images/services') }}/{{ $item->service->image }}"
                                                                            alt="{{ $item->service->name }}" height="90" width="110">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="product-name">
                                                                <div class="col-md-6">
                                                                    <p class="price">Nom du service : </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="price"><a class="link-to-product"
                                                                            href="{{ route('home.service.detail', ['service_slug' => $item->service->slug]) }}">{{ $item->service->name }}</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="price-field produtc-price">
                                                                <div class="col-md-6">
                                                                    <p class="price">Prix : </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="price">{{ $item->price }} FCFA</p>
                                                                </div>
                                                            </div>
                                                            <div class="quantity">
                                                                <div class="col-md-6">
                                                                    <p class="price">Quantité : </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5>{{ $item->quantity }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="price-field sub-total">
                                                                <div class="col-md-6">
                                                                    <p class="price">Total : </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="price">{{ $item->price * $item->quantity }} FCFA</p>
                                                                </div>
                                                            </div>
                                                            @if ($order->status == 'performed' && $item->rstatus == false)
                                                                <div class="price-field sub-total">
                                                                    <p class="price"><a
                                                                            href="{{ route('customer.review', ['order_item_id' => $item->id]) }}">Ecrire
                                                                            une critique</a></p>
                    
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <div class="order-summary">
                                                    <h4 class="title-box">Récapitulatif de la commande</h4>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title">Sous-total</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->subtotal }} FCFA</b></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title">Tax</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->tax }} FCFA</b></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title">Total</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->total }} FCFA</b></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Détails de facturation
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>{{ $order->lastname }}</th>
                                                    <th>Prénom</th>
                                                    <th>{{ $order->firstname }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Téléphone</th>
                                                    <th>{{ $order->mobile }}</th>
                                                    <th>E-mail</th>
                                                    <th>{{ $order->email }}</th>
                                                </tr>
                    
                                                <tr>
                                                    <th>Ville</th>
                                                    <th>{{ $order->city }}</th>
                                                    <th>Pays</th>
                                                    <th>{{ $order->country }}</th>
                                                </tr>
                    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            @if ($order->is_shipping_different)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Les détails d'expédition
                                            </div>
                                            <div class="panel-body">
                                                <table class="table">
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>{{ $order->shipping->lastname }}</th>
                                                        <th>Prénom</th>
                                                        <th>{{ $order->shipping->firstname }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Téléphone</th>
                                                        <th>{{ $order->shipping->mobile }}</th>
                                                        <th>E-mail</th>
                                                        <th>{{ $order->shipping->email }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Ligne 1</th>
                                                        <th>{{ $order->shipping->line1 }}</th>
                                                        <th>Ligne2</th>
                                                        <th>{{ $order->shipping->line2 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Ville</th>
                                                        <th>{{ $order->shipping->city }}</th>
                                                        <th>Province</th>
                                                        <th>{{ $order->shipping->province }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Pays</th>
                                                        <th>{{ $order->shipping->country }}</th>
                                                        <th>Code zip</th>
                                                        <th>{{ $order->shipping->zipcode }}</th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            La transaction
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Mode de Transaction</th>
                                                    <td>{{ $order->transaction->mode }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>{{ $order->transaction->status }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date de Transaction</th>
                                                    <td>{{ $order->transaction->created_at }}</td>
                                                </tr>
                                            </table>
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

