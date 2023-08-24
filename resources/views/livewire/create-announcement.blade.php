<div class=" formAnnuncio container my-5">
    <div class="row bg-bianco p-5">
        <div class="mb-3">
            <h5 class="fs-6 text-center text-arancio mt-5">{{__('ui.cre-a')}}</h5>
            <h1 class="text-center mb-5">{{__('ui.crea-n')}}</h1>
            <p class="lead">{{__('ui.rea-n')}}</p>
        </div>

        <form wire:submit.prevent='store', "announcement">
    
            {{-- Conferma Caricamento - Nicola --}}
            @if (session('message_announcement'))
            <div class="alert alert-success">
                {{ session('message_announcement') }}
            </div>
            @endif
            
            
            @csrf
            
            {{-- Aggiunta Validazione - Nicola --}}
            <div class="mb-3">
                <label for="announcementTitle" class="form-label">{{__('ui.nam')}}</label>
                <input wire:model='title' type="text" class="form-control @error('title') is-invalid @enderror" id="announcementTitle">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="announcementDescription" class="form-label">{{__('ui.dep')}}</label>
                <textarea wire:model='description' id="announcementDescription" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror"></textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="announcementPrice" class="form-label">{{__('ui.pri')}}</label>
                <input wire:model='price'  type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="announcementPrice">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            {{-- Categorie - Nicola --}}
            
            <div class="mb-3">
                <label class="form-label" for='category'>{{__('ui.cat1')}}</label>
                <select wire:model.defer="category" id="category" class="form-control @error('category') is-invalid @enderror">
                    <option>{{__('ui.scegli-cat')}}</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>   
                    @endforeach
                </select>
                @error('category')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for='category'>{{__('ui.insert')}}</label>
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
                                    <button class="btn btn-danger shadow d-block text-center mt-2 mx-auto" type="button" wire:click="removeImage({{$key}})">{{__('ui.CA')}}</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn-nicola fs-5 mt-5 text-nero">{{__('ui.CARI')}}</button>
            </div>
        </form>
    </div>
</div>
