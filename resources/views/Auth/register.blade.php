<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MAPONAMI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/voting-box.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">



    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">

    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

    <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        <div class="entete">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Maonami</h2>
                            <p>Enregistrement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="formulaire align-items-center w-5">

        <form action="" class="p-5" method="POST">
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

</html>
