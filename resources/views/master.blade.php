<!DOCTYPE html>
<html lang="en">

<head>
   @yield('title')
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <style type="text/css">
      section#section_1 {
         background-image: url(images/hero-image.jpg);
         padding: 15rem 0;
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
      }

      section#section_4 {
         background: url(images/image-7.png);
         background-position: center;
         background-size: cover;
         background-repeat: no-repeat;
      }

      section#footer {
         background: url({{asset('images/image-11.png')}});
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         padding: 55px 0px 0px 0;
      }

      section#footer h3 {
         position: relative;
      }

      section#footer h3:after {
         background-image: url(images/wave-head.png);
         content: "";
         width: 100px;
         height: 6px;
         top: 40px;
         left: 0;
         position: absolute;
         background-repeat: no-repeat;
      }
   </style>
    

    @stack('styles')
</head>

<body class="giorgia-home">

    @yield('header')
    @yield('content')
    @yield('footer')    


    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('js/umd/popper.min.html')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <script src="{{asset('js/wow.min.js')}}"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}"></script>
   

    @stack('scripts')

</body>

</html>
