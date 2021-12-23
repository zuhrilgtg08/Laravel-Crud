@extends('layouts.temp')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid - 19 2.0</title>
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <!--awal tag header-->
    <header class="fixed-top py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="#" class="logo">C<span class="fas fa-virus"></span>VID 19</a>
            <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>

            <nav class="nav">
                <a href="#home" class="active">home</a>
                <a href="#about">about</a>
                <a href="#prevention">prevention</a>
                <a href="#consult">consult</a>
                <a href="#contact">contact</a>
                <a href="#blogs">blogs</a>
            </nav>

            <!-- AWAL Nv Temp -->
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
                <div class="container">
                    <!-- <a class="navbar-brand text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <!-- <ul class="navbar-nav me-auto">

                        </ul> --> 

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Akhir Nv Temp -->
        </div>
    </header>
    <!--akhir tag header-->

    <!--awal section home-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center pt-5">
                <div class="col-md-6">
                    <img src="gambar/home.svg" alt="home gambar" class="w-100">
                </div>

                <div class="col-md-6 content text-center text-md-start pl-md-5">
                    <span>tetap di rumah, tetap aman</span>
                    <h3>melidungi diri dari virus covid - 19</h3>
                    <a href="#" class="link-btn">selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <!--akhir section home-->

    <!--awal section about-->
    <section class="about" id="about">
        <h1 class="heading"> tentang <span>covid 19</span> </h1>
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="col-md-6 content">
                    <h3>Apa Itu coronavirus?</h3>
                    <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS).</p>
                    <p>Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus.</p>
                    <a href="#" class="link-btn">selengkapnya</a>
                </div>

                <div class="col-md-6">
                    <img src="gambar/about.svg" alt="about" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!--akhir section about-->

    <!--awal section prevation-->
    <section class="prevention" id="prevention">
        <h1 class="heading"> bagaimana <span>pencegahannya</span>? </h1>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="kotak p-4 m-2">
                    <img src="gambar/1.png" alt="gambar 1">
                    <h3>pakai masker setiap saat</h3>
                    <p>Gunakan masker saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi berbelanja bahan makanan.</p>
                </div>

                <div class="kotak p-4 m-2">
                    <img src="gambar/4.png" alt="gambar 4">
                    <h3>selalu cuci tangan</h3>
                    <p>Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.</p>
                </div>

                <div class="kotak p-4 m-2">
                    <img src="gambar/5.png" alt="gambar 5">
                    <h3>konsultasi ke dokter</h3>
                    <p>Konsumsi obat-obatan yang disarankan oleh dokter, Bila ingin ke rumah sakit saat gejala bertambah berat, sebaiknya hubungi dulu pihak rumah sakit untuk menjemput.</p>
                </div>

                <div class="kotak p-4 m-2">
                    <img src="gambar/2.png" alt="gambar 2">
                    <h3>Terapkan physical distancing</h3>
                    <p>Terapkan physical distancing, yaitu menjaga jarak minimal 2 meter dari orang lain, dan jangan dulu ke luar rumah kecuali ada keperluan mendesak.</p>
                </div>

                <div class="kotak p-4 m-2">
                    <img src="gambar/3.png" alt="gambar 3">
                    <h3>hindari kontak</h3>
                    <p>Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.</p>
                </div>

                <div class="kotak p-4 m-2">
                    <img src="gambar/6.png" alt="gambar 6">
                    <h3>budayakan hidup bersih</h3>
                    <p>Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk kebersihan rumah.</p>
                </div>

            </div>
        </div>
    </section>
    <!--akhir section prevation-->

    <!--awal section consult-->
    <section class="consult" id="consult">
        <h1 class="heading"> konsultasi <span>dokter</span> </h1>
        <div class="container">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="kotak">
                    <img src="gambar/doktor 1.jpg" alt="dokter 1">
                    <h3>ari furqon</h3>
                    <span>dokter spesialis THT</span>
                    <div class="bagi">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                    </div>
                </div>

                <div class="kotak">
                    <img src="gambar/doktor 2.jpg" alt="dokter 2">
                    <h3>anisa tika</h3>
                    <span>Dokter spesialis bedah</span>
                    <div class="bagi">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                    </div>
                </div>

                <div class="kotak">
                    <img src="gambar/doktor 3.jpg" alt="dokter 3">
                    <h3>umar faruq</h3>
                    <span>Dokter spesialis saraf</span>
                    <div class="bagi">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                    </div>
                </div>

                <div class="kotak">
                    <img src="gambar/doktor 4.jpg" alt="dokter 4">
                    <h3>nurul rahmawati</h3>
                    <span>Dokter spesialis mata</span>
                    <div class="bagi">
                        <a href="#" class="fab fa-facebook"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-whatsapp"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--akhir section consult-->

    <!--awal section contact-->
    <section class="contact" id="contact">
        <h1 class="heading"> hubungi <span>kami</span> </h1>

        <div class="container">
            <div class="row flex-wrap-reverse">
                <div class="col-md-7 p-2">
                    <form action="">
                        <input type="text" placeholder="nama" class="kotak">
                        <input type="email" placeholder="email" class="kotak">
                        <input type="number" placeholder="nomor telepon" class="kotak">
                        <textarea name="" id="" cols="30" rows="10" placeholder="pesan anda"></textarea>
                        <button type="submit" class="link-btn">kirim pesan</button>
                    </form>
                </div>

                <div class="col-md-5 p-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.937190658868!2d112.72490321437074!3d-7.247989173207554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f948072125bf%3A0x9e5484ee2acd35a1!2sJl.%20Gundih%20III%2C%20Gundih%2C%20Kec.%20Bubutan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060172%2C%20Indonesia!5e0!3m2!1sen!2sin!4v1628138253317!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--akhir section contact-->

    <!--awal section blogs-->
    <section class="blogs" id="blogs">
        <h1 class="heading"> blog <span>kami</span> </h1>

        <div class="container">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="kotak p-3 m-2">
                    <div class="gambar">
                        <img src="gambar/blog-1.svg" alt="blog 1" class="w-100 h-100">
                    </div>
                    <div class="content p-2">
                        <h3>perangi covid 19</h3>
                        <a href="#" class="link-btn">baca selengkapnya</a>
                        <div class="icon">
                            <a href="#"><i class="fas fa-user"></i>by bayu</a>
                            <a href="#"><i class="fas fa-calendar"></i>03 july, 2021</a>
                        </div>
                    </div>
                </div>

                <div class="kotak p-3 m-2">
                    <div class="gambar">
                        <img src="gambar/blog-2.svg" alt="blog 2" class="w-100 h-100">
                    </div>
                    <div class="content p-2">
                        <h3>berantas covid 19</h3>
                        <a href="#" class="link-btn">baca selengkapnya</a>
                        <div class="icon">
                            <a href="#"><i class="fas fa-user"></i>by zuhril</a>
                            <a href="#"><i class="fas fa-calendar"></i>06 aug, 2021</a>
                        </div>
                    </div>
                </div>

                <div class="kotak p-3 m-2">
                    <div class="gambar">
                        <img src="gambar/blog-3.svg" alt="blog 3" class="w-100 h-100">
                    </div>
                    <div class="content p-2">
                        <h3>penanganan covid 19</h3>
                        <a href="#" class="link-btn">baca selengkapnya</a>
                        <div class="icon">
                            <a href="#"><i class="fas fa-user"></i>by nabila</a>
                            <a href="#"><i class="fas fa-calendar"></i>12 aug, 2021</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--akhir section blogs-->

    <!--awal section footer-->
    <section class="footer">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center text-center text-sm-start">
                <div class="kotak p-3 m-2">
                    <h3>lokasi</h3>
                    <a href="#">cikarang</a>
                    <a href="#">bekasi</a>
                    <a href="#">jakarta</a>
                    <a href="#">bandung</a>
                    <a href="#">surabaya</a>
                </div>

                <div class="kotak p-3 m-2">
                    <h3>tautan link</h3>
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#prevention">prevention</a>
                    <a href="#consult">consult</a>
                    <a href="#contact">contact</a>
                    <a href="#blogs">blogs</a>
                </div>

                <div class="kotak p-3 m-2">
                    <h3>sosial media kami</h3>
                    <a href="#">facebook</a>
                    <a href="#">instagram</a>
                    <a href="#">twitter</a>
                    <a href="#">youtube</a>
                </div>

                <div class="kotak p-3 m-2">
                    <h3>tentang kami</h3>
                    <a href="#">+62-876-5341-3324k</a>
                    <a href="#">+031-5875-8904</a>
                    <a href="#">officialInfoCovid-19@gmail.com</a>
                    <a href="#">indonesia, bandung</a>
                </div>
            </div>
            <div class="selesai"> kreatif desain dari <span>ahmad zuhril 08</span> | all rights reserved </div>
        </div>
    </section>
    <!--akhir section footer-->

    <!--script js-->
    <script src="js/script.js"></script>
    <!--akhir script js-->

</body>

</html>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection