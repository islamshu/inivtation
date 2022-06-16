<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Waad & Wesam Wedding Invitation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('front/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vegas.slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="{{asset('front/js/respond.min.js"')}}></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-heart">
            <div></div>
        </div>
    </div>
    <!-- Main -->
    <div id="oliven-page"> <a href="#" class="js-oliven-nav-toggle oliven-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->

        <!-- Content Section -->
        <div id="oliven-main">
            <!-- Header & Slider -->
            <aside id="home" class="hero-section">
                <div class="container hero-inner h-100">
                    <div class="row h-100">
                        <div class="col-md-12 text-center">
                            <h1 class="hero-title">Waad & Wesam</h1>
                            <p class="hero-subtitle">15 July, 2022 </p>

                        </div>
                    </div>
                </div>
            </aside>

            <!-- Countdown -->
            <div id="countdown" class="section-padding bg-img bg-fixed" style="    background-color: black;">
                <div class="container">
                    <div class="row">
                        <div class="section-head col-md-12">
                            <h4>We will become a family in</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><span id="days"></span>Days</li>
                                <li><span id="hours"></span>Hours</li>
                                <li><span id="minutes"></span>Minutes</li>
                                <li><span id="seconds"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Story -->

            <!-- Confirmation -->
            {{-- <div id="rsvp" class="section-padding bg-img bg-fixed" data-background="{{asset('front/images/banner-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 bg-white p-40"> <span class="oliven-title-meta text-center">Will you attend?</span>
                            <h2 class="oliven-title text-center">R.S.V.P</h2>
                            <br>
                            <form class="contact__form" method="post" action="{{ route('store_user_new') }}" >
                                <!-- form message -->
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" >
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>
                                <!-- form element -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" placeholder="Name" required> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" placeholder="Email" required> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" class="form-control" placeholder="Phone" required> </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="people_number" type="number"  id="people_number"class="form-control" placeholder="Number of Guests" required> </div>
                                    </div>
                                    <div id="mydiv" style="    width: 100%;
                                    margin: 20px;"></div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input name="submit" type="submit" class="btn buttono" value="SEND"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Gift Registry -->
            {{-- <div id="gift" class="gift-section gift">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 mb-30">
                            <br> <span class="oliven-title-meta">Gift</span>
                            <h2 class="oliven-title">Gift Registry</h2>
                        </div>
                        <div class="col-md-9 owl-carousel owl-theme">
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/1.jpg')}}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/2.jpg')}}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/3.jpg')}}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/4.jpg')}}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/5.jpg')}}" alt=""></a>
                            </div>
                            <div class="client-logo">
                                <a href="#"><img src="{{asset('front/images/gift/6.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Footer -->
       
        </div>
        <!-- jQuery -->
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('front/js/sticky-kit.min.js')}}"></script>
        <script src="{{asset('front/js/isotope.js')}}"></script>
        <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/vegas.slider.min.js')}}"></script>
        <script src="{{asset('front/js/main.js')}}"></script>
        <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
        <script>
            $(document).ready(function() {
                $('#home').vegas({
                    slides: [{
                        src: "{{asset('front/images/slider.jpg')}}"
                    }, {
                        src: "{{asset('front/images/slider2.jpg')}}"
                    }, {
                        src: "{{asset('front/images/slider3.jpg')}}"
                    }, {
                        src: "{{asset('front/images/slider4.jpg')}}"
                    }],
                    overlay: true,
                    transition: 'fade2',
                    animation: 'kenburnsDownLeft',
                    transitionDuration: 1000,
                    delay: 10000,
                    animationDuration: 10000
                });
            });
        </script>
    </div>
<script>
$(document).ready(function(){
      var c = 0;

      $("#people_number").change(function(){
        c = $("#people_number").val();

        $("#mydiv").html("");

        for(i=0;i<c;i++){

              $("#mydiv").append('<input name="gust[]" type="text" class="form-control" placeholder="people number in English'+i+'" required>');
        }
      });

      

  });
</script>
</body>


</html>