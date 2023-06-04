<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grove | {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
            rel="stylesheet">
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/home-bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/home-css.css" rel="stylesheet">
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="/"> <b> Grove</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <ul class="navbar-nav">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-fill"></i>  Selamat datang, {{ auth()->user()->nama_usaha }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/m/dashboard">Dashboard</a></li>
                  <li><a class="dropdown-item" href="#">belum</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"> Keluar </i></button>
                  </form>
                  </li>
                </ul>
              </li>
              @else
              <li class="nav=item">
                <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person-add"></i> <b>Daftar</b> </a>
              </li>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Mau daftar sebagai apa nih?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row justify-content-center">
                      <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                        <a href="/i/register" type="button"  class="btn btn-outline-primary"><i class="bi bi-cash-coin"></i>   Investor</a>
                        <a href="/m/register" type="button"  class="btn btn-outline-primary"><i class="bi bi-shop"></i>   Mitra</a>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <li class="nav-item">
                  <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> <b>Login</b></a>
              </li>
              @endauth
          </ul>

           
            {{-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
          </div>
        </div>
      </nav>

      <div class="container">
        @yield('container')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>