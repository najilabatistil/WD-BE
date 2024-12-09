<?php
  include("assets/php/connect.php");
  include("assets/php/classes.php");
  include("assets/php/islandsQuery.php");

  $islandID = $_GET['id'];
  $contentList = array();

  if(isset($_GET['id'])) {
    $contentQuery = "SELECT *, islandsofpersonality.image AS islandImage, islandsofpersonality.color AS islandColor, islandcontents.image AS contentImage FROM islandcontents JOIN islandsofpersonality ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID WHERE islandcontents.islandOfPersonalityID = '$islandID'";
    $contentResult = executeQuery($contentQuery);

    if(mysqli_num_rows($contentResult) > 0) {
      while($contentRow = mysqli_fetch_assoc($contentResult)) {
        $islandContent = new islandContent(
          $islandID,
          $contentRow["name"],
          $contentRow["islandImage"],
          $contentRow["islandColor"],
          $contentRow["contentImage"],
          $contentRow["content"],
          $contentRow["longDescription"]
        );

        array_push($contentList, $islandContent);
      }
    } else {
      header("Location: ./");
    }
  } else {
    header ('Location: ./');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $islandContent->islandName ?> | My Islands of Personality</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles.css">
</head>

<body>

  <!-- Header -->
  <header class="container w3-display-container header-container">
    <img src="assets/img/circles.png" class="header-img img-fluid d-none d-lg-block">
    <div class="row d-flex justify-content-center align-items-center h-100 mx-3">
      <div class="col-12 col-lg-5 mx-2 w3-display-container">
        <img src="assets/img/circles.png" class="img-fluid d-block d-lg-none">
        <div class="text-center text-lg-start w3-display-left">
          <h1 class="display-5">
            <?php echo $islandContent->islandName ?>
          </h1>
          <p>
            <?php echo $islandContent->description ?>
          </p>
          <a class="header-link" href="#content">Browse →</a>
        </div>
      </div>
      <div class="col-12 col-lg-5 mx-2 text-center d-none d-lg-block">
        <img src="assets/img/<?php echo $islandContent->islandImage ?>" class="img-fluid" alt="<?php echo $islandContent->islandName ?>">
      </div>
    </div>
  </header>

  <!-- Navbar -->
  <?php include("assets/php/navbar.php");?>

  <!-- Page content -->
  <div class="container-fluid" id="content" style="position: relative; background-color: <?php echo $islandContent->islandColor ?>">

    <!-- Main Content -->
    <div class="container">
      <div class="row d-flex justify-content-center py-4">
        <div class="col-10">
          <div class="row justify-content-center">
            <?php
              foreach($contentList as $content) {
                echo $content->createContent();
              }
            ?>
          </div>
        </div>
      </div>
    </div>

    <!-- End page content -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>