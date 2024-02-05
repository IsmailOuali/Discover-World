<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Discover World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
        <header class="site-header js-site-header">
            <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/">Discover World</a></div>
                <div class="col-6 col-lg-8">


                <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->

                <div class="site-navbar js-site-navbar">
                    <nav role="navigation">
                    <div class="container">
                        <div class="row full-height align-items-center">
                        <div class="col-md-6 mx-auto">
                            <ul class="list-unstyled menu">
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="/addAdv">Creer votre aventure</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </nav>
                </div>
                </div>
            </div>
            </div>
        </header>
        <h1>{{ $aventure->name }}</h1>
        <figure class="img-wrap">
            <img src="/images/storage/{{ $aventure->images[0]->image }}" alt="Free website template" class="img-fluid mb-3">
        </figure>
        <p>{{ $aventure->description }}</p>
        <p>Destination: {{ $aventure->destination->name }}</p>

        <!-- Add any other details you want to display -->

        {{-- <a href="{{ route('welcome') }}">Back to Adventures</a> --}}
            
</body>
</html>