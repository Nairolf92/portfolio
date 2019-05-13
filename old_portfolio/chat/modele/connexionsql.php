<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=sql2.olympe.in;dbname=v281y87o;charset=utf8','v281y87o', 'minichat',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>