@extends('admin.base')

@section('title', 'Chargement des etudiants')

@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Engrestriment Etudiants</h1>

            @if (session('success'))
                <span class="alert alert-success"> s{{ session('success') }}</span>
            @endif
        </div>

        <!-- Content Row -->

        <!-- Content Row -->


    </div>
    <!-- /.container-fluid -->

    </div>

    <div class="page-wrapper font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <div class="rs-select2 js-select-simple select--no-search">
                    <form method="POST" action="{{route('admin.dash.uploadUser')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <label class="label">fichier a importer</label>
                            <br />
                            <input type="file" name="file" id="file" required>
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

@endsection
