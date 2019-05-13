<?php
	include_once('connexionsql.php');
	$req = $bdd->prepare('INSERT INTO membres(pseudo,pass,mail,date_inscription) VALUES (:pseudo,:pass,:mail,CURDATE())');
	$req->execute(array(
	'pseudo' => $pseudo,
	'pass' => $pass,
	'mail' => $mail));
	$req->closeCursor();
	?>