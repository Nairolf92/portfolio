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
	<h2>Connexion : </h2>
		<div id="container">
		<form action="" method="POST">
		<div id="connexionc">
			<label>Pseudo : <input type="text" id="i4"name="pseudoc"></label><br/>
			<label>Mot de passe : <input type="password" id="i4"name="passc"></label><br/>
			<label>Valider : <input type="submit" id="i4" name="validerc"></label><br/>
			<?php 
				if ((!empty($_POST['pseudoc'])) &&(!empty($_POST['passc']))) {
					$pseudoc = htmlspecialchars($_POST['pseudoc']);
					$passc = sha1($_POST['passc']);

					include_once('../modele/verif_connexion.php');
					if (!$resultat){
						echo "Mauvais identifiant ou mot de passe";
					}else{
						$_SESSION['id'] = $resultat['id'];
						$_SESSION['pseudo'] = $pseudoc;
						header('Location: ../vue/chat.php');
					}
				}
			 ?>
			</div>
			</form>
		</div>
		<a href="../minichat.php"><img src="f.png" alt="fleche"/></a>
</body>
</html>