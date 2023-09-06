// Rimuovi qunatità
$(document).on('click', '.remove-item', function() {
    var announcementId = $(this).data('announcement-id');
    
    var $this = $(this);  // Conserva il riferimento all'elemento $(this)
    
    // Esegui una richiesta AJAX per rimuovere l'elemento dal carrello
    var csrfToken = $('input[name="_token"]').val();
    $.ajax({
        url: '/carrello/rimuovi/quantita/' + announcementId,
        type: 'POST',
        data: {
            _token: csrfToken
        },
        success: function(response) {
            if (response.success) {
                // Rimozione riuscita, aggiorna la visualizzazione del carrello (ad esempio, rimuovi l'elemento dalla lista)
                $this.closest('.cart-item').remove();  // Usa $this invece di $(this)
            } else {
                // Gestisci l'errore, ad esempio mostrando un messaggio all'utente
                alert('Errore durante la rimozione del prodotto dal carrello.');
            }
        },
        error: function() {
            // Gestisci eventuali errori nella richiesta AJAX
            alert('Si è verificato un errore nella richiesta AJAX');
        }
    });
    window.location.reload();
});


// Aumenta quantità
$(document).on('click', '.increase-quantity', function() {
    var announcementId = $(this).data('announcement-id');
    
    var $this = $(this);  // Conserva il riferimento all'elemento $(this)
    
    // Esegui una richiesta AJAX per aumentare la quantità del prodotto nel carrello
    var csrfToken = $('input[name="_token"]').val();
    $.ajax({
        url: '/carrello/aggiungi/quantita/' + announcementId,
        type: 'POST',
        data: {
            _token: csrfToken
        },
        success: function(response) {
            if (response.success) {
                // Aggiornamento riuscito, aggiorna la visualizzazione del totale del carrello
                $('.cart-total').text('€ ' + response.cartTotal);  // Aggiorna il totale del carrello nell'interfaccia utente

                // Aggiorna anche il prezzo su Stripe
                updateStripePrice(response.cartTotal); // Chiamata a una funzione per aggiornare il prezzo su Stripe
            } else {
                // Gestisci l'errore, ad esempio mostrando un messaggio all'utente
                alert("Errore durante l'aumento della quantità del prodotto nel carrello.");
            }
        },
        error: function() {
            // Gestisci eventuali errori nella richiesta AJAX
            alert('Si è verificato un errore nella richiesta AJAX');
        }
    });
    window.location.reload();
});