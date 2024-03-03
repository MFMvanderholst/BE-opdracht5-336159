<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<main>
    <div>   
        <h3>Geleverde producten</h3>
    </div>
    <div>   
        <p>Naam Leverancier: {{ $supplier['name'] }}</p>
        <p>Contactpersoon: {{ $supplier['contact_person'] }}</p>
        <p>Leverancier nr: {{ $supplier['supplier_number'] }}</p>
        <p>Mobiel: {{ $supplier['mobile'] }}</p>
    </div>
    <div>
        <table>
            <tr>
                <th>Naam Product</th>
                <th>Aantal in Magazijn</th>
                <th>Verpakkingseenheid</th>
                <th>Laatste levering</th>
                <th>Nieuwe levering</th>
            </tr>
           
            
               @if (empty($result))
                    <td colspan="5">Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin</td>
                @else
                @foreach ( $result as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->number_present }}</td>
                    <td>{{ $product->packaging_unit }}</td>
                    <td>{{ $product->date_delivery }}</td>
                    <td><a href="">+</a></td>
                    @endforeach
                </tr>
                @endif
            
            
            
        </table>
    </div>
</main>