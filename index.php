<?php
require ('class/Shape.php');
require ('class/Triangle.php');
require ('class/Square.php');
require ('class/Circle.php');

$square1 = new Square(10); 

echo "Le périmetre du carré 1 est de " . $square1->perimeter();
echo '<br>';
echo "L'aire du caréé 1 est de " . $square1->area();
echo '<br>';


$square2 = new Square(24); 

echo "Le périmetre du carré 2 est de " . $square2->perimeter();
echo '<br>';
echo "L'aire du caréé 2 est de " . $square2->area();
echo '<br>';


$circle1 = new Circle(8);

echo "Le périmetre du rond 1 est de " . $circle1->perimeter();
echo '<br>';
echo "L'aire du rond 1 est de " . $circle1->area();
echo '<br>';


$triangle1 = new Triangle(9, 12, 15);

echo "Le périmetre du triangle 1 est de " . $triangle1->perimeter();
echo '<br>';
echo "L'aire du triangle 1 est de " . $triangle1->area();
echo '<br>';
