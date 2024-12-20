<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Najila Joanne | Portfolio</title>
  <link rel="icon" href="homepage/img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://db.onlinewebfonts.com/c/ec11ddc9fa834d65ab94debb6af73080?family=Zing+Rust+Base" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="homepage/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top justify-content-between align-items-center px-1">
    <div class="container-xl">
      <a class="navbar-brand p-0" href="./">
        <img src="homepage/img/logo.png" alt="Logo" width="30">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbarNav" class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-items navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#contact">Contact</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- Banner -->
  <div class="container-fluid main-container p-0">
    <div class="row">
      <div class="banner-container">
        <img src="homepage/img/background.png" class="banner">
      </div>
    </div>
    <div class="banner-display" style="position: fixed;">
      <img src="homepage/img/wordmark.png" width="600">
    </div>
  </div>

  <!-- About -->
  <div class="container-fluid container-stroke" id="about" style="background-color: #FEF375;">
    <div class="row text-center pt-5 wow animate__animated animate__fadeIn">
      <h1 class="display-4">About Me</h1>
    </div>
    <div class="row justify-content-center align-items-center pt-3 pb-5 wow animate__animated animate__fadeIn" data-wow-delay="0.3s">
      <div class="col-12 col-md-3 col-lg-2 order-2 order-md-1 text-center text-md-end"> 
        <img src="homepage/img/cat.png" width="150" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 col-lg-5 order-1 order-md-2 text-center text-md-start">
        <p class="px-3">
          Hi! I'm Najila, a third-year IT student at the Polytechnic University of the Philippines - Sto. Tomas Campus.
          <br><br>
          I’m currently learning web development, using tools such as HTML, CSS, Bootstrap, and JavaScript to create dynamic and responsive websites. I am also currently studying database administration, using PHP and MySQL to manage data.
          <br><br>
          Below are some of the projects I’ve worked on.
        </p>
      </div>
    </div>
  </div>

  <!-- Projects -->
  <div class="container-fluid container-stroke" id="projects" style="background-color: #ED566A;">
    <div class="row text-center pt-5 wow animate__animated animate__fadeIn">
      <h1 class="display-4">Projects</h1>
    </div>
    <div class="row justify-content-center pt-3 pb-5">
      <div class="col-10">
        <div class="row justify-content-center" id="projectContainer">
          
        </div>
      </div>
    </div>
  </div>

  <!-- Contact -->
  <div class="container-fluid container-stroke" id="contact" style="background-color: #00C5F1;">
    <div class="row text-center pt-5 wow animate__animated animate__fadeIn">
      <h1 class="display-4">Contact</h1>
    </div>
    <div class="row text-center pt-3 wow animate__animated animate__fadeIn" data-wow-delay="0.3s">
      <ul class="nav justify-content-center pb-5 mb-4">
        <li class="nav-item">
          <a href="https://github.com/najilabatistil/" class="nav-link px-5" target="_blank" >
            <button class="btn contact-btn"><i class="bi bi-github h1"></i></button>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.facebook.com/NajilaBatistil/" class="nav-link px-5" target="_blank">
            <button class="btn contact-btn"><i class="bi bi-facebook h1"></i></button>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://www.instagram.com/naaaaajiiii/" class="nav-link px-5" target="_blank">
            <button class="btn contact-btn"><i class="bi bi-instagram h1"></i></button>
          </a>
        </li>
        <li class="nav-item">
          <a href="mailto: najilabatistil1@gmail.com" class="nav-link px-5" target="_blank">
            <button class="btn contact-btn"><i class="bi bi-envelope-at h1"></i></button>
          </a>
        </li>
      </ul>
      <p class="text-center mb-4">© 2024 Najila Joanne Batistil.</p>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="homepage/script.js"></script>
  <script>
    var wow = new WOW({offset: 200});
    wow.init(); 
  </script>
</body>

</html>