<?php

class Student {
   var $first_name;
   var $last_name;
   var $country = 'None';


  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}



$student1 = new Student;

$student1->first_name = 'Marc';
$student1->last_name = 'Cavada';

$student2 = new Student;
$student2->first_name = 'Jose';
$student2->last_name = 'Rizal';

echo $student1->full_name() . " " . "<br/>";
echo $student2->full_name() . " " . "<br/>";



$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br/>";

if(method_exists('Student', 'say_hello')) {
  echo "Methods  exist. </br/>";
} else {
    echo "Methods does not exist exist. </br/>";
}

 ?>
