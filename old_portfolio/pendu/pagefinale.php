<?php 
	session_start();
	include_once('style.php');
	include_once('connexion.inc');
	$req = $bdd->prepare('INSERT INTO score(login,dates,score,theme,nbmot) VALUES (:login,NOW(),:score,:theme,:nbmots)');
		$req->execute(array(
		'login' => $_SESSION['login'],
		'score' => $_SESSION['score'],
		'theme' => $_SESSION['choix'],
		'nbmots' => $_SESSION['nbmots'],
		));
		$req->closeCursor();
 ?>
 <h1>Le jeu du Pendu version Pokémon</h1>
 <h2>Votre thème était <?php echo $_SESSION['choix']; ?></h2>
 <h2>Votre score est de : <?php echo $_SESSION['score']; ?>/<?php echo $_SESSION['nbmots']; ?></h2>
 <h1><a href="categorie.php">Retourner au départ</a></h1>
</body>
</html>