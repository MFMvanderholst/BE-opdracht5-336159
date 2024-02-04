<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<main>
    <div>   
        <h3>Overzicht Magazijn Jamin</h3>
    </div>
    <div>
        <table>
            <tr>
                <th>Barcode</th>
                <th>Naam</th>
                <th>Verpakkingseenheid</th>
                <th>Aantalaanwezig</th>
                <th>Allergenen Info</th>
                <th>Leverantie Info</th>
            </tr>
            @foreach ( $data as $product)
            @if ($product->stockroom)
            <tr>
                <td>{{ $product->barcode }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stockroom->packaging_unit }}</td>
                <td>{{ $product->stockroom->number_present }}</td>
                <td><a href=""><img src="{{ URL::asset('img/cross.png') }}" alt=""></a></td>
                <td><a href="{{ url('/delivery') }}"><img src="{{ URL::asset('img/questionmark_icon.png') }}" alt=""></a></td>
            </tr>
            @endif
            @endforeach
            
        </table>
    </div>
</main>