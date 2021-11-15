<?php
/*	Classe Circle
*	But: 	Créer un cercle avec un point et un rayon, une fonction calculant son aire, et une fonction déterminant si un point est dans le cercle
*		On rappelera la formule:
*			- calculant l'aire d'un cercle: Pi*rayon²
*			- d'appartenance à un cercle: (xa-xb)²+(ya-yb)²<rayon²
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

class Circle{
	private $point;
	private $radius;

	function __construct(Point $point, int $radius){
		$this->point = $point;
		$this->radius = $radius;
	}

	function area(){
		return pi()*pow($this->radius,2);
	}

	function containsPoint(Point $p){
		return pow($this->point->getX() - $p->getX(),2) + pow($this->point->getY() - $p->getY(),2) < pow($this->radius,2);
	}

	function toString(){
		return "Cercle de centre ".$this->point->toString()." et de rayon ".$this->radius."<br>";
	}
}
?>