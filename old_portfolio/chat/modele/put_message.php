<?php
	session_start();
	define('ERROR_LOG_FILE', 'error.log');
	define('ERROR_LOG_ALL', true);
?>
<?php
	include_once('connexionsql.php');
		$msg = htmlspecialchars($_POST['message']);

		$req = $bdd->prepare('INSERT INTO chat(pseudo,message) VALUES (:pseudo,:message)');
		$req->execute(array(
		'pseudo' => $_SESSION['pseudo'],
		'message' => $msg));
	header('Location: ../vue/chat.php');
?>