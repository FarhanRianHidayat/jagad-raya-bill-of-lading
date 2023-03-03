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
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    {{-- <link href="/assets/css/sb-admin-2.min.css" rel="stylesheet"> --}}

    {{-- responsive --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/responsive.css') !!}">
    
    {{-- Logo --}}
    <link rel="icon" href="assets/img/logojagad2.png">

    <title>Jagad Raya</title>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light position-fixed bg-light w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <li class="nav-item1">
                            <a href="/register" class="btn btn-primary {{ Request::is('login') ? 'active' : '' }}">Daftar</a>
                        </li>
                        <li class="nav-item2">
                    <a href="/login" class=" btn btn-light {{ Request::is('login') ? 'active' : '' }}"> Login</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Layanan Pengiriman Cepat Untuk Kebutuhan Logistik Anda.</h1>
                    <p class="rp"><span class="fw-bold">Jagad Raya Logistik</span> dapat memberikan solusi logistik yang efisien
                        dan terintegrasi untuk memenuhi kebutuhan pelanggan.</p>

                    <button class="button-lg-primary">Mulai</button>
                    {{-- <a href="#"><img src="assets/img/arrow.png" alt=""></a> --}}
                </div>
            </div>

            <img src="assets/img/kapal.png" alt="" class="position-absolute end-0 bottom-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img h-100 position-absolute top-0 start-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img h-100 position-absolute end-0 bottom-0">
        </div>
    </section>

    {{-- Jasa --}}
    <section id="jasa">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Jasa Kami</h2>
                    <span class="sub-title">Kami menyediakan berbagai jenis jasa untuk membantu pergerakan barang dari
                        satu tempat ke tempat lainnya. <br>Kami memastikan barang sampai ke tujuan dengan tepat waktu
                        dan dalam kondisi yang baik. </span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Airport.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Angkutan Udara</h3>
                        <p class="mt-3">Kami menyediakan layanan angkutan udara, dengan jaringan agensi global dan
                            domestik.<br> Layanan mencakup Air Consolidation, Impor/Ekspor, DG Kargo, dan Door-to-Door.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Battleship.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Angkutan Laut</h3>
                        <p class="mt-3">Kami menyediakan layanan pengangkutan kargo laut dengan harga terjangkau.
                            <br>Layanan mencakup Export/Import Direct Console, FCL, DG Kargo, dan Layanan antar
                            Door-to-Door.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Truck.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Angkutan Trucking</h3>
                        <p class="mt-3">Kami menawarkan pilihan Kargo Trucking untuk pengiriman via jalur darat.<br>
                            Layanan mencakup Warehousing, Packing, Pick up, Delivery, dan Layanan distribusi kargo.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Around the Globe.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Bea Cukai</h3>
                        <p class="mt-3">Kami berpengalaman dalam menangani custom clearance kargo via udara/laut. <br>Layanan mencakup prosedur impor/ekspor, dokumen transit, dan dokumen
                            kepabeanan.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Warehouse.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Pergudangan</h3>
                        <p class="mt-3">Kami menyediakan layanan pergudangan.<br> Layanan mencakup pallet
                            in/out, penyimpanan jangka pendek/panjang, sistem kontrol persediaan barang, pemesanan,
                            kontrol persediaan, dan kontainer packing.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Give.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Project Handling</h3>
                        <p class="mt-3">Kami menyediakan layanan project handling.<br> Layanan mencakup perencanaan proyek untuk kargo besar/sulit, tim ahli, survei
                            lokasi, transportasi pabrik-lokasi, dan bantuan pemuatan dan penyimpanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Us --}}
    <div class="about-text">
        <h6>About Us</h6>
        <center>
            <hr>
        </center>
    </div>
    <section class="main1">
        <div class="main">
            <h1 style="font-size: 45px">
                LANDING PAGE <br />
                TEMPLATE
            </h1>
            <h5 style="font-size: 20px; padding-top: 20px">LOREM IPSUM TITLE</h5>
            <p style="padding-top: 10px;">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, facilis.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, molestiae.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
        </div>
        <div class="card-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque numquam harum neque exercitationem voluptatibus, quae rem qui, laudantium incidunt tempora iusto. Quibusdam, deleniti veritatis. Sunt quam voluptate eos fuga, perspiciatis quo eveniet culpa doloribus dolor nobis, commodi iusto nam nemo. Reiciendis iste nesciunt, minus quasi earum expedita eligendi doloremque eveniet aliquid itaque vitae ex, sint sequi iusto odit. Ad fuga dolores, magni repellat consequatur qui deleniti vel nulla architecto labore eum totam accusantium nemo assumenda enim? Sint numquam dignissimos aperiam.</p>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Punya <span>Pertanyaan?</span>
                            <br>Jangan sungkan untuk menghubungi kami
                            <br>Kami siap membantu 24 Jam.
                        </h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-4 d-flex align-items-center">
                                <div>
                                <img src="assets/img/Alamat.png" alt="">
                            </div>
                                <a href="https://goo.gl/maps/5uiRKqrowj98t11V9" target="_blank" class="location">GEDUNG PEMBINA GRAHA
                                    <br>Lt.3, Ruang 325 <br>
                                    Jl. DI. Panjaitan No.45, Rawa Bunga,<br>
                                    Jatinegara, Jakarta Timur 13350</a>
                            </div>

                            <div class="mb-4">
                                <img src="assets/img/Telephone.png" alt="">
                                <a href="tel:+02122895911" class="telephone">021-2289-5911</a>
                            </div>

                            <div class="mb-4">
                                <img src="assets/img/Email.png" alt="">
                                <a href="mailto: info@jagad-raya.com" class="email">info@jagad-raya.com</a>
                            </div>

                            <h6>Whatsapp</h6>
                            <div class="mb-4 d-flex align-items-center">
                            <a href="https://wa.me/628128327664?text=Halo%2C%20saya%20tertarik%20dengan%20jasa%20yang%20anda%20tawarkan!" target="_blank" class="wa mr-4"><img src="assets/img/whatsapp.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form action="https://formsubmit.co/el/964ef8b86b0c4df2a8200f413b11c4a" method="POST">
                                <h2>Ada Pertanyaan?</h2>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
                                    <label for="floatingInput" class="d-flex align-items-center">Nama Lengkap</label>
                                  </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Alamat Email</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Tulis Pertanyaan">
                                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda</label>
                                  </div>

                                  <button type="submit" class="button-kontak">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="d-flex align-items-center position-relative">
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
