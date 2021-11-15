<?php
/*	Classe Hippopotamus
*	But: 	Créer un hippopotame, le faire manger, nager, se battre
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

class Hippopotamus{

	private $name;
	private $weight;
	private $tusksSize;

	public function __construct(string $name, int $weight, float $tusksSize){
		$this->name = $name;
		$this->weight = $weight;
		$this->tusksSize = $tusksSize;
	}
	
	//fonction nager
	function swim(){
		$this->weight = $this->weight-300;
	}
	
	//fonction manger
	function eat(){
		$this->weight = $this->weight+1000;
	}

	//fonction combattre, comparaison de la taille des défenses
	function fight(Hippopotamus $hippo){
		if($this->tusksSize > $hippo->tusksSize){
			echo $this->name." gagne!<br>";
		}
		elseif($this->tusksSize < $hippo->tusksSize){
			echo $hippo->name." gagne!<br>";
		}
		else{
			echo "Match nul<br>";
		}
	}

	function toString(){
		return "Je m'appelle ".$this->name.", je pèse ".$this->weight."g et mes défenses mesurent ".$this->tusksSize."m.<br>";
	}
}
?>