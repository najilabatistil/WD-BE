<?php
  include("assets/php/connect.php");
  include("assets/php/classes.php");
  include("assets/php/islands.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Islands of Personality</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles.css">
</head>

<body>

  <!-- Header -->
  <header class="container w3-display-container" style="width: 100%; height: 100%;">
    <div class="row d-flex justify-content-center align-items-center h-100 mx-3">
      <div class="col-12 col-lg-5 mx-2 w3-display-container">
        <img src="assets/img/circles.png" class="img-fluid">
        <div class="text-center text-lg-start w3-display-left">
          <h1 class="display-5">My Islands of Personality</h1>
          <a class="header-link" href="#islands">Explore →</a>
        </div>
      </div>
      <div class="col-12 col-lg-5 mx-2 text-center d-none d-lg-block">
        <img src="assets/img/riley.png" class="img-fluid" alt="Riley illustration">
      </div>
    </div>
  </header>

  <!-- Navbar -->
  <?php include("assets/php/navbar.php");?>

  <!-- Page content -->
  <div class="w3-content w3-padding-large w3-margin-top" id="islands">

    <!-- Island Cards -->
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <?php 
          foreach($islands as $islandCard) {
            echo $islandCard->buildCard();
          }
        ?>
      </div>
    </div>

    <!-- End page content -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>