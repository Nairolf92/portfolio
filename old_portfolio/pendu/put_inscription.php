<?php
	include_once('connexion.inc');
	$req = $bdd->prepare('INSERT INTO joueur(login,password,email) VALUES (:pseudo,:pass,:mail)');
	$req->execute(array(
	'pseudo' => $login,
	'pass' => $pass,
	'mail' => $email));
	$req->closeCursor();
	?>