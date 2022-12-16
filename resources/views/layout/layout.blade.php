<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .master,.navbar{
            background: linear-gradient(117.16deg, #00985B 0%, #00985B 0.02%, #00341F 154.28%, #000000 154.29%);
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark text-ligh">
        <div class="container">
          <a class="navbar-brand text-light" href="#">Wikrama Green School</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-light active" aria-current="page" href="#">BERANDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">KEBIJAKAN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">FASILITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light ">PARTNERSHIP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">TEACH AND LEARN</a>
                 <li class="nav-item">
                <a class="nav-link text-light" href="#">FASILITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">GALERY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">KALKULATOR</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   @yield('konten')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
