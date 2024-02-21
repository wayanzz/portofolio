@extends('diva-reklame.partials.main')
@section('content')

<div class="wrapper-box p-0">
    <!-- about-me start -->
    <div class="page-title-area pt-210 pb-210" data-background="assets/images/neon-box-dark.jpeg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title text-center">
                        <h1>Tentang Kami</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{route('home.index')}}">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tentang Kami
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-me-area end -->
    <!-- who-we-area start -->
    <div class="who-we-area cover-bottom pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 wh-pad pr-60">
                    <div class="who-we-box white-bg">
                        <h2>Apa itu Diva Reklame ?</h2>
                        <p>
                            Diva reklame adalah sebuah nama dari sebuah perusahaan
                            percetakan yang bergerak di bidang advertising. Diva reklame
                            menyediakan berbagai kerajinan mulai dari name tag, neon box,
                            tekukan akrilik, akrilik sen, dll. Kami selalu berusaha
                            memberikan kualitas terbaik kepada pelanggan karena di
                            perusahaan kami kualitas adalah suatu kewajiban yang harus
                            kami maksimalkan dalam pembuatan pesanan. Nah disini waktu
                            yang biasa kita janjikan adalah 1-2 minggu tergantung tingkat
                            kesulitas desain dan banyak pesanan yang ada.
                        </p>
                        <a data-animation="fadeInLeft" data-delay="1.2s" href="{{route('services.index')}}" class="btn brand-btn"
                            style="animation-delay: 1.2s" tabindex="0">Layanan
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- who-we-area end -->
    <!-- ask start -->
    <div class="intro-area pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="intro-text text-center">
                        <h1>Ingin bertanya lebih lanjut?</h1>
                        <p>
                            Jika masih penasaran silakan hubungi kami melalui tombol di
                            bawah ini
                        </p>
                        <a href="{{route('contact.index')}}" class="btn brand-btn" style="animation-delay: 1.2s" tabindex="0">Kontak
                            Kami
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ask end -->
    <!-- counter-area start -->
    <div class="counter-area pt-150 pb-120" data-background="assets/images/neon-box-dark.jpeg">
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
    <!-- testimonial-area start -->
    <div class="testimonial-area gray-bg pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center mb-50">
                        <h2>Penilaian perusahaan</h2>
                    </div>
                </div>
            </div>
            <div class="row testimonial-box-active dot-style">
                <div class="col-xl-4">
                    <div class="testimonial-box text-center">
                        <div class="test-info">
                            <div class="test-thumb pb-15">
                                <img src="https://static.miraheze.org/tampvanwiki/0/0a/Rusdi_Omaygot.png"
                                    alt="" />
                            </div>
                            <div class="test-title pb-20">
                                <h5>anus baswedi</h5>
                                <span>Pelanggan</span>
                            </div>
                        </div>
                        <p>hasil bagus,rapi dan komunikasi memuaskan. Recommed deh</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area end -->
</div>

@endsection
