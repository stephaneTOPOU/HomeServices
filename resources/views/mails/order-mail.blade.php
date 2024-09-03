<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation des réservation</title>
</head>

<body>
    <p> Bonjour {{ $order->firstname }} {{ $order->lastname }} </p>
    <p>Votre réservation a été passée avec succès.</p>
    <br />

    <table style="width: 600px text-align:right">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>                
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset('assets/services') }}/{{ $item->service->image }}" width="100"
                            alt="{{ $item->service->name }}"></td>
                    <td>{{ $item->service->name }}</td>                    
                    <td>{{ $item->price }} FCFA</td>
                </tr>
            @endforeach
            {{-- <tr>
                <td colspan="3" style="border-top: 1px solid #ccc;"></td>
                <td style="font-size: 15px; font-weight: bold; border-top: 1px solid #ccc;">Sous-total :
                    {{ $order->subtotal }} FCFA</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold">Taxe : {{ $order->tax }} FCFA</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold">Livraison : Livraison gratuite</td>
            </tr> --}}
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px; font-weight: bold">Total : {{ $item->price  }} FCFA</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
