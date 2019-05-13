<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			background-color: #0F4C61;
			width: 1000px;
			margin: auto;
		}
		h1{
			margin-top: 25%;
			font: 3em Arial;
			color: white;
			text-align: center;
		}
		h2{
			font: 2em Arial;
			color: white;
			text-shadow : 1px 1px 1px #0F4C61;
			text-align: center;
		}
		a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			text-decoration: underline;
			transition : 1s;
		}
	</style>
</head>
<body>
	<?php 
	if ((!empty($_POST['nom'])) && (!empty($_POST['prenom'])) && (!empty($_POST['mail'])) && (!empty($_POST['message'])) && (!empty($_POST['captcha']))) {
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$mail = htmlspecialchars($_POST['mail']);
		$message = htmlspecialchars($_POST['message']);
		$captcha = htmlspecialchars($_POST['captcha']);

		$to      = 'f.kelnerowski@gmail.com';
		$subject = 'Formulaire Olympe';
		$headers = 'From:'. $mail ."\r\n" ;
		$headers .= 'Reply-To: '.$mail . "\r\n" ;
		$headers .= 'MIME-Version: 1.0' . "\r\n" ;
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		if ($captcha !== '4') {
			echo "<h1>Le calcul semble incorrect</h1><br/>";
			echo "<h2><a href=\"/#contact\">Retourner au formulaire</a></h2>";
		}
		elseif($captcha == '4') {
		    mail($to, $subject, $message, $headers);
		    echo "<h1>Votre message a bien été envoyé</h1><br/>";
		    echo "<h2>Merci de m'avoir contacté ! </h2><br/>";
		    echo "<h2><a href=\"../index.html\">Retourner sur le portfolio</a></h2>";
		}
	}
	?>
</body>
</html>
<!--$body = "From: $name_field\n E-Mail: $email_field\n Tel: $tel_field\n Message:\n $message"; 

if(isset($_POST['submit']) && ($question_field==4)) { 
echo 'Votre message a bien été envoyé'; 
mail($to, $subject, $body); 
} else { 
alert("Votre message n'a pas été envoyé"); 
}  
-->