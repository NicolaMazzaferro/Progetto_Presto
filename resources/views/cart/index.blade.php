<x-layout>
    
    <div class="container carrello p-5 text-center">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <h1 class="mb-5 text-arancio text-uppercase">Carrello</h1>
        
        @if (count($cart) > 0)
        <div class="table-responsive">
            <table class="table table-striped">
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
                            <td>{{ $item['quantity'] }}</td>
                            <td>€ {{ $item['price'] * $item['quantity'] }}</td>
                            <td>
                                <button class="remove-item btn btn-danger m-3" data-announcement-id="{{ $announcementId }}">Rimuovi</button>
                                <button class="increase-quantity btn btn-success" data-announcement-id="{{ $announcementId }}">Aggiungi</button>
                            </td>
                            @endforeach
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="text-center my-5">
            <span class="text-arancio fw-bold fs-5">Totale del Carrello: </span>
            <span class="fw-bold fs-5"> € {{ $cartTotal }}</span>
        </div>
        
        
        <div class="row d-inline text-center">
            <span><a class="btn btn-primary m-3 text-center" href="{{route('announcement_index')}}">Continua acquisti</a></span>
            <form action="{{route('cart_clear')}}" method="POST" class="d-inline text-center">
                @csrf
                <button class="btn btn-danger m-3 text-center" type="submit">Svuota Carrello</button>
            </form>
            <span><a class="btn btn-success m-3 text-center" href="{{route('cart_payment')}}">Pagamento</a></span>
            @else
            <p>Il tuo carrello è vuoto.</p>
            @endif
        </div>
        
    </div>
    
</x-layout>


<x-offcanva></x-offcanva>