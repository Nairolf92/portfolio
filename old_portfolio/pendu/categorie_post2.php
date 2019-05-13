<?php 
session_start();
$lettre = $_POST['lettre'];
include_once('style.php');//contient le style préféfinis pour toutes les pages, avec les balises html qui vont jusqu'au body

function Cherchelettre(){
	$motConnu = $_SESSION['motMystere'];
	$tailleMotconnu = strlen($_SESSION['motMystere']);
	$letter = strtoupper($_POST['lettre']); //On met la lettre donnée en majuscule
	$motEtoile = $_SESSION['motUtilisateur'];
	$compteur=0;
	for ($i=0; $i < $tailleMotconnu ; $i++) { 
		if ($motConnu[$i] == $letter) { //Si la lettre du mot connu est égale à la lettre donnée
			$motEtoile[$i] = $letter;//On remplace l'étoile à la position $i par la lettre donnée
			$compteur++;
		}
	}
	if ($compteur ==0) { //Si on a pas trouvé de lettre correspondant au mot
		$_SESSION['essais']--; // On enlève un essai à l'utilisateur
	}
	$_SESSION['motUtilisateur'] = $motEtoile; // on récupère le mot qui commence à être complété et on le place dans la variable de session lui correspondant pour pouvoir le réemployer
}
function Resultat(){
	if($_SESSION['essais'] == 0){
		header('Location: loose.php');
	}else if(($_SESSION['motUtilisateur']) == ($_SESSION['motMystere'])){
		header('Location: win.php');
	}
}
function Indices(){
	include_once('connexion.inc');
	include_once('indice1.php'); // On charge les indices maintenant
	include_once('indice2.php');
	include_once('indice3.php');
}
function ImagesPendu(){
	echo "<img src=".$_SESSION['essais'].'.png'.">";
}
?>
<script type="text/javascript">
function Indice1(){
	p1 = document.getElementById('p1');
	p1.style.visibility='visible';
	a1 = document.getElementById('a1');
	a1.style.visibility='hidden';
	a2 = document.getElementById('a2');
	a2.style.visibility='visible';
}
function Indice2(){
	p2 = document.getElementById('p2');
	p2.style.visibility='visible';
	a2 = document.getElementById('a2');
	a2.style.visibility='hidden';
	a3 = document.getElementById('a3');
	a3.style.visibility='visible';
}
function Indice3(){
	p3 = document.getElementById('p3');
	p3.style.visibility='visible';
	a3 = document.getElementById('a3');
	a3.style.visibility='hidden';
}
</script>
<?php
	Indices();
	Cherchelettre($lettre,$_SESSION['motUtilisateur'],$_SESSION['motMystere']);
	Resultat();
	echo "<h1>Le jeu du Pendu version Pokémon</h1>";
	echo "<h2>".$_SESSION['motUtilisateur'].'</h2>';
	echo "<h2>Il vous reste ".$_SESSION['essais']." essais</h2>";
	ImagesPendu();
	?>
<form action="categorie_post2.php" method="POST" >
	<input type="text" name="lettre" autofocus placeholder="Lettre"/>
	<input type="submit"/>
</form>
	<a id='a1' style='visibility:visible'onclick='Indice1()'>Indice 1</a>
	<a id='a2' style='visibility:hidden' onclick='Indice2()'>Indice 2</a>
	<a id='a3' style='visibility:hidden' onclick='Indice3()'>Indice 3</a>
	<p id='p1' style='visibility:hidden'><?php echo $_SESSION['indice1'];?></p>
	<p id='p2' style='visibility:hidden'><?php echo $_SESSION['indice2'];?></p>
	<p id='p3' style='visibility:hidden'><?php echo $_SESSION['indice3'];?></p>
	</body>
</html>
