<?php
	include_once('connexionsql.php');
	$reponse = $bdd->query('SELECT id,pseudo,message FROM chat ORDER BY id DESC LIMIT 10');
	while ($donnees = $reponse->fetch())
		{
			echo '<p id="p1"><strong>' . $donnees['pseudo'] .' : </strong>'. $donnees['message'] .'</p>';
		}
	$reponse->closeCursor();
?>