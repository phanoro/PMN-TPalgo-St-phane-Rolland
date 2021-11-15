<?php
/*	Programme TestHippopotamus
*	But: 	Instancier 2 hippopotames
*		Les faire combattre
*		Créer un cycle de 3 semaines (21 jours) dans lequel on
*			- crée un cycle de 15 heures dans lequel l'hippopotame:
*				- mange 2 fois
*				- nage 3 fois
*			- affiche tous les soirs l'état de l'hippopotame
*	Auteur: Stéphane Rolland
*	Date:	15/11/2021
*/

require_once "Hippopotamus.php";
$hippo1 = new Hippopotamus("Hippo", 150000, 3.75);
$hippo2 = new Hippopotamus("Potame", 150000, 5.42);

$hippo1->fight($hippo2);

for($i=0;$i<21;$i++){
	for($j=0;$j<21;$j++){
		$hippo1->eat();
		$hippo1->eat();
		$hippo1->swim();
		$hippo1->swim();
		$hippo1->swim();
	}
	echo $hippo1->toString();
}
?>