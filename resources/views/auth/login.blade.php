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
    
    <section class="container">
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

    </section>
    
</x-layout>