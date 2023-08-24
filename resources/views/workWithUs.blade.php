<x-layout>

    <div class=" formUnisciti container my-5">
        <div class="row p-5">
            <div class="mb-3">
                <h5 class="fs-6 text-center text-arancio mt-5">{{__('ui.work')}}</h5>
                <h1 class="text-center mb-5">{{__('ui.sotto-work')}}</h1>
                <p class="lead">{{__('ui.para-work')}}</p>
            </div>
            <form class="mb-5" method="POST" action="{{route('revisor_become')}}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">{{__('ui.nome-u')}}</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{Auth::user()->name}}" readonly="readonly" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{Auth::user()->email}}" readonly="readonly" required>
                </div>
                <div class="mb-3">
                    <label for="textMessage" class="form-label">{{__('ui.why')}}</label>
                    <textarea class="form-control" name='body' id="textMessage" rows="10" required></textarea>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn-nicola fs-5 mt-5">{{__('ui.invia-n')}}</button>
                </div>
            </form>
        </div>
    </div>
    

    
</x-layout>


<x-offcanva></x-offcanva>