<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE

*********************************************************************************/

if (isset($_REQUEST['id_t']))  { $id_t =$_REQUEST['id_t']; }; 

//sans id tournoi on quitte
if ($id_t==0) { header("Location: index.php"); };

include("_connect.php");

$dossier = 'papi/';

$fichier = basename($_FILES['nomfichier']['name']);
$taille_maxi = 512000;
$taille = filesize($_FILES['nomfichier']['tmp_name']);
$extensions = array('.html', '.htm');
$extension = strrchr($_FILES['nomfichier']['name'], '.'); 

	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) { //Si l'extension n'est pas dans le tableau
		 $erreur = 'Vous devez uploader un fichier de type html';
	}
	if($taille>$taille_maxi) {
		 $erreur = 'Le fichier est trop gros ...';
	}
	
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
		$erreur='Erreur lors de move_uploaded_file';
		 //On formate le nom du fichier ici...
		 $fichier = strtr($fichier, 
			  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
		 
		 $tentative=move_uploaded_file($_FILES['nomfichier']['tmp_name'], $dossier . $fichier);
		 
		 if($tentative) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		 {	 
			$query="UPDATE gad_files SET Classement='$dossier$fichier' WHERE ID_T=$id_t";
			if (mysqli_query($link,$query)===TRUE) {
				//echo ' OK </br>';
			} else {		
				die("Erreur lors de la requête : $query </br>");
			}			
			header("Location: importclub.php?id_t=$id_t");		 
		 }
	}  
         
?>
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/admin.css"/>
		</head>
		<body>
			<H1>Dynamiseur de grille américaine</H1>
			<a href='index.php'>Accueil</a> > <a href='01sendfile.php'>Envoyer une GA</a> > Sauvegarde<br>
			<br>
			Erreur lors de la sauvegarde de votre fichier<br>
			<br>			
			<?php echo $erreur ?><br>
			<br>
			Vérifier la taille, le type et le nom de votre fichier<br>
			(éviter les espaces, les accents et les autres caractères non alphanumérique )
			
		</body>
		</html>
