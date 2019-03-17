<?php

class Bike {
   var $brand;
   var $model;
   var $year;
   var $description;
   var $price;
   var $weight_kg = 0.0;

  function bike_details() {

    return array($this->brand, $this->model, $this->year, $this->description, $this->price);
  }

  function weight_lbs() {

    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {

    $this->weight_kg = floatval($value) / 2.2046226218;

    return;
  }
}

$bike1 = new Bike;
$bike2 = new Bike;

$bike1->brand        = 'Giant';
$bike1->model        = 'Glory';
$bike1->year         = '2018';
$bike1->description  = 'XL and Blue with Yellow Stripe';
$bike1->price        = "$1,000";
$bike1->weight_kg    = 55.888;

$bike2->brand        = 'Specialized';
$bike2->model        = 'Rapid';
$bike2->year         = '2016';
$bike2->description  = 'L and Silver/Blac';
$bike2->price        = "$1,200";
$bike2->weight_kg    = 40.888;

echo implode(', ' , $bike1->bike_details()). "<br/>";
echo $bike1->weight_lbs() . " lbs <br/>";

echo implode(', ' , $bike2->bike_details()). "<br/>";
echo $bike2->weight_lbs() . " lbs <br/>";


$bike2->set_weight_lbs(220 );

echo $bike2->weight_kg . " kgs <br/>";
echo $bike2->weight_lbs() . " lbs <br/>";



 ?>
