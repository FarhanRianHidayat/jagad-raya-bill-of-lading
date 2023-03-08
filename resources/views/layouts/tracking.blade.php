<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--fonts google   --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- style --}}
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    {{-- <link rel="stylesheet" href="resources/css/style.css"> --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/tracking.css') !!}">
    {{-- <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet"> --}}

    {{-- Logo --}}
    <link rel="icon" href="assets/img/logojagad2.png">

    <title>Shipment & Container Tracking</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.jpeg" alt="" width="30" class="d-inline-block align-text-top me-3">Jagad
                Raya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#jasa">Information</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/#contact">Contact</a>
                    </li>


                </ul>

                {{-- <div>
                    <a href="/register" class="btn btn-primary {{ Request::is('login') ? 'active' : '' }}">Daftar</a>
                <a href="/login" class=" btn btn-light {{ Request::is('login') ? 'active' : '' }}"> Login</a>
            </div> --}}
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        @can('admin')
                        <a class="dropdown-item" href="/dashboardadmin"><i
                                class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>

                        <hr class="dropdown-divider">

                        @endcan
                        @can('employee')
                        <a class="dropdown-item" href="/dashboardemployee"><i
                                class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>

                        <hr class="dropdown-divider">

                        @endcan
                        @can('user')
                        <a class="dropdown-item" href="/track"><i
                                class="bi bi-layout-text-sidebar-reverse"></i>Track</a>

                        <hr class="dropdown-divider">

                        @endcan

                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                                Logout</button>
                        </form>
                    </div>
                    {{-- <img c/lass="img-profile rounded-circle" src="/assets/img/undraw_profile.svg"> --}}

                </li>
                @else
                <li class="nav-item">
                    <a href="/register" class="btn btn-primary {{ Request::is('login') ? 'active' : '' }}">Daftar</a>
                </li>
                <li class="nav-item1">
                    <a href="/login" class=" btn btn-light {{ Request::is('login') ? 'active' : '' }}"> Login</a>
                </li>
                @endauth
            </ul>

        </div>
        </div>
    </nav>
    {{-- content --}}

    <div class="container">
        <div class="content">
            <div class="atas">
                @foreach ($shipment as $row)
                <h6><b>Tracking Number: {{ $row->bolnumber }}</b>
                @endforeach
                </h6>
                <div class="row">
                    <div class="col-4">
                        <h6><b>Shipping Date</b></h6>
                        <div class="kotak-dalam">
                            @foreach ($shipment as $row)
                            <h6>{{ $row->shipping_date->format('l') }}</h6>
                            <p>{{ $row->shipping_date->format('d F Y') }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6">
                        <h6><b>Status</b></h6>
                        <div class="kotak-dalam-2">
                            @foreach ($shipment as $row)
                            <h6><b>{{ $row->status }}</b></h6>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="bawah">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed border-opacity-10" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <h6>
                                    <b>Order Details</b>
                                </h6>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p>Order Date: </p>
                                        <p>Ship Date: </p>
                                        <p>Shipping Address: </p>
                                        <p>Destination: </p>
                                        <p>Carrier: </p>
                                    </div>
                                    <div class="col-6">
                                        @foreach ($shipment as $row)
                                        <p>{{ $row->transport->date->format('d F Y') }}</p>
                                        <p>{{ $row->shipping_date->format('d F Y') }}</p>
                                        <p>{{ $row->transport->shipping_address }}</p>
                                        <p>{{ $row->transport->finaldestination }}</p>
                                        <p>{{ $row->good->description }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="bawah-button">
                <a href="{{route('pdf-report')}}" type="button" class="btn btn-primary">Export PDF</a>
            </div> --}}
        </div>
    </div>


    <footer class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-flex align-items-center">
                        <img src="assets/img/logo.jpeg" alt="">
                        <a href="#" class="ms-3">Jagad Raya</a>
                    </div>
                    <div class="col-md-5 d-flex  justify-content-evenly">
                        <a href="#hero">Home</a>
                        <a href="#jasa">Information</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a>
                    </div>
                </div>
                <div class="row copyright start-50">
                    <center>
                        <div class="col-12">
                            <p>© 2023 Jagad Raya Logistik All Rights Reserved
                            </p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="cariModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="/tracking" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control"
                        aria-describedby="passwordHelpInline" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
