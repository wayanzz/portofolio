 <!-- header start -->
 <header class="fixed-top bg-light header-top-area theme-bg top-space" style="box-shadow: 0px 0px 15px #00000054">
     <div class="header-bottom-area">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-3 col-lg-3">
                     <div class="logo">
                         <a href="index.html">
                             <h3>Diva Reklame</h3>
                         </a>
                     </div>
                 </div>
                 <div class="col-xl-9 col-lg-9">
                     <div class="main-menu f-right">
                         <nav id="mobile-menu">
                             <ul>
                                 <li>
                                     <a href="{{ route('home.index') }}">Beranda</a>
                                 </li>
                                 <li><a href="{{ route('about.index') }}">Tentang</a></li>
                                 <li>
                                     <a href="{{ route('services.index') }}">Layanan</a>
                                 </li>
                                 <li>
                                     <a href="{{ route('contact.index') }}">Kontak</a>
                                 </li>
                                 @auth
                                     <li>
                                         <a href="{{ route('login') }}">Dashboard</a>
                                     </li>
                                 @endauth
                                 @guest
                                     <li>
                                         <a href="{{ route('login') }}">Masuk</a>
                                     </li>
                                     <li>
                                         <a href="{{ route('register') }}">Daftar</a>
                                     </li>
                                 @endguest
                             </ul>
                         </nav>
                     </div>
                     <div class="mobile-menu"></div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header end -->
