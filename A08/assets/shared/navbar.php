<div class="w3-center d-flex justify-content-center bar">
  <div class="w3-bar">
    <a href="./" class="w3-bar-item w3-button">Home</a>

    <div class="w3-dropdown-click dropdown-center">
      <button class="w3-button dropdown-toggle island-dropdown" type="button" data-bs-toggle="dropdown">Islands</button>
      <ul class="dropdown-menu">
        <?php
        foreach ($islands as $islandInfo) {
          echo "<li><a class='dropdown-item' href='view.php?id=" . $islandInfo->islandID . "'>" . $islandInfo->name . "</a></li>";
        }
        ?>
      </ul>
    </div>
    
    <a href="../" class="w3-bar-item w3-button">My Portfolio</a>
  </div>
</div>