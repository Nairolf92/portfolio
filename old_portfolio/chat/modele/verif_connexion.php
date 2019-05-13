<?php 
	include_once('connexionsql.php');
	$req = $bdd->prepare('SELECT id,pseudo,pass FROM membres WHERE pseudo = :pseudo AND pass = :pass');
	$req->execute(array(
		'pseudo' => $pseudoc,
		'pass' => $passc ));
	$resultat = $req->fetch();
	$req->closeCursor();
?>