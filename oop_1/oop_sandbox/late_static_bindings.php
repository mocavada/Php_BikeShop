<?php

class Bicycle {

  protected static $wheels = 2;

  public static function wheel_details() {
    $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
    return "It has " . $wheel_string . ".";

  }

}

class Unicycle extends Bicycle {
  protected static $wheels = 1;

}

echo Bicycle::wheel_details() ."<br/>";

echo Unicycle::wheel_details();

echo "<hr/>";

class Sofa {

  protected static $identity = 'Sofa class';

  public static function identity_test() {
    echo 'self:   ' . self::$identity . "<br/>";
    echo 'static: ' . static::$identity . "<br/>";

    echo 'get_class: ' . get_class() . "<br/>";
    echo 'get_called_class: ' . get_called_class() . "<br/>";
  }
}


  class Loveseat extends Sofa {
    protected static $identity = 'Loveseat class';

  }

Sofa::identity_test();
echo "<br/>";
Loveseat::identity_test();










?>
