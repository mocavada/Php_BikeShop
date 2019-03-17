<?php

class Bike {

   public static $brand;
   public static $model;
   public static $year;
   public static $description;
   private static $weight_kg = 1;
   protected static $wheels = 2;
   public static $used = false;

   public $category;

   const BIKE_CATEGORY = ['Road', 'Mountain', 'Cruiser', 'City', 'BMX'];
   public static $instance_count = 0;



  public function name() {
    return $this->brand . " " . $this->model . "( " . $this->year . " )";
  }

  public static function wheel_details() {
    $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
    return "It has " . $wheel_string . ".";
  }



  public static function count() {
    return self::$instance_count;
  }

  public static function create() {
    $class_name = get_called_class();
    $obj = new $class_name;
    self::$instance_count++;
    return $obj;
  }

  public function category() {


  }

  public static function wheels_type() {
    echo "Brand New";

  }

}

class Unicyle extends Bike {
  // visibility match property being overriden
  protected static $wheels = 1;


  public static function wheels_type() {
    if(self::$used == 0) {
      echo "Used Bicycle";
    } else {
      parent::wheels_type();
    }
  }

}


$test = new Bike;

echo 'Categories :' . implode(', ', Bike::BIKE_CATEGORY) . '<br/>';
$test->category = Bike::BIKE_CATEGORY[2];
echo 'Category :' . $test->category . '<br/>';

echo '<hr/>';

echo 'Bike Count ' . Bike::$instance_count . '<br/>';
echo 'Unicyle Count ' . Unicyle::$instance_count . '<br/>';

$bike = Bike::create();
$uni = Unicyle::create();

echo 'Bike Count ' . Bike::$instance_count . '<br/>';
echo 'Unicyle Count ' . Unicyle::$instance_count . '<br/>';

Bike::wheels_type();
echo "<br/>";
Unicyle::wheels_type();

echo "<br/>";
Bike::$used = 0;
Unicyle::wheels_type();


echo '<hr/>';

// Bike::create();
// Bike::create();
// Bike::create();
//
// echo Bike::count() . '<br/>';
//
// echo '<hr/>';
//
// echo Bike::wheel_details() . '<br/>';
// echo Unicyle::wheel_details();


// $trek               = new Bike;
// $trek->brand        = 'Giant';
// $trek->model        = 'Glory';
// $trek->year         = '2018';
//
// $uni                = new Unicyle;
//
//
// echo "Bicycle: " . $trek->wheel_details() . "<br/>";
// echo "Unicycle: " . $uni->wheel_details() . "<br/>";
// echo "<hr />";
//
// echo "Set weight using kg<br />";
// $trek->set_weight_kg(1);
// echo $trek->weight_kg() . "<br />";
// echo $trek->weight_lbs() . "<br />";
// echo "<hr />";
//
// echo "Set weight using lbs<br />";
// $trek->set_weight_lbs(2);
// echo $trek->weight_kg() . "<br />";
// echo $trek->weight_lbs() . "<br />";
// echo "<hr />";
//
// echo "Set weight for Unicycle<br />";
// $uni->set_weight_kg(3);
// echo $uni->weight_kg() . "<br />";
// echo $uni->weight_lbs() . "<br />";
// echo "<hr />";


 ?>
