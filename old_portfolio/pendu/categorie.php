<?php 
	session_start();
	include_once('connexion.inc'); //contient la connexion à la BDD
	include_once('style.php'); // contient le style
 ?>
	<h1>Le jeu du Pendu version Pokémon</h1>
	<h2>Bonjour <?php echo $_SESSION['login']; ?> !</h2>
	<h2>Choisissez votre thème :</h2>	
	<form action="categorie_post.php" method="POST">
		 <select name="choix">
		<?php
		$req = $bdd->query('SELECT motcle FROM theme');
		while ($donnees = $req->fetch())
		{
			echo '<option>'.$donnees['motcle'].'</option>';
		}
			$req->closeCursor(); 
	 	?>
	 	</select><br/>
	 	<input type="submit"/>
 	</form>
 	<h1><a id="scoreindex" href="scores.php">Afficher les meilleurs scores</a></h1>
</body>
</html>