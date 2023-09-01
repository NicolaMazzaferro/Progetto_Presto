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
                    <td>1</td> <!-- Quantità fissa a 1, puoi personalizzare questo -->
                    <td>€ {{ $item['price'] }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        {{-- <p class="text-end fw-bold pe-2">TOTALE € {{ ($totalAmount /10000) }}</p> --}}
        
        <form action="{{route('cart_checkout')}}" method="POST">
            @csrf
            <button type="submit">Paga</button>
        </form>
        @else
        <p>Il tuo carrello è vuoto.</p>
        @endif
    </div>
    
</x-layout>