<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/LOGO.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">

    <title>
        Crazy Books
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
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
</head>

<body class="g-sidenav-show  bg-gray-200">
    
    
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" / " target="_blank">
                <img src="{{asset('img/LOGO.png')}}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Crazy Books</span>
            </a>
        </div>
        
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="/users/create">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Crear usuario</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/books/create">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Crear libro</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/evidences">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Evidencias</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/users">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Profesores</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Mapa Interactivo</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="/regions">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Regiones</span>
                    </a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Cuenta</h6>
                </li>

                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="nav-link text-white " href="{{ route('logout') }}">
                            <div class="text-white text-center d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">login</i>
                            </div>
                            <button type="" class="btn mt-3 text-white">Salir</button>
                        </a>
                    </form>
                </li>

                
            </ul>
        </div>

        
        
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        
<nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none">
    <a class="navbar-brand" href="/">
      
      <span class="ms-1 font-weight-bold">Crazy Books</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <img width="80px" src="{{asset('img/LOGO.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/users/create">Crear usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/books/create">Crear libro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/evidences">Evidencias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users">Profesores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">Mapa Interactivo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/regions">Regiones</a>
        </li>
        <li class="nav-item">
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="material-icons opacity-10">login</i>
              <button type="submit" class="btn mt-3">Salir</button>
            </a>
          </form>
        </li>
      </ul>
    </div>
  </nav>

        <!-- End Navbar -->
        @yield('navbar')

        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            Crazy Books <i class="fa fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/material-dashboard.min.js?v=3.1.0')}}"></script>
</body>

</html>