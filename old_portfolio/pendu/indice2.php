<?php 
	$minuscule = $_SESSION['motMystere'];
	$minuscule = strtolower($minuscule);
	$req2 = $bdd->prepare('SELECT indice2 FROM mot WHERE motcle=?');
	$req2->execute(array($minuscule));
	while($resultat =$req2->fetch()){
		$_SESSION['indice2'] = $resultat['indice2'];
	}
	$req2->closeCursor();
?>