<?php 
	session_start();
	include_once('style.php');
	include_once('connexion.inc');
	$_SESSION['nbmots']++;
	$_SESSION['score']++;

	if ($_SESSION['nbmots'] == 5) {
		header('Location: pagefinale.php');
	}
 ?>
 <h1>Le jeu du Pendu version Pokémon</h1>
 <a><h1>Gagné !</h1></a>
  <?php 
 $req = $bdd->prepare('SELECT definition FROM mot WHERE motcle=?');
 $req->execute(array($_SESSION['motMystere']));
 while($donnees = $req->fetch()){
 	echo $donnees['definition'];
 }
 $req->closeCursor();
  ?>
 <h1><a href="continue.php">Continuer</a></h1>
</body>
</html>