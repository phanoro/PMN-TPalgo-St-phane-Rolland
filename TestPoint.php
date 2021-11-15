<?php
/*	Programme TestPoint
*	But: 	Instancier un point avec une abscisse et une ordonnée et tester ses fonctions
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

require_once "point.php";
$a = new Point(4,2);
echo $a->toString();
$a->setX(6);
$a->setY(9);
echo $a->toString();
?>