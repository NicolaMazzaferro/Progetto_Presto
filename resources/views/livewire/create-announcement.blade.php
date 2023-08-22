<div class=" formAnnuncio container my-5">
    <div class="row bg-bianco p-5">
        <div class="mb-3">
            <h5 class="fs-6 text-center text-arancio mt-5">// CREA ANNUNCIO</h5>
            <h1 class="text-center mb-5">Crea il tuo Annuncio</h1>
            <p class="lead">Realizza il tuo annuncio straordinario con noi! Sfrutta il potere della creatività e della visibilità offerta dalla nostra piattaforma. Compila il modulo e dai vita al tuo annuncio, raggiungendo un vasto pubblico di potenziali interessati. Metti in risalto ciò che rende unico ciò che offri. Inizia oggi stesso a creare connessioni durature attraverso il tuo annuncio!</p>
        </div>

        <form wire:submit.prevent='store'>
    
            {{-- Conferma Caricamento - Nicola --}}
            @if (session('message_announcement'))
            <div class="alert alert-success">
                {{ session('message_announcement') }}
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
                <input wire:model='price'  type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="announcementPrice">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            {{-- Categorie - Nicola --}}
            
            <div class="mb-3">
                <label class="form-label" for='category'>Categoria</label>
                <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                    <option>Scegli la categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>   
                    @endforeach
                </select>
                @error('category')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="file" wire:model="temporary_images" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img" />
                @error('temporary_images.*')
                    <p class="text-danger mt-2">{{$message}}</p>
                @enderror
            </div>
            @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>Anteprima</p>
                        <div class="row border border-4 border-info rounded shadow py-4">
                            @foreach ($images as $key => $image)
                                <div class="col my-3">
                                    <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                    <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">Cancella</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn-nicola fs-5 mt-5 text-nero">Crea</button>
            </div>
        </form>
    </div>
</div>
