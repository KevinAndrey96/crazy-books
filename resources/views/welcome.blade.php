<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/LOGO.png')}}">
    <title>Crazy Books</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style3.css')}}">
</head>

<body class="antialiased hidden">

    
    <div>
    <!-- partial:index.partial.html -->

    <div class="center" id="onload">
    <div class="book">
      <div class="book__pg-shadow"></div>
      <div class="book__pg"></div>
      <div class="book__pg book__pg--2"></div>
      <div class="book__pg book__pg--3"></div>
      <div class="book__pg book__pg--4"></div>
      <div class="book__pg book__pg--5"></div>
    </div>
  </div>
    <!-- partial -->
       
        <div class="hidden fixed top-0 right-0 px-8 py-4 sm:block">

        </div>





        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Crazy books</title>
        <script src="mapdata.js"></script>
        <script src="countrymap.js"></script>

        </head>


        <div id="map">
        </div>




</div>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        window.onload = function() {
            $('#onload').fadeOut(); // Corrección: fadeOut() en lugar de fadOut()
            $('body').removeClass('hidden'); // Corrección: 'hidden' en lugar de 'hiden'
        };
        </script>
    </html>