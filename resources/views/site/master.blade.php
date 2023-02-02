<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>@yield('titel',env('APP_NAME'))</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Corporate Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Rappo HTML Template v1.0">

  <!-- bootstrap -->
  <link rel="stylesheet" href="{{asset('siteasset/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Animate -->
  <link rel="stylesheet" href="{{asset('siteasset/plugins/animate-css/animate.css')}}">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="{{asset('siteasset/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('siteasset/plugins/fonts/Pe-icon-7-stroke.css')}}">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="{{asset('siteasset/plugins/themify/css/themify-icons.css')}}">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="{{asset('siteasset/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('siteasset/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('siteasset/css/style.css')}}">
  @yield('style')

  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body id="top-header">

<!-- LOADER TEMPLATE -->
<div id="page-loader">
  <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->


<!-- NAVBAR
    ================================================= -->
<nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
  <div class="container">
    <a class="navbar-brand" href="{{ route('site.index') }}">
      <h3>Rappo</h3>
    </a>
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>

    <!-- Collapse -->
    <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
      <!-- Links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
            <a href="{{ route('site.index') }}" class="nav-link js-scroll-trigger">
              Home
            </a>
          </li>

        <li class="nav-item ">
          <a href="{{ route('site.about') }}" class="nav-link js-scroll-trigger">
            About
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('site.service') }}" class="nav-link js-scroll-trigger">
            Services
          </a>
        </li>
        <li class="nav-item ">
          <a href="{{ route('site.pricing') }}" class="nav-link js-scroll-trigger">
            Pricing
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{ route('site.project') }}" class="nav-link js-scroll-trigger">
            Projects
          </a>
        </li>

        <li class="nav-item ">
          <a href="{{ route('site.contact') }}" class="nav-link">
            Contact
          </a>
        </li>
      </ul>
    </div> <!-- / .navbar-collapse -->
  </div> <!-- / .container -->
</nav>

@yield('content')

 <footer class="section " id="footer">
   <div class="overlay footer-overlay"></div>
   <!--Content -->
   <div class="container">
     <div class="row justify-content-start">
       <div class="col-lg-4 col-sm-12">
         <div class="footer-widget">
           <!-- Brand -->
           <a href="{{ route('site.index') }}" class="footer-brand text-white">
             Rappo
           </a>
           <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum
             dolor sit amet, consectetur adipisicing elit.</p>
         </div>
       </div>

       <div class="col-lg-3 ml-lg-auto col-sm-12">
         <div class="footer-widget">
           <h3>Account</h3>
           <!-- Links -->
           <ul class="footer-links ">
             <li>
               <a href="#!">
                 Terms and conditions
               </a>
             </li>
             <li>
               <a href="#!">
                 Privacy policy
               </a>
             </li>
             <li>
               <a href="#!">
                 Affiliate services
               </a>
             </li>
             <li>
               <a href="#!">
                 Help and support
               </a>
             </li>
             <li>
               <a href="#!">
                 Frequently Asked Question
               </a>
             </li>
           </ul>
         </div>
       </div>


       <div class="col-lg-2 col-sm-6">
         <div class="footer-widget">
           <h3>About</h3>
           <!-- Links -->
           <ul class="footer-links">
            <li>
              <a href="{{ route('site.about') }}">
                About Us
              </a>
            </li>
             <li>
               <a href="{{ route('site.service') }}">
                 Services
               </a>
             </li>
             <li>
               <a href="{{ route('site.pricing') }}">
                 Pricing
               </a>
             </li>
             <li>
               <a href="{{ route('site.project') }}">
                Recent Projects
               </a>
             </li>

             <li>
               <a href="{{ route('site.contact') }}">
                 Contact
               </a>
             </li>
           </ul>
         </div>
       </div>

       <div class="col-lg-2 col-sm-6">
         <div class="footer-widget">
           <h3>Socials</h3>
           <!-- Links -->
           <ul class="list-unstyled footer-links">
             <li><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f"></i>Facebook</a></li>
             <li>
               <a href="https://www.twitter.com/themefisher"><i class="fab fa-twitter"></i>Twitter
               </a></li>
             <li><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p"></i>Pinterest
               </a></li>
             <li><a href="https://themefisher.com/"><i class="fab fa-linkedin"></i>linkedin
               </a></li>
             <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="fab fa-youtube"></i>YouTube
               </a></li>
           </ul>
         </div>
       </div>
     </div> <!-- / .row -->


     <div class="row text-right pt-5">
       <div class="col-lg-12">
         <div class="overflow-hidden">
           <!-- Copyright -->
          <p class="footer-copy">
            Copyright &copy; <script>var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
          </script>. Designed &amp; Developed by <a class="current-year" href="https://themefisher.com/">Themefisher</a>
          </p>
         </div>
       </div>
     </div> <!-- / .row -->
   </div> <!-- / .container -->
 </footer>


 <!--  Page Scroll to Top  -->

 <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
   <i class="fa fa-angle-up"></i>
 </a>

  <!--
  Essential Scripts
  =====================================-->
  <!-- jQuery -->
  <script src="{{asset('siteasset/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('siteasset/plugins/bootstrap/bootstrap.min.js')}}"></script>
  <!-- Slick Slider -->
  <script src="{{asset('siteasset/plugins/slick-carousel/slick/slick.min.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{asset('siteasset/plugins/google-map/gmap.js')}}"></script>

  <script src="{{asset('siteasset/js/script.js')}}"></script>
  @yield('script')

</body>
</html>
