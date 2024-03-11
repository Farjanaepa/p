<?php
require "user.php";
require "student.php";
require "car.php";

use Raihan\User; //[bind]
use Shakil\User as Student;
use Carname\User as Student2;
$object = new Student2();
$object->info();
echo "<br>";
$obj = new User();
$obj->show();
echo "<br>";
$ob = new Student();
$ob->display();

?>