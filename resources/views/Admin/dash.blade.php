<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('assets/img/voting-box.png') }}" rel="icon">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="Admin/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Admin/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/adminDash">
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
                        <a class="collapse-item" href="/registerUser">Nouveau candidat</a>
                        <a class="collapse-item" href="utilities-border.html">Supprimer Candidat</a>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

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
                            <a class="nav-link " href="google.com" id="alertsDropdown" target="_blank"
                                aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="google" target="_blank" id="messagesDropdown"
                                aria-expanded="false">
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

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statisques Licence 1 </h6>
                                </div>
                                <div class="card-body">

                                    @foreach ($l1_infos as $info_candidats)
                                        @foreach ($info_candidats as $key)
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="img-profile rounded-circle"
                                                        src="img_user/{{ $key['photo'] }}" width=50 alt="">
                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                <div class="font-weight-bold">
                                                    {{ ucwords($key['name']) }}
                                                </div>
                                            </a>
                                            <h4 class="small font-weight-bold">{{ $key['vote_number'] }} /
                                                {{ 50 }} <span
                                                    class="float-right">{{ ($key['voter_number'] * 100) / 50 }}%</span>
                                            </h4>

                                            <div class="progress mb-4">
                                                <div class="progress-bar
                                                bg-danger"
                                                    role="progressbar"
                                                    style="width: {{ ($key['voter_number'] * 100) / 50 }}%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <hr>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statisques Licence 2 </h6>
                                </div>


                                <div class="card-body">

                                    @foreach ($l2_infos as $info_candidats)
                                        @foreach ($info_candidats as $key)
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="dropdown-list-image mr-3">
                                                    <img class="img-profile rounded-circle"
                                                        src="img_user/{{ $key['photo'] }}" width=50 alt="">
                                                    <div class="status-indicator bg-success"></div>
                                                </div>
                                                <div class="font-weight-bold">
                                                    {{ ucwords($key['name']) }}
                                                </div>
                                            </a>
                                            <h4 class="small font-weight-bold"> {{ $key['voter_number'] }} / 200
                                                <span
                                                    class="float-right">{{ ($key['voter_number'] * 100) / 200 }}</span>
                                            </h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar
                                                bg-danger"
                                                    role="progressbar"
                                                    style="width: {{ ($key['voter_number'] * 100) / 200 }}%"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <hr>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statisques Licence 3 Genie log </h6>
                                </div>
                                <div class="card-body">

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Nom du candidat
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold">35/50<span
                                            class="float-right">{{ (35 * 100) / 50 }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ (35 * 100) / 50 }}%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <hr>

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Mathieu Nebra
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold">40/400<span
                                            class="float-right">{{ (40 * 100) / 400 }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: {{ (40 * 100) / 400 }}%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <hr>

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Graven ...
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold"> <span class="float-right">Complete!</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Statisques Licence 3 As </h6>
                                </div>
                                <div class="card-body">

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Nom du candidat
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold">35/50<span
                                            class="float-right">{{ (35 * 100) / 50 }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ (35 * 100) / 50 }}%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <hr>

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Mathieu Nebra
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold">40/400<span
                                            class="float-right">{{ (40 * 100) / 400 }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: {{ (40 * 100) / 400 }}%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <hr>

                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="img-profile rounded-circle"
                                                src="assets/img/blog/thumbnail/1691696945-R (1).jpg" width=50
                                                alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            Graven ...
                                        </div>
                                    </a>

                                    <h4 class="small font-weight-bold">230/400<span class="float-right">230</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>
