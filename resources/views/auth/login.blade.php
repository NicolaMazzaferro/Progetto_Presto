<x-layout>
    {{-- <h1>Accedi</h1>
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="userPassword">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Accedi</button>
                    </form>
                </div>
            </div>
        </section> --}}
        
        {{-- <section class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 my-5 mb-5">
                    
                    <div class="box">
                        <span class="borderLine"></span>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <h2>ACCEDI</h2>
                            <div class="inputBox">
                                <input type="text" name="email" required="required">
                                <span>Email</span>
                                <i></i>
                            </div>
                            <div class="inputBox">
                                <input type="password" name="password" required="required">
                                <span>Password</span>
                                <i></i>
                            </div>
                            <div class="Links">
                                <a href="{{route('register')}}">Registrati</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Accedi</button>
                        </form>
                    </div>
                    
                </div>
                
            </div>
            
        </section> --}}
        
        
        
{{-- nuovo form --}}

<div class="container wrapper-register">
    <div class="row justify-content-center">
        <div class="main">  	
            <input class="input_login" type="checkbox" id="chk" aria-hidden="true">
            
            <div class="signup">
                <form method="POST" action="{{route('register')}}" >
                    @csrf
                    <label class="label_login" for="chk" aria-hidden="true">{{__('ui.REG')}}</label>
                    <input class="input_login" type="text" name="name" placeholder="Nome" required="">
                    <input class="input_login" type="text" name="surname" placeholder="Cognome" required="">
                    <input class="input_login" type="text" name="address" placeholder="Indirizzo">
                    <input class="input_login" type="text" name="phone" placeholder="Cellulare">
                    <input class="input_login" type="email" name="email" placeholder="Email" required="">
                    <input class="input_login" type="password" name="password" placeholder="Password" required="">
                    <input class="input_login" type="password" name="password_confirmation" placeholder="Conferma Password" required="">
                    <input type="file" wire:model="temporary_images" name="img_profile" class="form-control img_register @error('temporary_images.*') is-invalid @enderror" placeholder="Foto Profilo" />
                    @error('temporary_images.*')
                        <p class="text-danger mt-2">{{$message}}</p>
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

{{-- fine nuovo form --}}
        
<x-offcanva></x-offcanva>
        
    </x-layout>