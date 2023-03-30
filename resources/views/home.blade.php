<!DOCTYPE html>

<html>
<head>
    <title>Kuyana ENT (K) Ltd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="KUYANA - your number 1 partner for the dairy and beverage industry. Contact us today">


    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Kuyana Ent (k) Ltd">
    <meta itemprop="description"
          content="your number 1 partner for the dairy and beverage industry">
    <meta itemprop="image" content="{{ asset('assets/images/KUYANA LOGO.png')}}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:title" content="Kuyana Ent (k) Ltd">
    <meta property="og:description"
          content="your number 1 partner for the dairy and beverage industry">
    <meta property="og:image" content="{{ asset('assets/images/KUYANA LOGO.png')}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{url('/')}}">
    <meta property="twitter:title" content="Kuyana Ent (k) Ltd">
    <meta property="twitter:description"
          content="your number 1 partner for the dairy and beverage industry">

    <meta property="twitter:image" content="{{ asset('assets/images/KUYANA LOGO.png')}}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/body.css') }}" media="all"/>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/slick/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/slick/slick/slick-theme.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate/animate.css') }}"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css"
          type="text/css">

    <!--roboto fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap"
          rel="stylesheet">

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
            integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
            crossorigin="anonymous"></script>
</head>
<div>

    <div id="head">
        <header>

            <div id="logo" class="animated wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <img id="logo_img" src="{{ asset('assets/images/KUYANA LOGO.png')}}">
            </div>
            <div id="nav_bar">
                <nav class="navbar navbar-expand-sm">
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link animated wow bounceInLeft" data-wow-duration="10s"
                                   data-wow-delay=".5s" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated wow bounceInLeft" data-wow-duration="10s"
                                   data-wow-delay=".5s" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link animated wow bounceInLeft" data-wow-duration="10s"
                                   data-wow-delay=".5s" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div id="carouselExampleIndicators" class="carousel slide animated wow bounceInLeft" data-wow-duration="1s"
             data-wow-delay=".5s" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="slider_img" src="{{ asset('assets/slider_images/bardiani image.jpg')}}"
                         class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img id="slider_img" src="{{ asset('assets/slider_images/googlio pic.jpg')}}" class="d-block w-100"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img id="slider_img" src="{{ asset('assets/slider_images/mbs image.jpg')}}" class="d-block w-100"
                         alt="...">
                </div>
                <div class="carousel-item">
                    <img id="slider_img" src="{{ asset('assets/slider_images/csf image.jpg')}}" class="d-block w-100"
                         alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="row three-percent-margin-top">
        <div class="col-md-4">
            <div class="wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <div id="flex_div_img">
                    <img id="flex_img" src="{{ asset('assets/images/industry1.jpg')}}">
                </div>
                <div id="flex_div_title">
                    Sales and Services offered
                </div>
                <div id="flex_div_content">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class=" wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <div id="flex_div_img">
                    <img id="flex_img_center" src="{{ asset('assets/images/industry2.jpg')}}">
                </div>
                <div id="flex_div_title">
                    Industry Sector
                </div>
                <div id="flex_div_content">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                <div id="flex_div_img">
                    <img id="flex_img" src="{{ asset('assets/images/industry3.jpg')}}">
                </div>
                <div id="flex_div_title">
                    Customer Service
                </div>
                <div id="flex_div_content">
                </div>
            </div>
        </div>


    </div>

    <div id="row3" class="three-percent-margin-top">

        <h3>We Offer Products for the dairy and beverage industry</h3>
        <p><strong>KUYANA - </strong> your partner for the dairy and beverage industry. For the sale of components,
            service or advice,</p>
        <p>Call us on:<Strong>+254 721 915054</Strong> or Email us at <strong>kuyanaent@yahoo.com</strong></p>
    </div>

    <div id="row4">
        <div class="content-box">
            <div style="text-align: center; margin-top: 10px;" class="wow animated fadeInDown" data-wow-duration="1s"
                 data-wow-delay=".5s">
                <h3>Partners</h3>
                <div class="content-title-underline">
                </div>
            </div>
            <div class="cc">
                <div class="wow animated bounceInRight" data-wow-duration="1s" data-wow-delay=".delay-5s">
                    <div class="col-md-12">
                        <div class="partners-slider">
                            <div class="partner_slide">
                                <img id="partners_img" src="{{ asset('assets/images/bardiani.jpg')}}">
                            </div>
                            <div class="partner_slide">
                                <img id="partners_img" src="{{ asset('assets/images/CSF_new.jpg')}}">

                            </div>
                            <div class="partner_slide">
                                <img id="partners_img" src="{{ asset('assets/images/OMAC.jpg')}}">

                            </div>
                            <div class="partner_slide">
                                <img id="partners_img" src="{{ asset('assets/images/goglio.png')}}">

                            </div>
                            <div class="partner_slide">
                                <img id="partners_img" src="{{ asset('assets/images/MBS.jpg')}}">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer section-->

    <section id="contacts">
        <footer>

            <div id="contact" class="wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".delay-5s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="contact-left">
                                <h3>Kuyana ENT(K) Ltd</h3>
                                <p>We believe in <strong>Simple</strong>,
                                    <Strong>Clean</Strong> & <strong>Modern</strong> Design Standards with Responsive
                                    Approach. Browse the amazing work of our company.</p>

                                <div id="contact-info">
                                    <address>
                                        <strong>Headquaters:</strong><br>
                                        <p>P.O BOX 1234-0100 <br>
                                            Thika, Kenya</p>
                                    </address>
                                    <div id="phone-fax-email">
                                        <p>
                                            <strong>Phone: </strong><span>(+254) 721 584219</span>
                                            <br>
                                            <strong>Mobile: </strong><span>(+254) 727 640223</span>
                                            <br>
                                            <strong>Email: </strong><span>kuyana@gmail.com</span>
                                        </p>
                                    </div>
                                </div>

                                <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon icon-white "><i class="fa fa-twitter"></i></a>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="contact-right">
                                <h3>Contact Us</h3>
                                <form action="#">
                                    <input type="text" name="full-name" placeholder="Full Name" class="form-control">
                                    <input type="text" name="email" placeholder="Email Address" class="form-control">
                                    <textarea rows="5" name="message" placeholder="Message..."
                                              class="form-control"></textarea>

                                    <div id="send-btn">
                                        <a class=" btn btn-lg btn-general btn-white" href="#" role="button">SEND</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="footer-copyrights" class="wow animated bounceInLeft" data-wow-duration="1s"
                                 data-wow-delay=".delay-5s">
                                <p>Copyrights &copy; 2020 All Rights Reserved by Kuyana ENT(K) Ltd.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    </body>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/slick/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/slick/slick/slick.js') }}"></script>
    <script type="text/javascript">
        $('.partners-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000,
            adaptiveHeight: true,
            infinite: true,
            useTransform: true,
            speed: 400,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,

                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
</html>
