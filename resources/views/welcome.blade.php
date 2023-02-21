<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>WIKBOOK</title>
    <!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">WIKBOOK</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Book</a></li>
                            <li class="scroll-to-section"><a href="/Book">AllBook</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Genre Book</a>

                                <ul>
                                    @foreach ( $genre as $genre)
                                    <li><a href="/Book/{{$genre->id}}">{{$genre->name }}</a></li>
                                    @endforeach
                                    @can('Admin')
                                    <li><a href="/dashboard">Dashboard</a></li>
                                    @endcan
                                </ul>
                                @auth
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="scroll-to-section  btn btn-outline-dark "></i> Logout</button>
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li><a class="scrollto rounded " href="/login">Get Started</a></li>
                            @endguest
                            </li>
                        </ul>


                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                        <div id="modal" class="popupContainer" style="display:none;">
                            <div class="popupHeader">
                                <span class="header_title">Login</span>
                                <span class="modal_close"><i class="fa fa-times"></i></span>
                            </div>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 40px over 0.6s after 0.4s">
                        <h1>Better Solutions For Your Choice Book</h1>
                        <p>We can access book for online and free!</p>
                        <a href="/register" class="main-button-slider">Register</a></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 80px over 0.6s after 0.4s">
                        <img src="assets/images/slider-icon.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>ABOUT US</h5>
                    </div>
                    <div class="left-text">
                        <p>More Than 99 Books That You Can Access On This Wikbook Web For Free, We Provide Books That Can Be Read Online So That Knowledge Is Wider</p>
                        <a href="#about2" class="main-button">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <div class="container">
            <h1 class="text-center mb-4">TOP 5 BOOK</h1>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    @foreach ( $Book as $book)
                    <div class="item service-item">
                        <div class="">
                            <i><img src="assets/images/bulan.jpg" alt=""></i>
                        </div>
                        <h5 class="service-title">BULAN</h5>
                        <p></p>Petualangan Raib, Seli, dan Ali berlanjut. Miss Selena akhirnya muncul di sekolah. Ia membawa kabar menggembirakan untuk anak-anak yang berjiwa petualang seperti Raib, Seli, dan Ali. Miss Selena bersama dengan Av akan mengajak mereka untuk mengunjungi klan matahari selama dua minggu.</p>
                        <a href="/Book/1{{$Book->id}}" class="main-button">Read More</a>
                    </div>

                    <div class="item service-item">
                        <div class="">
                            <i><img src="img/5.jpg" alt=""></i>
                        </div>
                        <h5 class="service-title">SELENA</h5>
                        <p></p>novel Selena mengambil latar di klan Bulan dan mengisahkan Miss Selena yang merupakan sosok guru Matematika di tempat Raib, Seli, dan Ali bersekolah, tepatnya di klan Bumi. Kisah bermula saat Selena berusia 15 tahun yang sudah menjadi anak yatim piatu sebab ayahnya meninggal dunia.</p>
                        <a href="/Book/16{{$Book->id}}" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="">
                            <i><img src="assets/images/bintang.jpg" alt=""></i>
                        </div>
                        <h5 class="service-title">BINTANG</h5>
                        <p></p>Raib, Seli dan Ali meneruskan petualangan mereka. Mereka harus menemukan pasak bumi yang akan di runtuh kan oleh sekretaris Dewan kota.Raib, Seli dan Ali melibatkan orang-orang yang berasal dari klan Bulan dan Matahari. Petualangan kali ini dibantu oleh Miss Selena sebagai pemimpin</p>
                        <a href="/Book/3{{$Book->id}}" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="">
                            <i><img src="assets/images/bumi.jpg" alt=""></i>
                        </div>
                        <h5 class="service-title">BUMI</h5>
                        <p></p>Novel Bumi menceritakan petualangan tiga remaja berusia 15 tahun bernama Raib,Ali,danSeli.Mereka digambarkan sebagai remaja dengan kekuatan Istimewa,Mereka yang istimewa,mampu pergi ke dunia paralel bumi,bertemu dengan klan lain dan berhadapan dengan Tamus</p>
                        <a href="/Book/4{{$Book->id}}" class="main-button">Read More</a>
                    </div>
                    <div class="item service-item">
                        <div class="">
                            <i><img src="assets/images/matahari.jpg" alt=""></i>
                        </div>
                        <h5 class="service-title">MATAHARI</h5>
                        <p></p>Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily saat pertarungan di klan Matahari (di novel sebelumnya).
                        Para ksatria dari klan Bulan pun turut merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi.</p>
                        <a href="/Book/5{{$Book->id}}" class="main-button">Read More</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    </div>
    </div>
    </section>
    <!-- ***** Contact Us End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; WIKBOOK

                        . Design: <a rel="nofollow" href=>Wk</a></p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/muhhamad.raifan/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>