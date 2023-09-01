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

</x-layout>

<x-offcanva></x-offcanva>