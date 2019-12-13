<?php
require ('class/Shape.php');
require ('class/Triangle.php');
require ('class/Square.php');
require ('class/Circle.php');

$square1 = new Square(10, "carré 1"); 

$square1->displayPerimeter();
echo '<br>';
$square1->displayArea();
echo '<br>';


$square2 = new Square(24, "carré 2"); 

$square2->displayPerimeter();
echo '<br>';
$square2->displayArea();
echo '<br>';


$circle1 = new Circle(8, "cercle");

$circle1->displayPerimeter();
echo '<br>';
$circle1->displayArea();
echo '<br>';


$triangle1 = new Triangle(9, 12, 15, "triangle");

$triangle1->displayPerimeter();
echo '<br>';
$triangle1->displayArea();
echo '<br>';
