<form wire:submit.prevent='store'>
    
    {{-- Conferma Caricamento - Nicola --}}
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    
    @csrf
    
    {{-- Aggiunta Validazione - Nicola --}}
    <div class="mb-3">
        <label for="announcementTitle" class="form-label">Nome annuncio</label>
        <input wire:model='title' type="text" class="form-control @error('title') is-invalid @enderror" id="announcementTitle">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="announcementDescription" class="form-label">Descrizione</label>
        <textarea wire:model='description' id="announcementDescription" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror"></textarea>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="announcementPrice" class="form-label">Prezzo</label>
        <input wire:model='price'  type="number" class="form-control @error('price') is-invalid @enderror" id="announcementPrice">
        @error('price')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>