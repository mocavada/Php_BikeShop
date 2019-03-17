<?php

class Member {
   var $first_name;
   var $last_name;
   var $email_address;
   var $password;

  function member_details() {
    return array($this->first_name, $this->last_name, $this->email_address, $this->password, $this->user_type);
  }

}

class Seller extends Member {
  var $user_type = 0;
  var $is_selling = true;


}

class Product extends Seller {

  var $product_id;
  var $product_type;
  var $product_name;
  var $product_description;
  var $product_image;
  var $product_price;

}


class Buyer extends Product {
  var $user_type = 1;

}


class Cart extends Buyer {
  var $order_list; //array of product id

}

class Checkout extends Cart {
  var $street_address;
  var $city;
  var $state;
  var $country;


}


$check_member = new Member;
$check_buyer  = new Buyer;

$check_member->first_name     =  $_POST['firstname'];
$check_member->last_name      =  $_POST[ 'lastname' ];
$check_member->email_address  =  $_POST[ 'email' ];
$check_member->password       =  $_POST[ 'password' ];
$check_member->user_type      =  $_POST[ 'user' ];

echo implode(' , ' , $check_member->member_details()). "<br/>";



if($check_buyer->user_type) {
  echo "You're a Buyer";
}


//$bike1->weight_kg    = 55.888;


include('sign-up.php');


 ?>
