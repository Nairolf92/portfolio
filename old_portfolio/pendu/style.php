<!DOCTYPE html>
<html>
<head>
	<title>Pendu Pokémon</title>
	<meta charset="utf-8">
	<style type="text/css">
	@font-face{
		font-family: 'pkm';
		src : url('pkm.ttf');
	}
		body{background:url('fond.jpg') no-repeat;text-align: center;}
		form{height:200px;width:300px;margin:auto;}
		h1,h2,h3{text-align: center;color: white;text-shadow : 2px 2px 2px black;}
		h1{font-size: 2em;font-family: pkm;text-shadow: 5px 5px 5px black;letter-spacing: .1em;margin: 0;}
		h2,h3{font-size: 3em;font-family: Georgia;font-weight: bold;color: white;}
		label{font-family: Georgia;color: white;font-size: 1.5em;float: left;}
		input,select{background-color: #f39c12;padding: 10px;color: white;width: 250px;height:60px;border: 1px solid black;margin: 10px;cursor: pointer;font-size: 2em;}
		p{color: white;font-size: 1.5em;}
		h4{font-size: 4em;font-family: pkm;text-shadow : 5px 5px 5px black;color:white;letter-spacing: 0.2em;}
		a{color:white;text-decoration: none;font-size: 2em;}
		a:hover{color: #f39c12;}
		table{text-align: center;border-collapse: collapse;margin: auto;}
		tr{font-size: 2em;color:black;}
		td{font-size: 1em;color: black;border: 1px solid black;padding: 5px;}
		#a1,#a2,#a3{width: 30px;background-color: #f39c12;border : 1px solid black;color: white;padding: 10px;cursor: pointer;}
		#p1,#p2,#p3{font-size: 2em;text-transform: uppercase;font-family: Arial;color: white;text-shadow : 1px 1px 1px black;}
		#scoreindex{font-size: .8em;}
		::-webkit-input-placeholder { color:white; }
		::-moz-placeholder { color:white;} /* firefox 19+ */
		:-ms-input-placeholder { color:white; } /* ie */
		input:-moz-placeholder { color:white; }
		img{width: 150px;}
	</style>
</head>
<body>