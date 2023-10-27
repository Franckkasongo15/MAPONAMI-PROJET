@extends('admin.base')

@section('title', 'Nouveau candidat')

@section('content')
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.dash.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Options</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="{{route('admin.dash.register')}}">Nouveau candidat</a>
                        <a class="collapse-item" href="#">Supprimer Candidat</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- ICI POUR LES CANDIDATURES -->
                            <a class="nav-link " href="#" id="alertsDropdown" target="_blank"
                                aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                        </li>
                        <!-- Dropdown - Alerts -->



                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#"
                                target="_blank" id="messagesDropdown" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="Admin/dashboard/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Engrestriment candidat</h1>

                        @if (session('success'))
                            <span class="alert alert-success"> s{{ session('success') }}</span>
                        @endif
                    </div>

                    <!-- Content Row -->

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <div class="page-wrapper font-poppins">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4">
                        <div class="card-body">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row row-space">
                                        <div class="col-5">
                                            <div class="input-group">
                                                <label class="label">Prenom</label>
                                                <input class="input--style-4" type="text" name="prenom" required>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="input-group">
                                                <label class="label">Pseudo</label>
                                                <input class="input--style-4" type="text" name="pseudo" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-space">
                                        <div class="col">
                                            <div class="input-group">
                                                <label class="label">Nom de famille</label>
                                                <input class="input--style-4" type="text" name="name" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-space">
                                        <div class="col-5">
                                            <div class="input-group">
                                                <label class="label">Genre</label>
                                                <div class="p-t-10">
                                                    <label class="radio-container m-r-45">Homme
                                                        <input type="radio" checked="checked" value="homme"
                                                            name="genre" required>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-container">Femme
                                                        <input type="radio" value="femme" name="genre" required>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-space">


                                        <div class="col">
                                            <div class="input-group">
                                                <label class="label">Photo</label>
                                                <br />

                                                <input type="file" name="image" class="image" required>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row row-space">
                                        <div class="col-6">
                                            <div class="input-group">
                                                <label class="label">Email</label>
                                                <input class="input--style-4" type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group">
                                                <label class="label">Phone Number</label>
                                                <input class="input--style-4" type="text" name="phone" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="filiere">
                                                <option disabled="disabled" selected="selected">Filiere</option>
                                                <option value="L1">Licence 1</option>
                                                <option value="L2">Licence 2</option>
                                                <option value="L3">Licence 3</option>
                                                <option value="L4">Licence 4</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>

                                    <div class="row row-space">
                                        <div class="col">
                                            <div class="input-group">
                                                <label class="label">Motivation</label>
                                                <input class="input--style-4" type="text" name="motivation"
                                                    required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row row-space">
                                        <div class="col">
                                            <div class="input-group">
                                                <label class="label">Slogan</label>
                                                <input class="input--style-4" type="text" name="slogan" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="p-t-15">
                                        <button class="btn btn--radius-2 btn--blue" type="submit">Enregister</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Maponami 2023</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->



        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{route('auth.logout')}}">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="Admin/registerForm/vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="Admin/registerForm/vendor/select2/select2.min.js"></script>
        <script src="Admin/registerForm/vendor/datepicker/moment.min.js"></script>
        <script src="Admin/registerForm/vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="Admin/registerForm/js/global.js"></script>



        <!-- Bootstrap core JavaScript-->
        <script src="Admin/dashboard/vendor/jquery/jquery.min.js"></script>
        <script src="Admin/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="Admin/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="Admin/dashboard/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="Admin/dashboard/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="Admin/dashboard/js/demo/chart-area-demo.js"></script>
        <script src="Admin/dashboard/js/demo/chart-pie-demo.js"></script>
    </div>
</body>
@endsection

