<?php 
	session_start(); 	
	include_once('connexion.inc'); //contient la connexion à la BDD
	include_once('style.php'); // contient le style
	echo "<h1>Meilleurs scores</h1>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Login</th><th>Date</th><th>Score</th><th>Theme</th><th>Nombre de mots</th></tr>";
		$req = $bdd->query('SELECT login,dates,score,theme,nbmot FROM score ORDER BY score DESC LIMIT 0,10');
		while ($donnees = $req->fetch())
		{
			echo "<tr>";
			echo '<td>'.$donnees['login'].'</td>';
			echo '<td>'.$donnees['dates'].'</td>';
			echo '<td>'.$donnees['score'].'</td>';
			echo '<td>'.$donnees['theme'].'</td>';
			echo '<td>'.$donnees['nbmot'].'</td>';
			echo "</tr>";
		}
		echo "</table><br/>";
		if (isset($_SESSION['login'])) {
			echo "<a href=\"categorie.php\">Retourner au jeu</a>";
		}else{
			echo "<a href=\"index.php\">Retourner au jeu</a>";
		}
		$req->closeCursor(); 
	 	?>