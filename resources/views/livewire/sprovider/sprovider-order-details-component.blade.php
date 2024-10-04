<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Détails réservation</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Détails réservation</li>
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
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Détails service
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{ route('sprovider.orders', ['slug' => Auth::user()->slug]) }}"
                                                        class="btn btn-success pull-right">Toutes les
                                                        transactions</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Id de la transaction</th>
                                                    <th>{{ $order->id }}</th>
                                                    <th>Date da la transaction</th>
                                                    <th>{{ $order->created_at }}</th>

                                                    <th>Status</th>
                                                    @if ($order->status === 'performed')
                                                        <th>Livré</th>
                                                    @elseif ($order->status === 'canceled')
                                                        <th>Annulé</th>
                                                    @else
                                                        <th>commandé</th>
                                                    @endif

                                                    @if ($order->status == 'performed')
                                                        <th>Date de livraison</th>
                                                        <th>{{ $order->delivered_date }}</th>
                                                    @elseif ($order->status == 'canceled')
                                                        <th>Date d'annulation</th>
                                                        <th>{{ $order->canceled_date }}</th>
                                                    @endif

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Service demandé
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div>
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
                                                                            alt="{{ $item->service->name }}"
                                                                            width="110" height="90">
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
                                                                    <p class="price">{{ $item->price }} &euro;</p>
                                                                </div>
                                                            </div>

                                                            <div class="price-field sub-total">
                                                                <div class="col-md-6">
                                                                    <p class="price">Total : </p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="price">
                                                                        {{ $item->price * 1 }} &euro;</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <div class="order-summary">
                                                    <h4 class="title-box">Récapitulatif de la commande</h4>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span
                                                                    class="title">Sous-total</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->subtotal }}
                                                                        &euro;</b></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title">Tax</span></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->tax }}
                                                                        &euro;</b></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title">Total</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="summary-info"> <span class="title"><b
                                                                        class="index">{{ $order->total }}
                                                                        &euro;</b></span></p>
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
                                                Détails d'expédition
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
                                            Transactions
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Mode de Transaction</th>

                                                    @if ($order->transaction->mode === 'cod')
                                                        <td>Après service </td>
                                                    @elseif ($order->transaction->mode === 'card')
                                                        <td>Par carte</td>
                                                    @elseif ($order->transaction->mode === 'paypal')
                                                        <td>Par Paypal</td>
                                                    @else
                                                        <td>Par Paygate</td>
                                                    @endif

                                                </tr>
                                                <tr>
                                                    <th>Status</th>

                                                    @if ($order->transaction->status === 'approved')
                                                        <td>approuvé</td>
                                                    @elseif ($order->transaction->status === 'declined')
                                                        <td>décliné</td>
                                                    @elseif ($order->transaction->status === 'refunded')
                                                        <td>remboursé</td>
                                                    @else
                                                        <td>en attente</td>
                                                    @endif

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
