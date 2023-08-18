<x-layout>

    <div class="container my-5">
        <div class="row bg-bianco p-5">
            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">// LAVORA CON NOI</h5>
                <h1 class="text-center mb-5">Invia la tua candidatura</h1>
                <p class="lead">Entra a far parte del nostro team di esperti revisori! Se sei appassionato di precisione e hai un occhio attento per i dettagli, compila il nostro semplice modulo per diventare un revisore. Contribuisci alla qualità dei nostri annunci e guadagna lavorando comodamente da casa tua. Unisciti a noi per rendere ogni annuncio un'esperienza straordinaria!</p>
            </div>
            <form class="mb-5" method="POST" action="{{route('revisor_become')}}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Nome</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="textMessage" class="form-label">Inserisci testo</label>
                    <textarea class="form-control" name='body' id="textMessage" rows="10"></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn-nicola fs-5 mt-5">Invia</button>
                </div>
            </form>
        </div>
    </div>
    

    
</x-layout>