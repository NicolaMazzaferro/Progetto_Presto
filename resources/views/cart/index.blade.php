<x-layout>
    
    
    <div class="container">
        <h1 class="mb-5">Carrello</h1>
        
        @if (count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Prodotto</th>
                    <th>Prezzo</th>
                    <th>Quantità</th>
                    <th>Totale</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $productId => $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>€ {{ $item['price']  }}</td>
                    <td>1</td>
                    <td>€ {{ $item['price'] }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <div class="row d-inline">
            <span><a class="btn btn-primary" href="{{route('announcement_index')}}">Continua acquisti</a></span>

            <form action="{{route('cart_checkout')}}" method="POST" class="d-inline">
                @csrf
                <span><button class="btn btn-success" type="submit">Paga</button></span>
            </form>
            @else
            <p>Il tuo carrello è vuoto.</p>
            @endif
        </div>

        </div>
    
</x-layout>


<x-offcanva></x-offcanva>