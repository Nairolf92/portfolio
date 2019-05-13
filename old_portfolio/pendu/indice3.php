<?php 
	$minuscule = $_SESSION['motMystere'];
	$minuscule = strtolower($minuscule);
	$req3 = $bdd->prepare('SELECT indice3 FROM mot WHERE motcle=?');
	$req3->execute(array($minuscule));
	while($resultat =$req3->fetch()){
		$_SESSION['indice3'] = $resultat['indice3'];
	}
	$req3->closeCursor();
?>