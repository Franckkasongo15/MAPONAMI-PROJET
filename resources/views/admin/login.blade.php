<!doctype html>
<html lang="en">

<head>
    <title>Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('assets/img/voting-box.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset("Admin/login/css/style.css")}}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">

                    <div class="login-wrap p-4 p-md-5">

                        <h3 class="text-center mb-4">Admin</h3>
                        @error('email')
                            <h6 class="alert alert-danger mb-2">{{ $message }}</h6>
                        @enderror
                        @error('notfound')
                            <h6 class="alert alert-danger mb-2">{{ $message }}</h6>
                        @enderror

                        <form action="" class="login-form" method="post">


                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" name="email"
                                    placeholder="XXXXX@esisalama.org" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" name="password"
                                    placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Se
                                    connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
