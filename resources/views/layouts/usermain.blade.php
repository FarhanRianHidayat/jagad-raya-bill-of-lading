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

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Logo --}}
    <link rel="icon" href="assets/img/logojagad2.png">

    <title>PT. Jagad Raya Logistik</title>
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
                        <a class="nav-link" href="#reviews">Testimonials</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    @auth
                    <li class="nav-item mx-2">
                        @can('user')
                        <a class="nav-link" href="/track">Track</a>
                        @endcan
                    </li>
                    @endauth


                </ul>

                {{-- <div>
                    <a href="/register" class="btn btn-primary {{ Request::is('login') ? 'active' : '' }}">Daftar</a>
                <a href="/login" class=" btn btn-light {{ Request::is('login') ? 'active' : '' }}"> Login</a>
            </div> --}}
            <ul class="navbar-nav ml-auto">
                @auth
                @if (auth()->user()->role == 'user')
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                        Logout</button>
                </form>
                @endif
                @if (auth()->user()->role == 'admin')
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
                        @can('admin')

                        <a class="dropdown-item" href="/dashboardadmin"><i
                                class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>

                        <hr class="dropdown-divider">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                                Logout</button>
                        </form>
                    </div>
                    @endcan
        </div>
        {{-- <img c/lass="img-profile rounded-circle" src="/assets/img/undraw_profile.svg"> --}}

        </li>
        @endif
        @if (auth()->user()->role == 'employee')
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
            </a>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
                @can('employee')
                <a class="dropdown-item" href="/dashboardemployee"><i class="bi bi-layout-text-sidebar-reverse"></i>
                    Dashboard</a>

                <hr class="dropdown-divider">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i>
                        Logout</button>
                </form>
                @endcan
            </div>
            {{-- <img c/lass="img-profile rounded-circle" src="/assets/img/undraw_profile.svg"> --}}

        </li>
        @endif
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
                <div class="col-md-6 hero-tagline my-auto" >
                    <h1 data-aos="fade-right" data-aos-duration="800">Layanan Pengiriman Cepat Untuk Kebutuhan Logistik Anda.</h1>
                    <p class="rp" data-aos="fade-right" data-aos-duration="800"  data-aos-delay="300"><span class="fw-bold">Jagad Raya Logistik</span> dapat memberikan solusi logistik yang
                        efisien
                        dan terintegrasi untuk memenuhi kebutuhan pelanggan.</p>

                    <button class="button-lg-primary" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Mulai</button>
                    {{-- <a href="#"><img src="assets/img/arrow.png" alt=""></a> --}}
                </div>
            </div>

            <img src="assets/img/kapal.png" alt="" data-aos="fade-up" data-aos-duration="800" class="position-absolute end-0 bottom-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img h-100 position-absolute top-0 start-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img h-100 position-absolute end-0 bottom-0">
        </div>
    </section>

    {{-- Jasa --}}
    <section id="jasa">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down"  data-aos-duration="700">
                    <h2>Jasa Kami</h2>
                    <span class="sub-title">Kami menyediakan berbagai jenis jasa untuk membantu pergerakan barang dari
                        satu tempat ke tempat lainnya. <br>Kami memastikan barang sampai ke tujuan dengan tepat waktu
                        dan dalam kondisi yang baik. </span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="150" data-aos-duration="700">
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
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="250" data-aos-duration="700">
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
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="350" data-aos-duration="700">
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
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="450" data-aos-duration="600">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Around the Globe.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Bea Cukai</h3>
                        <p class="mt-3">Kami berpengalaman dalam menangani custom clearance kargo via udara/laut.
                            <br>Layanan mencakup prosedur impor/ekspor, dokumen transit, dan dokumen
                            kepabeanan.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="550" data-aos-duration="600">
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
                <div class="col-md-4 text-center mt-5" data-aos="fade-down" data-aos-delay="650" data-aos-duration="600">
                    <div class="card-jasa">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="assets/img/Give.png" alt=""
                                class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Jasa Project Handling</h3>
                        <p class="mt-3">Kami menyediakan layanan project handling.<br> Layanan mencakup perencanaan
                            proyek untuk kargo besar/sulit, tim ahli, survei
                            lokasi, transportasi pabrik-lokasi, dan bantuan pemuatan dan penyimpanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Us --}}
    <div class="about-text mt-5" id="about"  data-aos="fade-down"  data-aos-duration="700">
        <h6>Tentang <span>Kami</span></h6>
        <center>
            <hr>
        </center>
    </div>
    <section class="about mt-5">
        <div class="main" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
            <h1>
                JAGAD RAYA LOGISTIK
            </h1>
            <h5 style="font-size: 20px; padding-top: 20px" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">Deskripsi Perusahaan kami:</h5>
            <p style="padding-top: 10px;" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                PT. Jagad Raya Logistik Indonesia International Freights & Forwarding <br /> menawarkan layanan
                pengiriman barang baik impor maupun ekspor. <br /> Dengan jaringan mitra dan agen yang luas di seluruh
                dunia<br /> kami dapat memberikan harga terbaik dan pilihan rute paling eﬁsien.<br />
            </p>
        </div>
        <div class="card-1" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
            <p>Sebagai salah satu perusahaan International Freight Forwarder terkemuka di Indonesia yang telah
                berpengalaman melayani jasa perdagangan ekspor dan impor lebih dari 15 tahun. Kami senantiasa
                beradaptasi dengan kebutuhan pasar sehingga menjadi International Freight Forwarder terbaik saat ini
                yang selalu berkomitmen untuk melebihi harapan para customer kami. <br /> Kami telah memiliki ijin usaha
                lengkap untuk melakukan kegiatan usaha ekspor dan impor dari kementrian perdagangan pemerintah
                Indonesia.</p>
        </div>
    </section>

    {{-- Progres --}}
    <section id="progres">
        <div class="container mt-5 mb-5">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="150" data-aos-duration="700">
                    <h1 class="display-4 text-center">15+</h1>
                    <p class="mb-0 text-center">Tahun Beroperasi</p>
                </div>
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="250" data-aos-duration="700">
                    <h1 class="display-4 text-center">10k+</h1>
                    <p class="mb-0 text-center">Klien Ditangani</p>
                </div>
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="350" data-aos-duration="700">
                    <h1 class="display-4 text-center">6</h1>
                    <p class="mb-0 text-center">Jenis Jasa</p>
                </div>
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="450" data-aos-duration="700">
                    <h1 class="display-4 text-center">100+</h1>
                    <p class="mb-0 text-center">Jaringan Mitra & Agen</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section id="reviews" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title" data-aos="fade-down"  data-aos-duration="700" data-aos-delay="250">
                        <h1 class="display-4 fw-semibold">Testimonials</h1>
                        <div class="line"></div>
                        <p>Berikut merupakan apa yang client katakan setelah menggunakan jasa kami:</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4 mt-4">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Saya sangat terkesan dengan jasa project handling yang diberikan oleh perusahaan ini.
                                Tim mereka mampu mengelola proyek saya dengan sangat efisien dan profesional."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr1.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #1</h5>
                                <small>Jasa Project Handling</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Perusahaan ini menyediakan jasa yang sangat memuaskan dengan pelayanan yang baik dan
                                fasilitas yang modern. Penerbangan yang dilakukan juga selalu tepat waktu."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr2.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #2</h5>
                                <small>Jasa Angkutan Udara</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Perusahaan ini memberikan layanan yang sangat baik dan efisien. Mereka selalu tepat
                                waktu dalam pengiriman barang, dan juga pelayanan yg ramah."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr3.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #3</h5>
                                <small>Jasa Angkutan Laut</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Jasa angkutan trucking dari perusahaan ini sangat memuaskan. Mereka memberikan layanan
                                pengiriman barang yang cepat dan aman. Saya sangat merekomendasikannya."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr4.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #4</h5>
                                <small>Jasa Angkutan Trucking</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Perusahaan tersebut menawarkan jasa bea cukai yang sangat profesional dan handal. Mereka
                                memberikan layanan yang cepat dan efisien dalam mengurus dokumen."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr5.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #5</h5>
                                <small>Jasa Bea Cukai</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650" data-aos-duration="700">
                    <div class="review">
                        <div class="review-head p-4 bg-white theme-shadow">
                            <p>"Jasa Pergudangan yang ditawarkan oleh perusahaan tersebut sangatlah handal dan
                                terorganisir dengan baik. Stafnya sangat profesional dan responsif."</p>
                        </div>
                        <div class="review-person mt-4 d-flex align-items-center">
                            <img class="rounded-circle" src="./assets/img/iconr6.png" alt="">
                            <div class="ms-3">
                                <h5>Anonymous #6</h5>
                                <small>Jasa Pergudangan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="450">
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
                                <a href="https://goo.gl/maps/5uiRKqrowj98t11V9" target="_blank" class="location">GEDUNG
                                    PEMBINA GRAHA
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
                                <a href="https://wa.me/628128327664?text=Halo%2C%20saya%20tertarik%20dengan%20jasa%20yang%20anda%20tawarkan!"
                                    target="_blank" class="wa mr-5"><img src="assets/img/whatsapp.png" alt=""
                                        class="mt-2"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="550">
                        <div class="card-contact w-100">
                            <form action="https://formsubmit.co/el/964ef8b86b0c4df2a8200f413b11c4a" method="POST">
                                <h2>Ada Pertanyaan?</h2>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Nama Lengkap">
                                    <label for="floatingInput" class="d-flex align-items-center">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Alamat Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Tulis Pertanyaan">
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

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Jagad Raya<span class="dot">.</span></h4>
                        <p>Jagad Raya Logistik dapat memberikan solusi logistik yang efisien dan terintegrasi untuk
                            memenuhi kebutuhan pelanggan.</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2023. All rights Reserved</p>
        </div>
    </footer>

    {{-- <footer class="d-flex align-items-center position-relative">
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
    </footer> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- aos js --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
