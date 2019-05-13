<?php  
	include_once('connexionsql.php');
	$req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo= :pseudo');
	$req->execute(array(
			'pseudo' => $pseudo));

	$count = $req->rowCount(); // on compte si le pseudo est bien présent ou non
	$req->closeCursor();
?>