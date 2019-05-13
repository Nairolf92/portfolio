<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="minichat.css">
</style>
	<title>minichat</title>
</head>
<body>
	<div id="d1">
		<h1>Mini-Tchat</h1>
	</div>
		<h2>Pour participer au chat veuillez vous inscrire ou vous connecter</h2>
		<div id="container">
		<a href="controleur/inscription.php"><input type="button" id="inscription" name="inscription" value="Inscription"/></a><br/><br/>
		<a href="controleur/connexion.php"><input type="button" id="connexion" name="connexion" value="Connexion"/></a>
		</div>
</body>
</html>