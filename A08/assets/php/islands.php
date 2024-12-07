<?php
  $islands = array();

  $islandsQuery = "SELECT * FROM islandsofpersonality";
  $islandsResult = executeQuery($islandsQuery);

  while ($islandRow = mysqli_fetch_array($islandsResult)) {
    $island = new islandCard (
      $islandRow["islandOfPersonalityID"],
      $islandRow["name"],
      $islandRow["shortDescription"],
      $islandRow["color"],
      $islandRow["image"]
    );

    array_push($islands, $island);
  }
?>