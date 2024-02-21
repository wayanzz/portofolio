@extends('diva-reklame.partials.main')
@section('content')
    <div class="wrapper-box p-0">
        <!-- page-title-area start -->
        <div class="page-title-area pt-210 pb-210" data-background="assets/images/neon-box-dark.jpeg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title text-center">
                            <h1>Layanan Kami</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('home.index') }}">Beranda</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Layanan
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title-area end -->
        <div class="services-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Layanan</h2>
                            <p>
                                Berikut adalah beberapa pelayanan yang tersedia di dalam perusahaan kami!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-check h1 mb-5"></i>
                            <h2>Hasil Memuaskan</h2>
                            <p>
                                Kami berusaha memberikan hasil terbaik kepada pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-history h1 mb-5"></i>
                            <h2>Ketepatan Waktu</h2>
                            <p>
                                Kami selalu menggunakan bahan bahan yang berkualitas agar tidak merugikan pihak manapun.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-box h1 mb-5"></i>
                            <h2>Bahan Berkualitas</h2>
                            <p>
                                Kami berusaha mempersingkat waktu pekerjaan agar pelanggan tidak lama menunggu,
                                seandainya
                                ada kendala kami pasti akan menghubungi pelanggan kembali.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area start -->
        <div class="services-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Produk</h2>
                            <p>
                                Berikut adalah sebagian kecil produk dari perusahaan kami.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/tekukan-akrilik.jpeg" alt="" height="270" />
                            <h3>
                                <a href="">Tekukan Akrilik</a>
                            </h3>
                            <p>
                                Tekukan akrilik adalah kerajinan dimana aklirik itu sendiri dipanaskan
                                dan dibentuk sesuai keinginan dan ketebalan pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/neon-box.jpeg" alt="" height="270" />
                            <h3>
                                <a href="">Neon Box</a>
                            </h3>
                            <p>
                                Neon Box akrilik adalah kerajinan yang terbuat dari bahan akrilik yang
                                dilapisi dengan Lampu LED. biasa digunakan sebagai iklan atau hiasan perusahaan
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="assets/images/name-tag.jpeg" height="270" alt="" />
                            <h3>
                                <a href="">Name Tag</a>
                            </h3>
                            <p>
                                Name tag adalah sebuah nama dada yang digunakan sebagai tanda pengenal dan
                                biasanya digunakan di tempat seperti hotel,villa,dan resto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-area start -->
        <!-- price start -->
        <div class="our-pricing-area gray-bg pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Harga</h2>
                            <p>
                                Berikut Estimasi daftar Harga produk kami "sesuai dengan syarat berlaku"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-wrapper white-bg text-center mb-30">
                            <div class="pricing-top mt-4">
                                <h3>Name Tag</h3>
                            </div>
                            <div class="pricing-text theme-bg">
                                <h2>
                                    <span class="usd">RP</span> 30.000
                                    <span class="sepa">/</span>
                                    <span>Pcs</span>
                                </h2>
                            </div>
                            <ul class="pricing-menu">
                                <li>Bahan Kuningan</li>
                                <li>Tempelan Magnet, stainless, batok kelapa, dll.</li>
                            </ul>
                            <div class="pricing-button">
                                <a href="contact.html">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-wrapper white-bg text-center mb-30">
                            <div class="pricing-top mt-4">
                                <h3>Tekukan Akrilik</h3>
                            </div>
                            <div class="pricing-text theme-bg">
                                <h2>
                                    <span class="usd">Tergantung ukuran</span>
                                </h2>
                            </div>
                            <ul class="pricing-menu">
                                <li>Bahan Akrilik</li>
                            </ul>
                            <div class="pricing-button">
                                <a href="contact.html">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-wrapper white-bg text-center mb-30">
                            <div class="pricing-top mt-4">
                                <h3>Neon Box</h3>
                            </div>
                            <div class="pricing-text theme-bg">
                                <h2>
                                    <span class="usd">Tergantung ukuran</span>
                                </h2>
                            </div>
                            <ul class="pricing-menu">
                                <li>Bahan Berkualitas</li>
                            </ul>
                            <div class="pricing-button">
                                <a href="contact.html">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- price end -->
    </div>
@endsection
