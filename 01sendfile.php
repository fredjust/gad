<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- permet de choisir un fichier et de l'envoyer vers savefile.php
*********************************************************************************/
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
	<H1>Dynamiseur de grille américaine</H1>
	<a href='index.php'>Accueil</a> > Envoyer une GA
	</br>
	</br>
	<form enctype="multipart/form-data" action="02savefile.php" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
		Sélectionnez un fichier HTML d'une grille américaine de PAPI<br>
		<br>
		<input name="nomfichier" type="file" /><br>  
		<br>
		Indiquer le département pour faciliter le classement : 
		<input type="text" name="dep" value="" size="2" maxlength="2" /><br>
		<br>
		<input type="submit" value="Importer la grille" /><br>
	</form>
	<br>
	
</body>
</html>