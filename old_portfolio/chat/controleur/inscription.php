<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="minichat.css">
</style>
	<title>minichat</title>
</head>
<body>
	<div id="d1">
		<h1>Mini-Tchat</h1>
	</div>
			<h2>Inscription : </h2>
		<div id="container">
				<form action="" method="POST">
		<div id="inscriptionc">
			<label>Pseudo : <input type="text" id="i4" name="pseudo"></label><br/>
			<label>Mot de passe : <input type="password" id="i4" name="pass"></label><br/>
			<label>Mot de passe : <input type="password" id="i4" name="pass2"></label><br/>
			<label>E-mail : <input type="text" id="i4" name="mail"></label><br/>
			<label>Valider : <input type="submit" id="i4" name="valider"></label><br/>
			<?php 
	if (!empty($_POST['pseudo']) && (!empty($_POST['pass'])) && (!empty($_POST['pass2'])) && (!empty($_POST['mail']))) {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$pass = sha1($_POST['pass']); // hachage mdp 1
		$pass2 = sha1($_POST['pass2']); // hachage mdp 2
		$mail = htmlspecialchars($_POST['mail']);
		if ($pass == $pass2) { // on vérifie que les 2 mdp données sont égaux
			if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $mail)){ // on regex le mail 
				include_once('../modele/verif_pseudo.php');

				if ($count == 0) { // si pseudo pas présent ,on insère toutes les valeurs de l'user
					include_once('../modele/put_membre.php');
					$_SESSION['pseudo'] = $pseudo;
					header('Location: ../vue/chat.php');
				}else{
					echo "Le pseudo est déjà pris";
				}
			}else{
				echo "Le mail indiqué n'est pas valide";
			}
		}else{
			echo "Les mots de passe ne correspondent pas";
		}
	}else{
		echo "Certains champs n'ont pas été remplis";
	}
 ?>
		</div>
		</form>
		</div>
		<a href="../minichat.php"><img src="f.png" alt="fleche"/></a>
</body>
</html>