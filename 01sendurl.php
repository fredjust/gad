<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- permet de choisir un fichier et de l'envoyer vers savefile.php
*********************************************************************************/
// mode developpement 
$dev=0; //variable =1 si on est en developpement 
if (isset($_SESSION['dev']))  { $dev =$_SESSION['dev']; }; 
if (isset($_GET['dev']))  { $dev =$_GET['dev']; $_SESSION["dev"]=$dev; };
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
	<H1>Dynamiseur de grille américaine</H1>
	<a href='index.php'>Accueil</a> > Envoyer une URL
	</br>
	</br>
	<form enctype="multipart/form-data" action="03importation.php" method="post">
		
		Coller l'URL d'une grille américaine en ligne<br>
		<br>
		ATTENTION DEPUIS NOVEMBRE 2015<br>
		LES GRILLES SONT DYNAMIQUES SUR LA SITE DE LA FFE<br>
		IL N EST PAS POSSIBLE DE LES RE-DYNAMISER PAR CETTE METHODE<br>
		<br>
		<input name="url" type="text" size="75"/><br>  
		<br>
		<input type="submit" value="Importer la grille" /><br>
	</form>
</body>
</html>