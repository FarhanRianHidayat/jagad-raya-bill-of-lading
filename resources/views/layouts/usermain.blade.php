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

        <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
                    <a href="" type="button" class="translate" data-bs-toggle="modal" data-bs-target="#translateModal">
                        <i class="fas fa-language"></i>
                    </a>

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
            <a href="/register" class="btn btn-primary {{ Request::is('login') ? 'active' : '' }}">Register</a>
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

                    {{-- <button class="button-lg-primary" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Mulai</button> --}}
                    {{-- <a href="#"><img src="assets/img/arrow.png" alt=""></a> --}}
                </div>
            </div>

            <img src="assets/img/kapal.png" alt="" data-aos="fade-up" data-aos-duration="800" class="kapal position-absolute end-0 top-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img position-absolute top-0 start-0">
            <img src="assets/img/aksen2.png" alt="" class="aksen-img position-absolute top-0 end-0">
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
                    <h1 class="display-4 text-center">20+</h1>
                    <p class="mb-0 text-center">Klien Ditangani</p>
                </div>
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="350" data-aos-duration="700">
                    <h1 class="display-4 text-center">6</h1>
                    <p class="mb-0 text-center">Jenis Jasa</p>
                </div>
                <div class="col-lg-2 col-sm-6" data-aos="fade-down" data-aos-delay="450" data-aos-duration="700">
                    <h1 class="display-4 text-center">15+</h1>
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
            <p class="mb-0">Copyright@2023. Jagad Raya All rights Reserved</p>
        </div>
    </footer>

<!-- Modal -->
<div class="modal fade" id="translateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Translate Page</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Disclaimer: Anda menggunakan Google Translate. Kami tidak bertanggung jawab atas keakuratan informasi dalam bahasa diterjemahkan</p>
        <div id="google_translate_element"></div>

{{-- <div id="google_translate_element" style="width: 100%;">
    <div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="as">Assamese</option><option value="ay">Aymara</option><option value="az">Azerbaijani</option><option value="bm">Bambara</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bho">Bhojpuri</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="dv">Dhivehi</option><option value="doi">Dogri</option><option value="nl">Dutch</option><option value="en">English</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="ee">Ewe</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gn">Guarani</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="ilo">Ilocano</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="gom">Konkani</option><option value="ko">Korean</option><option value="kri">Krio</option><option value="ku">Kurdish (Kurmanji)</option><option value="ckb">Kurdish (Sorani)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="ln">Lingala</option><option value="lt">Lithuanian</option><option value="lg">Luganda</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mai">Maithili</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mni-Mtei">Meiteilon (Manipuri)</option><option value="lus">Mizo</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="om">Oromo</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="qu">Quechua</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="sa">Sanskrit</option><option value="gd">Scots Gaelic</option><option value="nso">Sepedi</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="ti">Tigrinya</option><option value="ts">Tsonga</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="ak">Twi</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="VIpgJd-ZVi9od-l4eHX-hSRGPd" href="https://translate.google.com" target="_blank"><img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
    </div>
    </div>
  </div>
</div> --}}

    <!-- Optional JavaScript; choose one of the two! -->

    {{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script> --}}
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

{{-- aos js --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    </script>

{{-- Language --}}

{{-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script> --}}

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    {{-- Language --}}
{{-- <script>

            function displaytranslate() {
                var a = document.getElementById('translate');
                if (a.style.display == 'none') {
                    a.style.display = 'block';
                }
                if (a.style.display == 'block') {
                    a.style.display = 'none';
                }
            }
        
</script> --}}

{{-- <script>
            function googleTranslateElementInit() {
                var a = document.getElementById('google_translate_element');
                if (a.style.display == 'none') {
                    a.style.display = 'block';
                }
                if (a.style.display == 'block') {
                    a.style.display = 'none';
                }
            }
</script> --}}
<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement( 'google_translate_element');
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
