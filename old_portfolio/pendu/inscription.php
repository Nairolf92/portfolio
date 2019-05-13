<?php 
	session_start();
	include_once('style.php');
 ?>
 <h1>Inscription</h1>
 <aside>
  <form action="" method="POST">
 	<input type="text" name="login" placeholder="Login"/>
 	<input type="password" name="pass" placeholder="Mot de passe"/>
 	<input type="text" name="email" placeholder="Email"/>
 	<input type="submit"/>
 	   <?php 
if (!empty($_POST['login']) && (!empty($_POST['pass']))&& (!empty($_POST['email']))) {
		$login = htmlspecialchars($_POST['login']);
		$pass = $_POST['pass']; 
		$email = htmlspecialchars($_POST['email']);
			if(preg_match('#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $email)){ // on regex le mail 
				include_once('verif_inscription.php');
				if ($count == 0) { // si pseudo pas présent ,on insère toutes les valeurs de l'user
					include_once('put_inscription.php');
					$_SESSION['login'] = $login;
					header('Location: categorie.php');
				}else{
					echo "<p>Le pseudo est déjà pris</p>";
				}
			}else{
				echo "<p>Le mail indiqué n'est pas valide</p>";
			}
	}
  ?>
 </form>
 </aside>
 </body>
</html>