<?php  
	include_once('connexion.inc');
	$req = $bdd->prepare('SELECT login FROM joueur WHERE login= :pseudo');
	$req->execute(array(
		'pseudo' => $login));
	$count = $req->rowCount(); // on compte si le pseudo est bien présent ou non
	$req->closeCursor();
?>