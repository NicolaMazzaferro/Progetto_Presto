<form wire:submit.prevent='store'>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @csrf
    <div class="mb-3">
        <label for="announcementTitle" class="form-label">Nome annuncio</label>
        <input wire:model='title'  type="text" class="form-control" id="announcementTitle">
    </div>
    <div class="mb-3">
        <label for="announcementDescription" class="form-label">Descrizione</label>
        <textarea wire:model='description' id="announcementDescription" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="announcementPrice" class="form-label">Prezzo</label>
        <input wire:model='price'  type="number" class="form-control" id="announcementPrice">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
</form>