<?php

require('class/Shape.php');
//partie concernant le carré.
require('class/Square.php');
//partie concernant le rond.
require('class/Round.php');
//partie concernant le triangle.
require('class/Triangle.php');


$square1 = new Square(10, "carré 1"); //10 = longueur d'un côté.

$square1->displayPerimeter('mm', 'cm');
echo '<br>';
$square1->displayArea('mm', 'cm');
echo '<br>';


$square2 = new Square(24, "carré 2 lol"); //10 = longueur d'un côté.

$square2->displayPerimeter('mm', 'cm');
echo '<br>';
$square2->displayArea('mm', 'cm');
echo '<br>';



$round1 = new Round(8, "rondoudou");  //8 = rayon du cercle.

$round1->displayPerimeter('mm', 'cm');
echo '<br>';
$round1->displayArea('mm', 'cm');
echo '<br>';


$triangle1 = new Triangle(9, 12, 15, "triangle de feu");  // côtés
$triangle1->displayPerimeter('mm', 'cm');
echo '<br>';
$triangle1->displayArea('mm', 'cm');
echo '<br>';




/*calcul perimetre
- carré 10 de côté : 4*10 = 40unité
- rond 8 de rayon : 2*π*8 = 50.3 unité
- carré 24 de côté :4*24 = 96 unité */

?>
