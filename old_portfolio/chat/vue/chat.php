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
		<h1>Mini-Chat</h1>
	</div>
	<h2>Bonjour <?php echo $_SESSION['pseudo']; ?>, pour chatter, écris dans le cadre !</h2>
	<form action="../modele/put_message.php" method="POST">
		<label>Message : </label><input type="text" name="message" id="i1"/>
		<label>Valider : </label><input type="submit" id="i3"/><br/>
		<?php include_once('../modele/show_message.php'); ?>
	</form>
	<a href="../minichat.php"><img src="f.png" alt="fleche"/></a>
	<!--
	<img src="deco.jpg" id="deco" alt="deco" onclick="deco();"/>
	<script type="text/javascript">
	function deco () {
		<?php 
		//$_SESSION = array();
		//session_destroy(); 
		?>
	}
	</script>
	-->
 </body>
</html>