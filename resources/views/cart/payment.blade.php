<x-layout>
    
    <div class="container bg-bianco form-control p-5 text-center border border-2 border-warning">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger" id="alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <div class="row">
            <h1 class="text-center text-arancio p-5">Completa Acquisto</h1>
            <div class="col-12 d-flex justify-content-center">
                <form id="payment-form" class="w-25">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">
                            Inserisci i dati della tua carta di pagamento:
                        </label>
                        <div id="card-element" class="mt-5 border border-1 border-warning p-2">
                            <!-- Un div in cui Stripe inserirà il widget di input della carta -->
                        </div>
                    </div>
                    
                    <!-- Elemento per visualizzare gli errori -->
                    <div id="card-errors" class="mt-3 text-danger" role="alert"></div>
                    
                    <button type="submit" class="mt-5 btn-nicola">Paga</button>
                </form>
            </div>
        </div>
    </div>
    
    <script>document.addEventListener("DOMContentLoaded", function () {
        var stripe = Stripe('pk_test_51NlKTcGieHGStUD4BqsbmZJtBFyPitNSubOKGrPnKC9xVRxLieF8zB8Q6aiNqQ3tTPLBG0Fw7aXiygxA0TAfAhWI00QQ6VL0Uq');
        // Crea un elemento di input della carta
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        
        
        // Aggiungi l'elemento di input della carta al tuo form
        cardElement.mount('#card-element');
        
        var form = document.getElementById('payment-form');
        var card = elements.getElement('card');
        
        
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            
            stripe.createPaymentMethod({
                type: 'card',
                card: card,
            }).then(function (result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var paymentMethodId = result.paymentMethod.id;
                    var csrfToken = $('input[name="_token"]').val();
                    
                    $.ajax({
                        url: '/carrello/checkout',
                        method: 'POST',
                        data: {
                            paymentMethodId: paymentMethodId,
                            _token: csrfToken,
                        },
                    }).then(function (response) {
                        if (response.success) {
                            // Reindirizza l'utente alla pagina desiderata
                            window.location.href = '/carrello';
                        }  else {
                            // Il pagamento non è andato a buon fine, mostra un messaggio Flash
                            window.location.href = '/carrello/pagamento';
                            var errorMessage = response.message;
                            var errorDiv = document.createElement('div');
                            errorDiv.textContent = errorMessage;
                            errorDiv.classList.add('alert', 'alert-danger'); 
                        }
                    }).catch(function (error) {
                        // Gestisci gli errori della richiesta AJAX
                        var errorDiv = document.createElement('div');
                        errorDiv.textContent = 'Si è verificato un errore nella richiesta AJAX: ' + error.statusText;
                        errorDiv.classList.add('alert', 'alert-danger'); 
                    });
                }
            });
        });
    });</script>
    
</x-layout>

<x-offcanva></x-offcanva>