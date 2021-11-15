<?php
/*	Classe Point
*	But: 	Créer un point avec une abscisse et une ordonnée, ainsi que ses fonctions de récupération, modification et affichage
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

class Point{
	private $x;
	private $y;

	function __construct(int $x, int $y){
		$this->x = $x;
		$this->y = $y;
	}
	/**
	 * Get the value of x
	 */ 
	public function getX()
	{
		return $this->x;
	}

	/**
	 * Set the value of x
	 *
	 * @return  self
	 */ 
	public function setX($x)
	{
		$this->x = $x;

		return $this;
	}

	/**
	 * Get the value of y
	 */ 
	public function getY()
	{
		return $this->y;
	}

	/**
	 * Set the value of y
	 *
	 * @return  self
	 */ 
	public function setY($y)
	{
		$this->y = $y;

		return $this;
	}

	function toString(){
		return "Point: x = ".$this->getX().", y = ".$this->getY()."<br>";
	}
}
?>