<link rel="stylesheet" href="{{ asset('css/supplier.css') }}">

<main>
    <div>   
        <h3>Leverancier Details</h3>
    </div>
    <div>
        <form action="">
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
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                @endforeach
            </table>
            <a href=""><button>Wijzig</button></a>
        </form>
        
        <div>
            <a href="/suppliers"><button>terug</button></a>
            <a href="/"><button>home</button></a>
        </div>
    </div>
</main>