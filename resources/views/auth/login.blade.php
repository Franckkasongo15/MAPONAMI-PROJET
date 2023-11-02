@extends('Auth.base')

@section('content')

    <body>
    <div>
        <div class="entete">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Maponami</h2>
                            <p>Connexion</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="formulaire align-items-center w-5">

        <form action="/auth/login" class="p-5" method="post">
            @error('email')
                {{ $message }}
            @enderror
            <a href="{{route('auth.register')}}">S'enregistrer ?</a>
            @csrf
            <div class="form-group mx-sm-2 mb-2">
                <input type="email" class="form-control" placeholder="xxxxxx@esisalama.org" name="email">
            </div>
            @error('password')
                {{ $message }}
            @enderror
            <div class="form-group mx-sm-2 mb-2">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>

            <button class="button btn btn-primary mb-2">
                Connection
            </button>
            <!--
                <button class="btn btn-primary">
                    Connect
                </button>
            -->
        </form>
    </div>

</body>

@endsection
