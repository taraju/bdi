<?php
/**
 * Class PageData
 */
class PageData
{
  public $title = "";
  public $content = "";
  public $css = "";
  public $js = "";

  // tambah css file
  public function addCSS($href)
  {
    $this->css .= "<$href />";
  }

  //tambah js file
  public function addJs($href)
  {
    $this->js .= "<$href />";
  }
}

 ?>
