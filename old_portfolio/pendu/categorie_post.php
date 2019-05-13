<?php
	session_start();
	include_once('style.php');//contient le style préféfinis pour toutes les pages, avec les balises html qui vont jusqu'au body
function Choix(){
	include_once('connexion.inc');
	$_SESSION['essais'] = 10; // On initialise le nombre d'essais à 10
	$_SESSION['NBINDICES'] = 3;
	$_SESSION['choix'] = $_POST['choix']; //Choix de la catégorie par l'utilisateur
	$_SESSION['score'] = 0;
	$_SESSION['nbmots'] = 0;

	$req3 = $bdd->prepare('SELECT motcle FROM mot WHERE theme= ? ORDER BY rand() LIMIT 0,1');
	$req3->execute(array($_SESSION['choix'])); //Requete SQL qui selectionne un mot aléatoire en fonction du thème choisit
	while ($donnees3 = $req3->fetch()){
		$majuscule = strtoupper($donnees3['motcle']); //Création d'une variable contenant le mot à trouver en MAJUSCULE
	}

	$_SESSION['motMystere'] = $majuscule; //On initialise ces deux variables avec comme information le mot à trouver en MAJUSCULE
	$_SESSION['motUtilisateur'] = $majuscule;

	$_SESSION['motUtilisateur'] = preg_replace('/[a-zA-Z]/', '*', $_SESSION['motUtilisateur']); // On remplace toutes les lettres contenues dans la session "mot utilisateur" par des étoiles
}
Choix();
	echo "<h1>Le jeu du Pendu version Pokémon</h1>";
	echo "<h2>".$_SESSION['motUtilisateur'].'</h2>';
	echo "<h2>Il vous reste ".$_SESSION['essais']." essais</h2>";
	echo "<img src='10.png'/>";
	?>
	<form action="categorie_post2.php" method="POST" >
		<input type="text" name="lettre" autofocus placeholder="Lettre"/>
		<input type="submit"/>
	</form>
	</body>
</html>