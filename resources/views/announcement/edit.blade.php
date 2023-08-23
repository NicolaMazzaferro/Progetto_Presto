<x-layout>

    <x-offcanva></x-offcanva>
    
    <h1 class="text-center mt-5">{{__('ui.ads')}}</h1>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if($announcement->user_id == Auth::id())
    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('announcement_update', compact('announcement'))}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">{{__('ui.title')}}</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$announcement->title}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">{{__('ui.dep')}}</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{$announcement->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{__('ui.pri')}}</label>
                    <input type="number" name="price" class="form-control" id="price" value="{{$announcement->price}}">
                </div>
                
                <div class="text-center">
                    <button class="btn btn-light w-25 fs-5" type="submit">{{__('ui.CARI')}}</button>
                </div>
                
                
            </form>
        </div>
    </div>
    @else
    <h2>{{__('ui.non-puoi')}}</h2>
    @endif
    
    
</x-layout>