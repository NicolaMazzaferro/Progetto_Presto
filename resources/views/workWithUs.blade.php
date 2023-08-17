<x-layout>

    <h1 class="text-center my-5">LAVORA CON NOI</h1>

    <form class="d-flex flex-column align-items-center justify-content-center my-5" method="POST" action="{{route('revisor_become')}}">
        @csrf
        <div class="mb-3 w-50">
            <label for="username" class="form-label">Nome</label>
            <input type="text" name="username" class="form-control" id="username" required>
        </div>
        <div class="mb-3 w-50">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3 w-50">
            <label for="textMessage" class="form-label">Inserisci testo</label>
            <textarea class="form-control" name='body' id="textMessage" rows="10"></textarea>
        </div>
            
        
        <button type="submit" class="btn bg-arancio fs-4 mt-5">Invia Candidatura</button>
    </form>
    
</x-layout>