{{-- <x-layout>
    <h1>Registrati</h1>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="userName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="userPassword">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </section>
</x-layout> --}}

<x-layout>
    
    
    {{-- nuovo form --}}
    
    <div class="container bg-bianco">
        <div class="container">
            <div class="row justify-content-center">
                <div class="main  my-5">  	
                    <input class="input_login" type="checkbox" id="chk" aria-hidden="true">
                    
                    <div class="signup">
                        <form enctype="multipart/form-data" method="POST" action="{{route('register')}}" >
                            @csrf
                            <label class="label_login" for="chk" aria-hidden="true">{{__('ui.REG')}}</label>
                            <input class="input_login" type="text" name="name" placeholder="Nome *" >
                            @error('name')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="text" name="surname" placeholder="Cognome" >
                            @error('surname')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="text" name="address" placeholder="Indirizzo">
                            @error('address')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="number" name="phone" placeholder="Cellulare">
                            @error('phone')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="email" name="email" placeholder="Email *" >
                            @error('email')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="password" name="password" placeholder="Password *" >
                            @error('password')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input class="input_login" type="password" name="password_confirmation" placeholder="Conferma Password *" >
                            @error('password_confirmation')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            <input type="file" name="img_profile" accept="image/*" class="form-control img_register " />
                            @error('img_profile')
                            <p class="text-danger mt-2 ms-4">{{$message}}</p>
                            @enderror
                            
                            <button class="button_login" type="submit">{{__('ui.REG')}}</button>
                        </form>
                    </div>
                    
                    <div class="login">
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <label class="label_login" for="chk" aria-hidden="true">{{__('ui.ACC')}}</label>
                            <input class="input_login" type="email" name="email" placeholder="Email" required="">
                            <input class="input_login" type="password" name="password" placeholder="Password" required="">
                            <button class="button_login" type="submit">{{__('ui.ACC')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    {{-- fine nuovo form --}}
    <x-offcanva></x-offcanva>
</x-layout>