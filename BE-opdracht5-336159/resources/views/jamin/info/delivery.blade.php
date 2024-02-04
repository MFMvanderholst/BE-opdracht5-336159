<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<main>
    <div>   
        <h3>LeveringsInformatie</h3>
    </div>
    <div>   
        <p>Naam Leverancier: </p>
    </div>
    <div>
        <table>
            <tr>
                <th>Naam Product</th>
                <th>Datum laatste levering</th>
                <th>Aantal</th>
                <th>Eerst volgende levering</th>
            </tr>
            @foreach ( $data as $product)
            <tr>
                <td>{{ $product->product->name }}</td>
                <td>{{ $product->date_delivery }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->first_next_delivery }}</td>
            </tr>
            @endforeach
            
        </table>
    </div>
</main>