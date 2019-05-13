<?php 
	session_start();
	include_once('style.php');
	include_once('connexion.inc');
	$_SESSION['nbmots']++;
	if ($_SESSION['score'] == 0) {
	}else{
		$_SESSION['score']--;
	}

	if ($_SESSION['nbmots'] == 5) {
		header('Location: pagefinale.php');
	}
 ?>
 <h1>Le jeu du Pendu version Pokémon</h1>
 <img src='0.png'/>
 <h1>Perdu :(</h1>
 <?php 
 $req = $bdd->prepare('SELECT definition FROM mot WHERE motcle=?');
 $req->execute(array($_SESSION['motMystere']));
 while($donnees = $req->fetch()){
 	echo $donnees['definition'];
 }
 $req->closeCursor();
  ?>
 <a href="continue.php"><h2>Continuer</h2></a>
</body>
</html>