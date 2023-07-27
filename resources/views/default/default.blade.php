<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("Title")</title>
   
    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
   
    {{-- Bootstrap 5 Cdns --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    {{-- Jquery --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    {{-- FontAwesome cdns --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    {{-- Elegant icons cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/@icon/elegant-icons@0.0.1-alpha.4/elegant-icons.min.css" rel="stylesheet">
   
   {{-- Nice select cdns --}}
   <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css" rel="stylesheet">

   {{-- Owl Carousel cdns --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>

   {{-- Slick nave cdns --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css" />

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>


{{-- Import Index Page --}}
    @yield("Content")







     {{-- Nice select --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    {{-- Owl Carousel cdns --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
     {{-- Slick nav --}} 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js"></script>
    {{-- Custom js --}}
    <script src="{{ asset('js/main.js') }}"></script>  
  
</body>
</html>