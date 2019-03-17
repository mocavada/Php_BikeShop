<?php

class Chef {

  public static function make_dinner() {
    echo "Cook food. <br/>";
  }

}

class AmateurChef extends Chef {

  public static function make_dinner() {

    echo "Read recipe. <br/>";
    parent::make_dinner();
    echo "Clean up mess. <br/>";
  }
}

echo "Chef. <br/>";
Chef::make_dinner();
echo "<br/>";
echo "Amateur Chef. <br/>";
AmateurChef::make_dinner();

echo "<hr/>";

class Image {

  public static $resizing_enabled = true;

  public static function geometry() {
    echo "800x600";
  }

}

class ProfileImage extends Image {

  public static function geometry() {
    if(self::$resizing_enabled) {
      echo "100x100";
    } else {
      parent::geometry();
    }
  }
}

Image::geometry();
echo "<br/>";
ProfileImage::geometry();

echo "<br/>";
Image::$resizing_enabled = false;
ProfileImage::geometry();








?>
