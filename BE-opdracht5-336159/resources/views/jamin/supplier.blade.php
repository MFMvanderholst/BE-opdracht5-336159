<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<main>
    <div>   
        <h3>Overzicht Leveranciers</h3>
    </div>
    <div>
        <table>
            <tr>
                <th>Naam</th>
                <th>Contactpersoon</th>
                <th>Leveranciernummer</th>
                <th>Mobiel</th>
                <th>Aantal verschillende producten</th>
                <th>Toon producten</th>
            </tr>
            
            @foreach ( $supplier as $supplier)
            
            
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->supplier_number }}</td>
                <td>{{ $supplier->mobile }}</td>
                <td>{{ $supplier->supplyproduct->count() }}</td>
                <td><a href="supplier/{{ $supplier->id }}"><img src="{{ URL::asset('img/questionmark_icon.png') }}" alt=""></a></td>
            </tr>
    
            @endforeach
            
        </table>
    </div>
</main>