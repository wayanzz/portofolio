@extends('diva-reklame.partials.main')
@section('content')
    <!-- content start -->
    <div class="wrapper-box p-0">
        <div class="slider-area slider-text-white">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center"
                    data-background="assets/images/neon-box-dark.jpeg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10 d-flex align-items-center">
                                <div class="slider-content">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">
                                        Selamat Datang
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".9s">
                                        Diva reklame merupakan sebuah perusaahan yang bergerak di
                                        bidang percetakan khususnya pembuatan <b>Name Tag</b>,
                                        <b>Tekukan Akrilik</b>,<b>Neon Box</b>,<b>Akrilik sen</b>,<b>Neon sen</b>.
                                    </p>
                                    <div class="slide-btn">
                                        <a data-animation="fadeInLeft" data-delay="1.2s" href="{{ route('about.index') }}"
                                            class="btn brand-btn">Tentang Kami
                                            <span>&rarr;</span>
                                        </a>
                                        <a data-animation="fadeInRight" data-delay="1.5s" href="{{ route('contact.index') }}"
                                            class="btn white-btn">Kontak Kami
                                            <span>&rarr;</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product start -->
        <div class="services-area pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="{{ asset('assets/images/tekukan-akrilik.jpeg') }}" alt="" height="290" />
                            <h3 class="heading-no-border">
                                <span>Tekukan Akrilik</span>
                            </h3>
                            <p>
                                Tekukan akrilik adalah kerajinan dimana aklirik itu sendiri dipanaskan
                                dan dibentuk sesuai keinginan dan ketebalan pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="{{ asset('assets/images/name-tag.jpeg') }}" alt="" height="290" />
                            <h3 class="heading-no-border">
                                <a href="service-details.html">Name Tag</a>
                            </h3>
                            <p>
                                Name tag adalah sebuah nama dada yang digunakan sebagai tanda pengenal dan
                                biasanya digunakan di tempat seperti hotel,villa,dan resto.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-box service-3 mb-50">
                            <img src="{{ asset('assets/images/custom-neon-box.jpeg') }}" alt="" height="290" />
                            <h3 class="heading-no-border">
                                <a href="service-details.html">Neon Box</a>
                            </h3>
                            <p>
                                Neon Box akrilik adalah kerajinan yang terbuat dari bahan akrilik yang
                                dilapisi dengan Lampu LED. biasa digunakan sebagai iklan atau hiasan perusahaan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-area pt-120 pb-120 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-text text-center">
                            <h1>Berbisinis Dengan Kami</h1>
                            <p>
                                Mari berbisnis dengan kami dan membangun sebuah kerja sama antar perusahaan melalui
                                tombol dibawah ini.
                            </p>
                            <a href="{{ route('contact.index') }}" class="btn brand-btn" style="animation-delay: 1.2s" tabindex="0">Kontak
                                Kami
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product end -->
        <!-- services start -->
        <div class="services-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Pelayanan Kami</h2>
                            <p>
                                Kami menyediakan beberapa pelayanan yang merupakan tanggung jawab kami ke pada
                                pelanggan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-check h2 mb-20"></i>
                            <h2>Hasil Memuaskan</h2>
                            <p>
                                Kami berusaha memberikan hasil terbaik kepada pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-box h2 mb-20"></i>
                            <h2>Bahan Berkualitas</h2>
                            <p>
                                Kami selalu menggunakan bahan bahan yang berkualitas agar tidak merugikan pihak manapun.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="service-wrapper text-center mb-30">
                            <i class="fa fa-history h2 mb-20"></i>
                            <h2>Ketepatan Waktu</h2>
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
        <!-- counter-area start -->
        <div class="counter-area pt-150 pb-120"
            data-background="https://png.pngtree.com/thumb_back/fw800/background/20230511/pngtree-business-office-dark-background-image_2561060.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="single-couter text-center mb-30">
                            <span class="fa fa-thumbs-up"></span>
                            <div class="counter">500++</div>
                            <p>Pelayanan Memuaskan</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="single-couter text-center mb-30">
                            <span class="fa fa-box"></span>
                            <div class="counter">500++</div>
                            <p>Projek Selesai</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="single-couter text-center mb-30">
                            <span class="fa fa-users"></span>
                            <div class="counter">2</div>
                            <p>Partner</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="single-couter text-center mb-30">
                            <span class="fa fa-building"></span>
                            <div class="counter">2</div>
                            <p>Cabang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-area end -->
        <!-- project start -->
        <div class="portfolio-area pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Projek</h2>
                            <p>
                                Berikut adalah sebagian kecil contoh produk yang kami sediakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row grid">
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat3 cat2">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/images/name-tag.jpeg') }}" alt="" height="250" />
                            </div>
                            <div class="portfolio-content">
                                <h3>
                                    <a href="#">Name Tag</a>
                                </h3>
                                <span>Bahan Kuningan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat1 cat3">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/images/tekukan-akrilik.jpeg') }}" alt="" height="250" />
                            </div>
                            <div class="portfolio-content">
                                <h3>
                                    <a href="#">Tekukan Akrilik</a>
                                </h3>
                                <span>Bahan Akrilik</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 grid-item cat2 cat4 cat3">
                        <div class="portfolio-wrapper mb-30">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('assets/images/neon-box.jpeg') }}" alt="" height="250" />
                            </div>
                            <div class="portfolio-content">
                                <h3>
                                    <a href="#">Neon Box</a>
                                </h3>
                                <span>Bahan akrilik</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- projet end -->
        <!-- what-about-me start -->
        <div class="who-we-area cover-bottom pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 wh-pad pr-60">
                        <div class="who-we-box white-bg">
                            <h2>Mengapa harus di Diva Reklame?</h2>
                            <p>
                                Karena kami selalu ada untuk anda kecuali hari minggu dan hari libur, dan kami akan
                                selalu berusaha memberikan pelayanan yang terbaik untuk pelanggan.
                            </p>
                            <ul class="clearfix mb-30">
                                <li class="h4 d-flex justify-content-between w-25">
                                    <a href="#" class="p-3 bg-primary rounded text-light mx-1"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="p-3 bg-primary rounded text-light mx-1"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a href="https://api.whatsapp.com/send/?phone=6281236317860&text&type=phone_number&app_absent=0"
                                        class="p-3 bg-primary rounded text-light mx-1"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                            </ul>
                            <a href="{{ route('contact.index') }}" class="btn brand-btn" style="animation-delay: 1.2s" tabindex="0">Hubungi
                                kami
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- what-about-me end -->
        <!-- price-start -->
        <div class="our-pricing-area gray-bg pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Harga</h2>
                            <p>
                                Berikut Estimasi Daftar Harga produk kami
                                "sesuai dengan syarat berlaku"
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
                                <li>kancing magnet</li>
                                <li>bahan kuningan, stainless, batok kelapa, dll.</li>
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
        <!-- price-end -->
        <!-- talk-start -->
        <div class="cta-area theme-bg pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-8">
                        <div class="cta-text">
                            <h2>Ingin bertanya lebih lanjut?</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-4">
                        <div class="cta-button text-md-right">
                            <a class="btn white-btn" href="#">Hubungi Kami
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- talk-end -->
        <!-- blog-area-start -->
        <div class="basic-blog-area gray-bg pt-115 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title text-center mb-50">
                            <h2>Blog</h2>
                            <p>
                                Mengapa Memilih Diva Reklame? </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 blog-item mb-40">
                        <div class="blog-wrapper blog-column">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/name tag.jpg" alt="" />
                                </a>
                            </div>
                            <div class="meta-info">
                                <ul>
                                    <li class="posts-time">Date 25 Aug 2023</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="blog-details.html">Keindahan Dalam Kreativitas</a>
                                </h2>
                                <p>

                                    Inilah waktunya untuk merangkul keindahan dalam bentuk-bentuk baru. Tekukan Akrilik
                                    Diva
                                    Reklame adalah perpaduan sempurna antara kekuatan dan estetika. Dengan detail yang
                                    presisi
                                    dan kemungkinan desain tak terbatas, temukan bagaimana Tekukan Akrilik kami dapat
                                    membuat brand Anda bersinar. Pelajari lebih lanjut di sini
                                </p>
                            </div>
                            <div class="link-box">
                                <a href="blog-details.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-item mb-40">
                        <div class="blog-wrapper blog-column">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/neon.jpg" alt="" />
                                </a>
                            </div>
                            <div class="meta-info">
                                <ul>
                                    <li class="posts-time">Date 02 Sep 2023</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="blog-details.html">Elegan Dalam Bentuk</a>
                                </h2>
                                <p>
                                    Diva Reklame memberikan sentuhan elegan melalui layanan Tekukan Akrilik kami. Dengan
                                    presisi tinggi,
                                    kami membentuk akrilik menjadi karya seni yang memukau. Dari tanda nama bisnis
                                    hingga display produk,
                                    akrilik tekukan kami memberikan daya tarik visual yang tak tertandingi.
                                </p>
                            </div>
                            <div class="link-box">
                                <a href="blog-details.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 blog-item mb-40">
                        <div class="blog-wrapper blog-column">
                            <div class="blog-thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/pump.jpg" alt="" />
                                </a>
                            </div>
                            <div class="meta-info">
                                <ul>
                                    <li class="posts-time">Date 28 Oct 2023</li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="blog-details.html">Melodi Cahaya Yang Elegan</a>
                                </h2>
                                <p>
                                    Dalam dunia yang dipenuhi warna, mari hadirkan sentuhan elegan dengan Neon Sen
                                    kami. Cahaya yang berpadu dalam harmoni, menciptakan melodi visual yang tak
                                    terlupakan.
                                    Dari desain minimalis hingga ekspresif, temukan bagaimana Neon Sen Diva Reklame
                                    dapat
                                    memberikan identitas unik untuk bisnis Anda. Cari inspirasi di sini.
                                </p>
                            </div>
                            <div class="link-box">
                                <a href="blog-details.html">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog-area end -->

    </div>
@endsection
