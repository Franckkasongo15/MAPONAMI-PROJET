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
                            <p>Enregistrement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="formulaire align-items-center w-5">

        <form action="/auth/register" class="p-5" method="POST">
            @error('email')
                {{ $message }}
            @enderror
            @csrf
            <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control" placeholder="Nom complet" name="name">
            </div>
            <div class="form-group mx-sm-2 mb-2">
                <input type="email" class="form-control" placeholder="xxxxxx@esisalama.org" name="email">
            </div>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="promotion">
                    <option disabled="disabled" selected="selected">Filiere</option>
                    <option value="L1">Licence 1</option>
                    <option value="L2">Licence 2</option>
                    <option value="L3">Licence 3</option>
                    <option value="L4">Licence 4</option>
                </select>
                <div class="select-dropdown"></div>
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button class=" button btn btn-primary mb-2">
                Enregister
            </button>
        </form>
    </div>

</body>

@endsection
