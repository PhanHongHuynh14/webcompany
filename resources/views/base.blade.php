<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>2Bon Company</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="./css/responsive.css" rel="stylesheet" />
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="./index">
                        <span>
                            2Bon Company
                        </span>
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item ">
                                    <a class="nav-link" href="./index">Trang chủ
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./product"> Sản Phẩm
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./service"> Dịch Vụ </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./new">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contactinfo">Đặt Hàng</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        {{-- home --}}
        @yield('home')
        @yield('product')
        @yield('product_1')
        @yield('product_2')
        @yield('product_3')
        @yield('product_4')
        @yield('contactinfo')
        @yield('service')
        @yield('new')
        @yield('new_1')
        @yield('new_2')
        @yield('new_3')
        @yield('new_4')
        @yield('new_6')
        @yield('new_7')
        @yield('new_8')
        @yield('new_9')
        @yield('service_1')
        @yield('service_2')
        @yield('service_3')
        @yield('contact')
        @yield('option')

        {{-- end home --}}

    </div>

    {{-- footer --}}
    <div class="bg">
        <!-- info section -->
        <section class="info_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="info-logo">
                            <h2>
                                2Bon Company
                            </h2>
                            <p>
                                Luôn luôn bên bạn khi bạn cần. Mang lại niềm vui và sự hạnh phúc cho bạn
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info-nav">
                            <h4>
                                Navigation
                            </h4>
                            <ul>
                                <li>
                                    <a href="./index">
                                        Trang chủ
                                    </a>
                                </li>
                                <li>
                                    <a href="./service">
                                        Dịch vụ
                                    </a>
                                </li>
                                <li>
                                    <a href="./contactinfo">
                                        Đặt hàng
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info-contact">
                            <h4>
                                Liên hệ
                            </h4>
                            <div class="location">
                                <h6>
                                    Địa chỉ:
                                </h6>
                                <a href="">
                                    <img src="images/location.png" alt="">
                                    <span>
                                        180 Nguyễn Phong Sắc, Hà Nội
                                    </span>
                                </a>
                            </div>
                            <div class="call">
                                <h6>
                                    Điện thoại :
                                </h6>
                                <a href="">
                                    <img src="images/telephone.png" alt="">
                                    <span>
                                        ( +01 1234567890 )
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="discover">
                            <h4>
                                Trợ giúp
                            </h4>
                            <ul>

                                <li>
                                    Liên hệ chúng tôi qua
                                </li>
                            </ul>
                            <div class="social-box">
                                <a href="https://www.facebook.com/">
                                    <img src="images/facebook.png" alt="">
                                </a>
                                <a href="https://twitter.com/">
                                    <img src="images/twitter.png" alt="">
                                </a>
                                <a href="https://www.google.com/">
                                    <img src="images/google-plus.png" alt="">
                                </a>
                                <a href="https://www.linkedin.com/">
                                    <img src="images/linkedin.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info_section -->

        <!-- footer section -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        {{-- end footer --}}
</body>

</html>