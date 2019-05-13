<?php
session_start();
include_once('style.php');//contient le style préféfinis pour toutes les pages, avec les balises html qui vont jusqu'au body
include_once('connexion.inc');
	$_SESSION['essais'] = 10; // On initialise le nombre d'essais à 10
	$_SESSION['NBINDICES'] = 3;

	$req3 = $bdd->prepare('SELECT motcle FROM mot WHERE theme= (:themechoisis) AND motcle !=(:motdejavu) ORDER BY rand() LIMIT 0,1');
	$req3->execute(array(
		'themechoisis'=> $_SESSION['choix'],
		'motdejavu'=>$_SESSION['motMystere']));
	while ($donnees3 = $req3->fetch()){
		$majuscule = strtoupper($donnees3['motcle']); //Création d'une variable contenant le mot à trouver en MAJUSCULE
	}

	$_SESSION['motMystere'] = $majuscule; //On initialise ces deux variables avec comme information le mot à trouver en MAJUSCULE
	$_SESSION['motUtilisateur'] = $majuscule;

	$_SESSION['motUtilisateur'] = preg_replace('/[a-zA-Z]/', '*', $_SESSION['motUtilisateur']); // On remplace toutes les lettres contenues dans la session "mot utilisateur" par des étoiles

	echo "<h1>Le jeu du Pendu version Pokémon</h1>";
	echo "<h3>".$_SESSION['motUtilisateur'].'</h3>';
	echo "<p>Il vous reste ".$_SESSION['essais']." essais</p>";
	echo "<img src='10.png'/>";
	?>
	<form action="categorie_post2.php" method="POST" >
		<input type="text" name="lettre" autofocus/>
		<input type="submit" id="id1"/>
	</form>
	</body>
</html> 