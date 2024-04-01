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
                <th>Leverancier Details</th>
            </tr>
            
            @foreach ( $supplier as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->supplier_number }}</td>
                <td>{{ $supplier->mobile }}</td>
                <td><a href="/suppliers/{{ $supplier->id }}"><img src="{{ URL::asset('img/change.png') }}" alt=""></a></td>
            </tr>
            @endforeach
        </table>
        <a href="/"><button>home</button></a>
    </div>
</main>