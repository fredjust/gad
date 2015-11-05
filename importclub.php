<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE

*********************************************************************************/

include("_connect.php");

$strFinLigne='</tr>';
$strFinTable='</table>';

$debut=0;
$fin=0;



// mode développement 
$dev=0; //variable =1 si on est en développement 
if (isset($_SESSION['dev']))  { $dev =$_SESSION['dev']; }; 
if (isset($_GET['dev']))  { $dev =$_GET['dev']; $_SESSION["dev"]=$dev; };

/*****************************************************************************/
function echod($message) {	
	global $dev;
	if ($dev==1) {
		echo $message.'<br>';
	}
}
/*****************************************************************************/

if (isset($_REQUEST['id_t']))  { $id_t =$_REQUEST['id_t'];  };
if (!isset($id_t)) { header("Location: index.php"); };

/******************************************************************************
									REQUETTE TOURNOI
******************************************************************************/

$nomfichier='';
$query="SELECT * FROM gad_files WHERE ID_T=$id_t";
$requete_fiche=mysqli_query($link,$query);
if ($row=mysqli_fetch_assoc($requete_fiche)) {
	$nomfichier=$row['Classement'];
}

if ($nomfichier=='') {
		interruption('nom de fichier manquant'); 
	};
	
echo $nomfichier;

/******************************************************************************
						OUVERTURE DU FICHER OU DE L URL
******************************************************************************/
$papifile = fopen("$nomfichier", 'r'); //ouvre le fichier en lecture seule

if ($papifile) { // si l'ouverture est OK
	
} else {
	interruption("Erreur d'ouverture du fichier $nomfichier");
}
	
	echod('ouverture OK');
/******************************************************************************
						RECHERCHE DES CLUBS 
******************************************************************************/	
		
	$numligne=0;
	$fc='f';
	$ligne=trim(fgets($papifile));
	while ($ligne!=$strFinTable) { //tant qu'il y a des joueur (pas de </table>)
	
		
		
			$strEntete="<tr class=papi_liste_$fc>";
			//avance jusqu'a la ligne <tr class=papi_liste_ f/c>
			$EntetePasTrouve=true;
			while ($EntetePasTrouve) { 						
				$lignesscote=str_replace("'","",$ligne); //supprime les ' pour papi ancien qui en met 			
				if ($lignesscote==$strEntete) { $EntetePasTrouve=false;	} else {
					$ligne=trim(fgets($papifile)); //ligne suivante		
				};
				
			}
			echod($strEntete.'ok');
			
			/**************************************
					 récupère la place	
			***************************************/
			$ligne=trim(fgets($papifile));	//ligne suivante PL
			
				
			$debut=strpos($ligne,'>')+1;
			$fin=strrpos($ligne,'<');
			$place=trim(substr($ligne,$debut,$fin-$debut));		
			$place=addslashes($place);		
			
			//avance du ligne et ignore le tire
			$ligne=trim(fgets($papifile));	//ligne suivante T
						
			
			/**************************************
					 récupère le nom
			***************************************/
			$ligne=trim(fgets($papifile));	//ligne suivante NOM
						
			$debut=strpos($ligne,'>')+1;
			$fin=strrpos($ligne,'<');
			$nomp=trim(substr($ligne,$debut,$fin-$debut));				
			
			$nomp=str_replace('<b>','',$nomp);
			$nomp=str_replace('</b>','',$nomp);
			
			$nomp=addslashes($nomp);
			
			$ligne=trim(fgets($papifile));	//ligne suivante Elo
			$ligne=trim(fgets($papifile));	//ligne suivante CAT
			$ligne=trim(fgets($papifile));	//ligne suivante FED
			$ligne=trim(fgets($papifile));	//ligne suivante LIG
					
			/**************************************
					récupère le CLUB
			***************************************/		
			$ligne=trim(fgets($papifile));	//ligne suivante CLUB
						
			$debut=strpos($ligne,'>')+1;
			$fin=strrpos($ligne,'<');
			$club=trim(substr($ligne,$debut,$fin-$debut));				
			
			$club=str_replace('<b>','',$club);
			$club=str_replace('</b>','',$club);
			
			$club=addslashes($club);		
			

	/******************************************************************************
							INSERTION DE LA LIGNE DANS LA BASE
	******************************************************************************/	
			
			$query = "UPDATE gad_data SET Club='$club' WHERE ID_T=$id_t AND Nom='$nomp'";	
			echod( $query);		
			if (mysqli_query ($link,$query)===TRUE) {
				//echo ' ';
			} else {
				interruption("Erreur lors de la requête : $query </br>");
			}		
			// change de ligne
			if ($fc=='c') { $fc='f'; } else {$fc='c'; };	
		
			
			//avance jusqu'a la ligne </tr>
			$FinLignePasTrouve=true;
			while ($FinLignePasTrouve) 		{ 				
				$ligne=trim(fgets($papifile)); //ligne suivante		
				if ($ligne==$strFinLigne) { $FinLignePasTrouve=false;	};			
			}	
			
		$ligne=trim(fgets($papifile)); //ligne suivante		
	}
	
	fclose($papifile); //ferme le fichier
/******************************************************************************
						FIN DE L IMPORT
******************************************************************************/	

	//redirection vers la page de modification
	if ($dev==0) {
		header("Location: 04modifgad.php?id_t=$id_t");
	} else {
		interruption("Mode dev activé : <a href='04modifgad.php?id_t=$id_t'>04modifgad.php?id_t=$id_t</a>");	
	};
	
	
	
function interruption($erreur) {

?>
	<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/admin.css"/>
		</head>
		<body>
			<H1>Dynamiseur de grille américaine</H1>
			<a href='index.php'>Accueil</a> > <a href='01sendfile.php'>Envoyer une GA</a> > Savegarde > Importation <br>
			<br>
			Erreur lors de l'importation de votre grille<br>
			<br>			
			<?php echo $erreur ?><br>
			<br>
			Vérifier que votre fichier est bien un export d'une grille américaine.			
		</body>
	</html>


<?php
exit();
}
?>

