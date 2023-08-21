<x-layout>
    
    
    
    <div class="container bg-bianco p-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <h1 class="mb-5">Scrivi Newsletter</h1>

                @if (session('message_newsletter'))
                <div class="alert alert-success">
                    {{ session('message_newsletter') }}
                </div>
                @endif
                
                <form action="{{route('newsletter')}}" method="POST">
                    @method('POST')
                    @csrf

                    <textarea class="form-control mb-5" name="newsletter_body" id="newsletter_body" cols="80" rows="10" required></textarea>
                    
                    <button class="btn-nicola" type="submit">Invia a tutti</button>
                </form>
            </div>            
        </div>
    </div>
    
    
    
    
</x-layout>