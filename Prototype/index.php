<?php

include("Shape.php");

$shape = new Shape();
$shape->setName("Cub");
$shape->setColor("Red");

$triangle = clone $shape;
$triangle->setName("Rock");
$triangle->setColor("Blue");

$square = clone $shape;
$square->setName("Sqr");
$square->setColor("Orange");
echo "</br>";
var_dump($shape);
echo "</br>";
var_dump($triangle);
echo "</br>";
var_dump($square);
