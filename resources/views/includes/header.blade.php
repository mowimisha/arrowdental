
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png">

    <title>@yield('header')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/gallery.css">

    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
    <script src="https://unpkg.com/flatpickr"></script>



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://use.fontawesome.com/e1d6278baf.js"></script>
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
            
  </head>


  <body id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top">
      
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="{{ url('/') }}"><img src="../images/arrow.jpg" class="img-responsive" alt="Image"></a>
        </div>
        <!-- <div id="google_translate_element" class="pull-right" style="width: 80px;"></div><script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'sw', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
        }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
            <li class="main-links"><a class="main-nav" href="{{ url('/') }}">Home</a></li>
            <li class="main-links"><a class="main-nav" href="{{ url('/about') }}">About</a></li>
            <li class="main-links"><a class="main-nav" href="{{ url('/services') }}">Services</a></li>
            <li class="main-links"><a class="main-nav" href="{{ url('/blog') }}">blog</a></li>
            <li class="main-links"><a class="main-nav" href="{{ url('/appointments') }}">Appointments</a></li>

            <li class="main-links"><a class="main-nav" href="{{ url('/contacts') }}">Contacts</a></li>
            <!-- <li>
              <a href="#" class="social-links" target="_blank">
                    <i class="fa fa-facebook fa-stack-2x fa-inverse"></i>
              </a>
            </li>

            <li>
              <a href="#" class="social-links" target="_blank">
                    <i class="fa fa-twitter fa-stack-2x fa-inverse"></i>
                </a>
            </li>&nbsp;

            <li>
              <a href="#" class="social-links" target="_blank">
                  <i class="fa fa-youtube-play fa-stack-2x fa-inverse"></i>
              </a>
            </li>&nbsp; -->
                  
            <li>
              <a href="{{ url('/appointments') }}" type="button" class="btn btn-primary app_btn">Book Appointment</a>
            </li> &nbsp;&nbsp;

            <a class="socials">
              <i class="fa fa-2x fa-facebook"></i>
            </a>

            <a class="socials">
              <i class="fa fa-2x fa-twitter"></i>
            </a>

            <a class="socials">
              <i class="fa fa-2x fa-instagram"></i>
            </a>

            <a class="socials">
              <i class="fa fa-2x fa-youtube-play"></i>
            </a>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>


    </nav>





