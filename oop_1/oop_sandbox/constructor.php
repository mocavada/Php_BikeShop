<?php

class Bicycle {

  public function __construct() {
    self::$instance_count++;
  }

  public static function create() {

    $obj = new Static;
    self::$instance_count++;
    return $obj;
  }

}

class Sofa {
  public static $instance_count = 0;

  public $seats = 3;
  public $arm = 2;

}

class Couch extends Sofa {
  var $arms = 0;
}

class Loveseat extends Sofa {
  var $seat = 2;
}

$sofa = new Sofa();
echo 'Sofa: </br>';
echo '- seats: ' . $sofa->seats . '<br/>';
echo '- arms: ' . $sofa->arms . '<br/>';
echo '<br/>';

$couch = new Coach();
echo 'Coach: </br>';
echo '- seats: ' . $couch->seats . '<br/>';
echo '- arms: ' . $couch->arms . '<br/>';
echo '<br/>';

$loveseat = new Loveseat();
echo 'Coach: </br>';
echo '- seats: ' . $loveseat->seat . '<br/>';
echo '- arms: ' . $loveseat->seat . '<br/>';
echo '<br/>';




 ?>
