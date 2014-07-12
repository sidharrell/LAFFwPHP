<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once 'Vector.class.php';
$vector1 = new Vector(array('1', 2));
$vector2 = new Vector(array('1', '2'));
$vector3 = new Vector(array('1', '3'));
$test = $vector1->testEquality($vector2);
var_dump($test);
$test = $vector1->testEquality($vector3);
var_dump($test);