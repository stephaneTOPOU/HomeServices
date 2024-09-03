<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Dashbord</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Dashbord</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="content">
                        <style>
                            .content {
                                padding-top: 40px;
                                padding-bottom: 40px;
                            }
                    
                            .icon-stat {
                                display: block;
                                overflow: hidden;
                                position: relative;
                                padding: 15px;
                                margin-bottom: 1em;
                                background-color: #fff;
                                border-radius: 4px;
                                border: 1px solid #ddd;
                            }
                    
                            .icon-stat-label {
                                display: block;
                                color: #999;
                                font-size: 13px;
                            }
                    
                            .icon-stat-value {
                                display: block;
                                font-size: 28px;
                                font-weight: 600;
                            }
                    
                            .icon-stat-visual {
                                position: relative;
                                top: 22px;
                                display: inline-block;
                                width: 32px;
                                height: 32px;
                                border-radius: 4px;
                                text-align: center;
                                font-size: 16px;
                                line-height: 30px;
                            }
                    
                            .bg-primary {
                                color: #fff;
                                background: #d74b4b;
                            }
                    
                            .bg-secondary {
                                color: #fff;
                                background: #6685a4;
                            }
                    
                            .icon-stat-footer {
                                padding: 10px 0 0;
                                margin-top: 10px;
                                color: #aaa;
                                font-size: 12px;
                                border-top: 1px solid #eee;
                            }
                        </style>
                    
                        @php
                            function pretty_number(int $n): string
                            {
                                $prettyN = $n;
                                $suffix = '';
                                $len = strlen((string) $n);
                                $suffixes = ['K', 'M'];
                                foreach ($suffixes as $s) {
                                    if ($n < 1000) {
                                        break;
                                    }
                                    $suffix = $s;
                                    $n = $n / 1000;
                                    $prettyN = number_format($n, 1);
                                }
                                return $prettyN . $suffix;
                            }
                        @endphp
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="icon-stat-label">Coût total</span>
                                                <span class="icon-stat-value">@php echo pretty_number(($totalCost))@endphp</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <i class="fa fa-dollar icon-stat-visual bg-primary"></i>
                                            </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                            <i class="fa fa-clock-o"></i> Mis à jour maintenant
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="icon-stat-label">Services totaux</span>
                                                <span class="icon-stat-value">{{ $totalPurchase }}</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                            <i class="fa fa-clock-o"></i> Mis à jour maintenant
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="icon-stat-label">Services effectués</span>
                                                <span class="icon-stat-value">@php echo pretty_number(($totalDeliver))@endphp</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                            <i class="fa fa-clock-o"></i> Mis à jour maintenant
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="icon-stat">
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="icon-stat-label">Total annulé</span>
                                                <span class="icon-stat-value">{{ $totalCancel }}</span>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <i class="fa fa-gift icon-stat-visual bg-secondary"></i>
                                            </div>
                                        </div>
                                        <div class="icon-stat-footer">
                                            <i class="fa fa-clock-o"></i> Mis à jour maintenant
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Dernière(s) commande(s)
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        {{-- <th>Sous-Total</th>
                                                        <th>Rabais</th>
                                                        <th>Tax</th> --}}
                                                        <th>Total</th>
                                                        <th>Nom</th>
                                                        <th>Prénom</th>
                                                        <th>Téléphone</th>
                                                        <th>E-mail</th>                                    
                                                        <th>Status</th>
                                                        <th>Date de la transaction</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>{{ $order->id }}</td>
                                                            {{-- <td>{{ $order->subtotal }} FCFA</td>
                                                            <td>{{ $order->discount }} FCFA</td>
                                                            <td>{{ $order->tax }} FCFA</td> --}}
                                                            <td>{{ $order->total }} FCFA</td>
                                                            <td>{{ $order->lastname }}</td>
                                                            <td>{{ $order->firstname }}</td>
                                                            <td>{{ $order->mobile }}</td>
                                                            <td>{{ $order->email }}</td>                                        
                                                            <td>{{ $order->status }}</td>
                                                            <td>{{ $order->created_at }}</td>
                                                            <td><a href="{{ route('customer.orderdetails', ['order_id' => $order->id]) }}"
                                                                    class="btn btn-info btn-sm">Détails</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
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

