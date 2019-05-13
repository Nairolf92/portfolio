<?php 
	include_once('connexion.inc');
	$minuscule = $_SESSION['motMystere'];
	$minuscule = strtolower($minuscule);
	$req1 = $bdd->prepare('SELECT indice1 FROM mot WHERE motcle=?');
	$req1->execute(array($minuscule));
	while($resultat =$req1->fetch()){
		$_SESSION['indice1'] = $resultat['indice1'];
	}
	$req1->closeCursor();
?>