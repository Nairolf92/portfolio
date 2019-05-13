<?php 
	session_start();
	include_once('style.php');
 ?>
 <a><h1>Connexion</h1></a>
 <aside>
  <form action="" method="POST">
 	<input type="text" name="login" placeholder="Login"/>
 	<input type="password" name="pass" placeholder="Mot de passe"/>
 	<input type="submit"/>
 	   <?php 
	if ((!empty($_POST['login'])) &&(!empty($_POST['pass']))) {
			$login = htmlspecialchars($_POST['login']);
			$pass = $_POST['pass'];
			include_once('verif_connexion.php');
			if (!$resultat){
				echo "<p>Mauvais identifiant ou mot de passe</p>";
			}else{
				$_SESSION['login'] = $login;
				header('Location: categorie.php');
				}
			}
  ?>
 </form>
 </aside>
 </body>
</html>