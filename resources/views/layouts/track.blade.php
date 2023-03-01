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
    {{-- <link rel="stylesheet" href="resources/css/style.css"> --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style2.css') !!}">
    {{-- <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet"> --}}
    
    {{-- Logo --}}
    <link rel="icon" href="assets/img/logojagad2.png">

    <title>Jagad Raya</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#jasa">Information</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">Contact</a>
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

    <div class="content">
        
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
                <div class="row position-absolute copyright start-50 translate-middle">
                    <div class="col-12">
                        <p>© 2023 Jagad Raya Logistik All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
