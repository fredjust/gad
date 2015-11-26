<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- ENREGISTRE LE FICHIER APRES VERIFICATION
- taille <500 Ko
- type de fichier html ou htm 
- dans le dossier papi/
// envoie un mail
- redirige vers importation.php si tout est OK
*********************************************************************************/

$dep="NN";
if (isset($_POST['dep']))  { $dep =$_POST['dep']; };

$dossier = 'papi/';

$fichier = basename($_FILES['nomfichier']['name']);
$taille_maxi = 512000;
$taille = filesize($_FILES['nomfichier']['tmp_name']);
$extensions = array('.html', '.htm');
$extension = strrchr($_FILES['nomfichier']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type html';
}
if($taille>$taille_maxi)
{
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
	 /*
	 	$headers ='From: "FredJust"<fredjust@gmail.com>'."\n";
		$headers .='Reply-To: fredjust@gmail.com '."\n"; 
		$mail="fredjust@gmail.com";
		$sujet="[CVOE] Fichier envoyé";
		$corp_message="Ce fichier vient d'etre uploadé sur le site"."\n"; 
		$corp_message .= "nom : " .	$dossier.$fichier."\n"; 
		$corp_message .= "taille : " .	$taille."\n"; 
	    mail($mail,$sujet,$corp_message,$headers);
	 */
	
	header("Location: 03importation.php?nomfichier=$fichier&dep=$dep");
	
     
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
