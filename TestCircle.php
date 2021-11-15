<?php
/*	Programme Circle
*	But: 	Instancier un cercle avec un point et un rayon, et tester ses fonctions
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

require_once "Point.php";
require_once "Circle.php";
$cercle = new Circle(new Point(6,9), 5);
echo $cercle->area()."<br>";

//n'appartient pas au cercle
if($cercle->containsPoint(new Point(4,2))){
	echo "Ce point appartient au cercle<br>";
}
else{
	echo "Ce point n'appartient pas au cercle<br>";
}

//appartient au cercle
if($cercle->containsPoint(new Point(5,5))){
	echo "Ce point appartient au cercle<br>";
}
else{
	echo "Ce point n'appartient pas au cercle<br>";
}
echo $cercle->toString();
?>