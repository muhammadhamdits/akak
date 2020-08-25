<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End Css -->

    <title>Document</title>
</head>

<body>
    
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="card">
                    <div class="card-header text-center">
                        <button class="btn btn-sm btn-light float-left indeks kiri"><b><</b></button>
                        <b class="judul">{{ $judul }}</b>
                        <button class="btn btn-sm btn-light float-right indeks kanan"><b>></b></button>
                    </div>
                    <div class="card-body">
                        @yield('content')
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-sm btn-light float-left indeks kiri"><b><</b></button>
                        Copyright &copy 2020 <a target="_blank" href="https://github.com/muhammadhamdits">Hamdi</a>
                        <button class="btn btn-sm btn-light float-right indeks kanan"><b>></b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Js -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/datatables.min.js') }}"></script>
    @yield('js')
    <!-- End Js -->

</body>

</html>