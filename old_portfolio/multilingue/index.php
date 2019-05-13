<?php
// Chargement de la classe
include_once('Langues.class.php');
// Création d'un nouvel objet Langue avec comme paramètres le dossier langue et le fichier xml à charger (et en facultatif une session contenant la langue à charger, peut être utilisé dans un système de membre, avec une session contenant la langue du membre).
$langue = new Langues('langues', 'index');
// $langue = new Langues('langues', 'index', 'ja');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Dota2</title>
	<meta charset="utf-8">
	<style type="text/css">
		html{font-family:arial;background: url(dota.jpeg) no-repeat;background-size: cover;}
		body{width: 800px;padding: 50px;}
		p{text-align: justify;color:white;padding: 5px;font-size:1.2em;}
		a{font-size: 2em;padding: 20px;}
		.menu{margin-left: 250px;}
		h1{color:white;text-align: center;font-size: 2em;}
		a{text-decoration: none;font-style: none;color: white;}
		a:hover{color: red;}
		.current{color: orange;}
	</style>
</head>
<body>
<?php
// Et on affiche du texte
echo $langue->show_text('titre');
echo $langue->show_text('heros');
echo $langue->show_text('objets');
echo $langue->show_text('description');
?>
</body>
</html>