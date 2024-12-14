<?php
class IslandCard {
  public $islandID;
  public $name;
  public $shortDesc;
  public $color;
  public $islandImage;
  
  public function __construct($islandID, $name, $shortDesc, $color, $islandImage) {
    $this->islandID = $islandID;
    $this->name = $name;
    $this->shortDesc = $shortDesc;
    $this->color = $color;
    $this->islandImage = $islandImage;
  }

  public function buildCard() {
    $col1 = ($this->islandID % 2 == 0) ? " order-1 order-md-2" : "";
    $col2 = ($this->islandID % 2 == 0) ? " order-2 order-md-1" : "";

    return 
    '
      <div class="col-12 col-lg-10 my-2">
        <a href="view.php?id='.$this->islandID.'">
          <div class="card rounded-3" style="background-color: '.$this->color.'">
            <div class="row d-flex justify-content-center align-items-center p-3 my-auto">
              <div class="col-12 col-md-5 p-3 text-center text-md-start'.$col1.'">
                <div>
                  <h3>
                    '.$this->name.'
                  </h3>
                  <p>
                    '.$this->shortDesc.'
                  </p>
                </div>
              </div>
              <div class="col-12 col-md-5 p-3 text-center text-md-start'.$col2.'">
                <img src="assets/img/'.$this->islandImage.'" class="card-img" alt="'.$this->name.'" style="max-width: 265px;">
              </div>
            </div>
          </div>
        </a>
      </div>
    ';
  }
}

class IslandContent {
  public $islandID;
  public $islandName;
  public $islandImage;
  public $islandColor;
  public $contentImage;
  public $content;
  public $description;

  public function __construct($islandID, $islandName, $islandImage, $islandColor, $contentImage, $content, $description) {
    $this->islandID = $islandID;
    $this->islandName = $islandName;
    $this->islandImage = $islandImage;
    $this->islandColor = $islandColor;
    $this->contentImage = $contentImage;
    $this->content = $content;
    $this->description = $description;
  }

  public function createContent() {
    $alt = str_replace("<br>", "", $this->content);

    return 
    '
      <div class="col-12 col-sm-6 col-lg-4 text-center p-3">
        <div class="img-container">
          <span class="img-text">
            <h4 class="mx-3">
            '.$this->content.'
            </h4>
          </span>
          <img src="assets/img/'.$this->contentImage.'" class="img-responsive rounded-3" alt="'.$alt.'">
        </div>
      </div>
    ';
  }
}

?>