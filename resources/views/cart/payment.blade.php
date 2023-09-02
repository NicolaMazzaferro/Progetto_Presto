<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <form id="payment-form">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">
                            Inserisci i dati della tua carta di pagamento:
                        </label>
                        <div id="card-element" class="mt-5">
                            <!-- Un div in cui Stripe inserirà il widget di input della carta -->
                        </div>
                    </div>
                
                    <!-- Elemento per visualizzare gli errori -->
                    <div id="card-errors" role="alert"></div>
                
                    <button type="submit" class="mt-5">Paga</button>
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
                    // Gestisci gli errori di validazione della carta
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Invia il PaymentMethod al tuo server Laravel
                    var paymentMethodId = result.paymentMethod.id;
                    // Esegui una richiesta AJAX al tuo controller Laravel per completare il pagamento
                    // Assicurati di includere il paymentMethodId nel payload della richiesta
        
                    var csrfToken = $('input[name="_token"]').val();
                    // Esempio di richiesta AJAX con jQuery:
                    $.ajax({
                        url: '/carrello/checkout', // Sostituisci con l'URL del tuo controller Laravel
                        method: 'POST',
                        data: {
                            paymentMethodId: paymentMethodId,
                            _token: csrfToken, // Aggiungi il token CSRF Laravel
                        },
                    }).then(function (response) {
                        // Gestisci la risposta dal tuo server (ad esempio, reindirizza all'URL di successo)
                        if (response.success) {
                            alert('Pagamento completato con successo');
                        } else {
                            alert('Errore durante il pagamento: ' + response.message);
                        }
                    }).catch(function (error) {
                        // Gestisci gli errori della richiesta AJAX
                        alert('Si è verificato un errore nella richiesta AJAX: ' + error.statusText);
                    });
                }
            });
        });
        });</script>

</x-layout>

<x-offcanva></x-offcanva>