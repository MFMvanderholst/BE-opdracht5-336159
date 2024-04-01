<link rel="stylesheet" href="{{ asset('css/supplier.css') }}">

<main>
    <div>   
        <h3>Leverancier Details</h3>
    </div>
    <div>
        <table class="table">
            <tr class="head">
                <th>Naam</th>
                <th>Contactpersoon</th>
                <th>Leveranciernummer</th>
                <th>Mobiel</th>
                <th>Straatnaam</th>
                <th>Huisnummer</th>
                <th>Postcode</th>
                <th>Stad</th>
            </tr>
            
            @foreach ( $result as $supplier)
            <tr class="tail">
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact_person }}</td>
                <td>{{ $supplier->supplier_number }}</td>
                <td>{{ $supplier->mobile }}</td>
                <td>{{ $supplier->street }}</td>
                <td>{{ $supplier->streetnumber }}</td>
                <td>{{ $supplier->zip }}</td>
                <td>{{ $supplier->city }}</td>
            </tr>
            @endforeach
        </table>
        <a href="/suppliers/{{ $supplier->id }}/edit"><button>Wijzig</button></a>
        <div>
            <a href="/suppliers"><button>terug</button></a>
            <a href="/"><button>home</button></a>
        </div>
    </div>
</main>