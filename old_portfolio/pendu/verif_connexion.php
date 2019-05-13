<?php 
	include_once('connexion.inc');
	$req = $bdd->prepare('SELECT login,password FROM joueur WHERE login = :l AND password = :p');
	$req->execute(array(
		'l' => $login,
		'p' => $pass));
	$resultat = $req->fetch();
	$req->closeCursor();
?>