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
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $announcementId => $item)
                <tr>
                    <div class="cart-item">

                        <td>{{ $item['title'] }}</td>
                        <td>€ {{ $item['price']  }}</td>
                        <td>1</td>
                        <td>€ {{ $item['price'] }}</td>
                        <td><button class="remove-item" data-announcement-id="{{ $announcementId }}">Rimuovi</button></td>
                    </div>
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <div class="row d-inline">
            <span><a class="btn btn-primary" href="{{route('announcement_index')}}">Continua acquisti</a></span>
            <span><a class="btn btn-success" href="{{route('cart_payment')}}">checkout</a></span>
            <form action="{{route('cart_clear')}}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger" type="submit">Svuota Carrello</button>
            </form>
            @else
            <p>Il tuo carrello è vuoto.</p>
            @endif
        </div>

        </div>
    
</x-layout>


<x-offcanva></x-offcanva>