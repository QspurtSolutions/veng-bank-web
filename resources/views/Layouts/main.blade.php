<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <meta name="author" content="iqbalhossan99" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="description" content="@yield('description')" />
   <meta name="keywords" content="@yield('keywords')" />
   <title>@yield('title')</title>
   <meta name="description" content="Welcome to Vengara service co-operative rural bank Ltd  No F1186. has registered on 12.05.1956 and started functioning on 06.12.1956" />
    <meta name="Robots" content="INDEX,FOLLOW" />
    <meta name="rating" content="General" />
    <meta name="creator" content="vfox infotech" />
    <meta name="publisher" content="vfox infotech" />
    <meta name="google-site-verification" content="zZALLuJyeXGOxRkyrzzR-3FhFZEbAs2_PAcy0NrEGLY" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
    <link href=" {{ asset('vengara/css/bootstrap.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('vengara/css/font-awesome.css') }} " rel="stylesheet" type="text/css">
    <link href="{{ asset('vengara/css/plugin/owl.carousel.css') }} " rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="{{ asset('vengara/css/settings.css') }} " type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('vengara/css/layers.css') }} " type="text/css" rel="stylesheet" media="screen">
    <!--Main Slider End-->
    <link href="{{ asset('vengara/css/style.css') }} " rel="stylesheet">
    <link href="{{ asset('vengara/css/bootsnav2.css') }} " rel="stylesheet">
    <link href="{{ asset('vengara/css/index2.css') }} " rel="stylesheet">
    <!--    <link href="box/assets/css/bootstrapTheme.css" rel="stylesheet">-->
    <link href="{{ asset('vengara/css/custom.css') }} " rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="{{ asset('vengara/box/owl-carousel/owl.carousel.css') }} " rel="stylesheet">
    <link href="{{ asset('vengara/box/owl-carousel/owl.theme.css') }} " rel="stylesheet">
    <!--Light box-->
    <!--- Schema Markup --->
   <script type="application/ld+json">
   {
   "@context": "https://schema.org/",
   "@type": "WebSite",
   "name": "Vengara Service Bank",
   "url": "https://vengaraservicebank.com",
   "potentialAction": {
   "@type": "SearchAction",
   "target": "{search_term_string}",
   "query-input": "required name=search_term_string"
   }
   }
   </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155994404-3"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155994404-3');
      </script>
    
    
    
    



   @stack('css')
</head>

<body>

@include('components.header')



   




   @yield('content')







   @include('Layouts.footer')

   
<!-- End of Statcounter Code -->
<script type="text/javascript">
var sc_project=12136429; 
var sc_invisible=1; 
var sc_security="452205d6"; 
var scJsHost = "https://";
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>").style.Color = '#fff';;
</script>




    <script src="{{ asset('vengara/js/jquery-1.12.4.min.js') }} " type="text/javascript"></script>
    <!-- Easing Effect Js -->
    <script src="{{ asset('vengara/js/plugin/jquery.easing.js') }} " type="text/javascript"></script>
    <!-- bootstrap Js -->
    <script src="{{ asset('vengara/js/bootstrap.min.js') }} " type="text/javascript"></script>
    <!-- fancybox Js -->
    <script src="{{ asset('vengara/js/jquery.mousewheel-3.0.6.pack.js') }} " type="text/javascript"></script>
    <script src="{{ asset('vengara/js/jquery.fancybox.pack.js') }} " type="text/javascript"></script>
    <!-- carousel Js -->
    <script src="{{ asset('vengara/js/plugin/owl.carousel.js') }} " type="text/javascript"></script>
    <!-- imagesloaded Js -->
    <script src="{{ asset('vengara/js/imagesloaded.pkgd.min.js') }} " type="text/javascript"></script>
    <!-- Accordion Js -->
    <script type="text/javascript" src="{{ asset('vengara/js/jquery.accordion.js') }} "></script>

    <!-- masonry,isotope Effect Js -->
    <script src="{{ asset('vengara/js/imagesloaded.pkgd.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('vengara/js/isotope.pkgd.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('vengara/js/masonry.pkgd.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('vengara/js/jquery.appear.js') }} " type="text/javascript"></script>
    <!-- parallax Js -->
    <script src="{{ asset('vengara/js/jquery.parallax-1.1.3.js') }} " type="text/javascript"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="{{ asset('vengara/js/jquery.themepunch.tools.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/js/jquery.themepunch.revolution.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/extensions/revolution.extension.slideanims.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/extensions/revolution.extension.layeranimation.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/extensions/revolution.extension.navigation.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/extensions/revolution.extension.parallax.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('vengara/js/jquery.revolution.js') }} "></script>
    <!-- custom Js -->
    <script src="{{ asset('vengara/js/custom.js') }} " type="text/javascript"></script>
   <script src="{{ asset('vengara/box/owl-carousel/owl.carousel.min.js') }} "></script>


<script type="text/javascript">
$(window).load(function() {
  setTimeout(function() { // Remove this on production
      $(".block").fadeOut();
      $(".lds-ring").fadeOut();
      //$(".lines").fadeOut();
      setTimeout(function() {
          $(".block").remove();
          $(".lds-ring").remove();
         
      }, 200);
  }, 200);
});
</script>


<script type="text/javascript">
$(document).ready(function() {
  var width_in = $("#scroll .in").width();
  var width_scr = $("#scroll").width();

  scroll();
  function scroll() {
    $("#scroll .in").css({ left: width_in }).animate({
      left: "-=" + (width_scr + width_in)
    }, 15000, "linear", function() {
      scroll();
    });
  }

  console.log(width_scr);
});
</script>

   @stack('js')



</body>
</html>