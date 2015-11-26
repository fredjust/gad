<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- PARCOURS LE FICHIER PAPI POUR REMPLIR LA BDD
- enregistre le tournoi dans gad_files
	date	
	nombre de joueur
	couleur rouge par defaut
	addslashes sur nom et description
- enregistre les lignes dans gad_data
	addslashes sur toutes les données
- redirige vers modifgad.php si tout est OK
*********************************************************************************/

include("_connect.php");

$strTitre1='Grille am'; //'<title>';
$strTitre2='ricaine apr'; //'<title>';

$strEntete='<tr class=papi_small_t>';


//$strEntete1='class=';
//$strEntete2='papi_small_t';

$strFinLigne='</tr>';
$strFinTable='</table>';

$valTitre='';

$mode=0; 
$debut=0;
$fin=0;
$dep=""; //département de la grille

// mode développement 
$dev=0; //variable =1 si on est en développement 
if (isset($_SESSION['dev']))  { $dev =$_SESSION['dev']; }; 
if (isset($_GET['dev']))  { $dev =$_GET['dev']; $_SESSION["dev"]=$dev; };

if (isset($_GET['dep']))  { $dep =$_GET['dep']; };

/******************************************************************************
							D OU ON VIENT
******************************************************************************/
// peut etre appelé par sendfile ou send url on regarde d'ou on vient
if (isset($_REQUEST['url'])) {
	$nomfichier=$_REQUEST['url'];
} else { 
	if (isset($_REQUEST['nomfichier'])) { $nomfichier="papi/".$_REQUEST['nomfichier'];
	} else { 
		interruption('nom de fichier manquant'); 
	};
};
/******************************************************************************
						OUVERTURE DU FICHER OU DE L URL
******************************************************************************/
$papifile = fopen("$nomfichier", 'r'); //ouvre le fichier en lecture seule

if ($papifile) { // si l'ouverture est OK
	
} else {
	interruption("Erreur d'ouverture du fichier $nomfichier");
}
/******************************************************************************
							FONCTION DATE FR
******************************************************************************/
function date_fr($format = 'l j F Y', $time = null){
	if(empty($time)) $time = time();

	$date = date($format, $time);

	$jour_en = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	$jour_fr = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");

	$mois_en = array("January","February","March","April","May","June","July","August","September","October","November","December");
	$mois_fr = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

	$date = str_replace($jour_en, $jour_fr, $date);
	$date = str_replace($mois_en, $mois_fr, $date);

	return $date;
}
/******************************************************************************
						 RECHERCHE DU TITRE
******************************************************************************/
	$TitrePasTrouve=true;
	while ($TitrePasTrouve) {
		//echo '.';
		$ligne=trim(fgets($papifile));
		if(feof($papifile)) {			
			fclose($papifile); //ferme le fichier
			interruption('Impossible de trouver le titre ');
		}
		
		
		if ( (strpos($ligne, $strTitre1)!== false)&&(strpos($ligne, $strTitre2)!== false) ) { 		
			$lignesscote= strip_tags($ligne,'<br>');
			//$debut=strpos($ligne,'>')+1; 	// Premier >
			//$fin=strrpos($ligne,'<');		// dernier <
			$valTitre=$lignesscote;		
			// valTitre contient un <br />
			$debut=strpos($valTitre,'<'); 	
			$fin=strrpos($valTitre,'>')+1;				
			//$description=substr($valTitre,$fin);
			$valTitre=substr($valTitre,0,$debut);
			
			$description=date_fr();
			$TitrePasTrouve=false;		
		}
	}
/******************************************************************************
						RECHERCHE DES ENTETES 
******************************************************************************/	
	//avance jusqu'a la ligne <tr class=papi_small_t>
	$EntetePasTrouve=true;
	while ($EntetePasTrouve) { 				
		$ligne=trim(fgets($papifile)); //ligne suivante		
		// si on trouve class= et papi_small_t 
		$lignesscote=str_replace("'","",$ligne); //supprime les ' pour papi ancien qui en met 
		//if ((strpos($ligne, $strEntete1) !== false)&&(strpos($ligne, $strEntete2) !== false)) {
		if (strpos($lignesscote, $strEntete) !== false) {
			$EntetePasTrouve=false;
		}
		if(feof($papifile)) {
			fclose($papifile); //ferme le fichier
			interruption('impossible de trouver tr &lt;class=papi_small_t&gt;');
		}
	}		
	//récupère les titres des colonnes
	$numcol=0;
	$EnteteColonne ='';	
	$ligne=trim(fgets($papifile)); //ligne suivante
	
	while ($ligne!=$strFinLigne) {
		$numcol++;		
		$debut=strpos($ligne,'>')+1;
		$fin=strrpos($ligne,'<');
		$titre=trim(substr($ligne,$debut,$fin-$debut));
		
		$titre=str_replace('.','',$titre);	
		$titre=str_replace('R ','Rd0',$titre);	
		$titre=str_replace('&nbsp;','',$titre);	
		
		if ($numcol==2) {$titre='t';}
		
		if ($titre!=''){
			$EnteteColonne .=$titre.',';
		};		
		
		$ligne=trim(fgets($papifile));//ligne suivante
		
		if(feof($papifile)) {		
			fclose($papifile); //ferme le fichier		
			interruption("impossible de trouver &lt;/tr&gt; pour la $numcol° colonne d'entête");
		}
	
	}
	
	$last=$EnteteColonne[strlen($EnteteColonne)-1];	//supprime le dernier caractère si c'est une ,
	if ($last==',') 
	{
		$EnteteColonne=substr($EnteteColonne,0,-1);
	}; 	
		
	// $EnteteColonne est du genre :
	// Pl,t,Nom,Rapide,Cat,Fede,Ligue,Rd01,Rd02,Rd03,Rd04,Rd05,Rd06,Rd07,Rd08,Rd09,Pts,Tr,Perf
	
	$colonnes=explode(',',$EnteteColonne);
	$nbcolonnes=count($colonnes); //permet de compter le nombre de colonne
	
	
/******************************************************************************
						INSERTION DU TOURNOI DANS LA BASE 
******************************************************************************/	

	$valTitre=addslashes($valTitre);	
	$description=addslashes($description);		
	$datemaj=date("Y-m-d");
	$ipvisit=$_SERVER["REMOTE_ADDR"];
	$query="INSERT INTO gad_files (NOM_T,DESC_T,COL_T,MAJ,RVB,Grille,IP,dep) values ('$valTitre','$description','$EnteteColonne','$datemaj','AA0000','$nomfichier','$ipvisit','$dep')";
	if (mysqli_query($link,$query)===TRUE) {
		//echo ' OK </br>';
	} else {		
		interruption("Erreur lors de la requête : $query </br>");
	}
	$idt=mysqli_insert_id($link);//identifiant du champs AUTO INCRMENT
	$_SESSION["id_t"]=$idt;// pour le renvois direct vers

/******************************************************************************
						RECHERCHE DES DONNEES 
******************************************************************************/	
	
	// considère que la ligne suivante est bien
	//  <tr class=papi_small_f>
	$ligne=trim(fgets($papifile));//ligne suivante

	$numligne=0;
	while ($ligne!=$strFinTable) { 
		$numligne++;
		$numcol=3;
		$ligneDonnees='';
		
		
		/**************************************
				 récupère la place	
		***************************************/
		$ligne=trim(fgets($papifile));	//ligne suivante
		if(feof($papifile)) {		
			fclose($papifile); //ferme le fichier		
			interruption("impossible de trouver &lt;/table&gt; après la $numligne° ligne");
		}
			
		$debut=strpos($ligne,'>')+1;
		$fin=strrpos($ligne,'<');
		$place=trim(substr($ligne,$debut,$fin-$debut));					
		
		$place=addslashes($place);		
		
		/**************************************
				 récupère le titre
		***************************************/
		$ligne=trim(fgets($papifile));	//ligne suivante
		if(feof($papifile)) {		
			fclose($papifile); //ferme le fichier		
			interruption("impossible de trouver &lt;/table&gt; après la $numligne° ligne");
		}	
		
		$debut=strpos($ligne,'>')+1;
		$fin=strrpos($ligne,'<');
		$titre=trim(substr($ligne,$debut,$fin-$debut));				
		
		$titre=addslashes($titre);
				
		
		/**************************************
				 récupère le nom
		***************************************/
		$ligne=trim(fgets($papifile));	//ligne suivante
		if(feof($papifile)) {		
			fclose($papifile); //ferme le fichier		
			interruption("impossible de trouver &lt;/table&gt; après la $numligne° ligne");
		}
			
		$debut=strpos($ligne,'>')+1;
		$fin=strrpos($ligne,'<');
		$nomp=trim(substr($ligne,$debut,$fin-$debut));				
		
		$nomp=str_replace('<b>','',$nomp);
		$nomp=str_replace('</b>','',$nomp);
		
		$nomp=addslashes($nomp);
		
		$ligne=trim(fgets($papifile));	//ligne suivante
		if(feof($papifile)) {		
			fclose($papifile); //ferme le fichier		
			interruption("impossible de trouver &lt;/table&gt; après la $numligne° ligne");
		}
		
		/**************************************
				récupère les autres colonnes 
		***************************************/		
		while ($ligne!=$strFinLigne) {
			$numcol++;
			
			if ($numcol<=$nbcolonnes) { //permet de supprimer la dernière colonne en doublon
			
				$debut=strpos($ligne,'>')+1;
				$fin=strrpos($ligne,'<');
				$donnee=trim(substr($ligne,$debut,$fin-$debut));
				
				// si importation d'une GA du site de la FFE ou de la corse
				// on remplace les images GIF par les 3 lettres du pays
				$posgif=strpos($donnee, '.GIF');
				if ($posgif !== false) {
					$donnee=substr($donnee,$posgif-3,3);					
				}
				
				$donnee=str_replace('&nbsp;','',$donnee);
				$donnee=str_replace('&frac12;','.5',$donnee);				
				$donnee=str_replace('&frac14;','.25',$donnee);				
				$donnee=str_replace('&frac34;','.75',$donnee);								
					
				
				$donnee=str_replace('<b>','',$donnee);
				$donnee=str_replace('</b>','',$donnee);
				
				$donnee=addslashes($donnee);
				$ligneDonnees .=$donnee.'|';		
			}
			//ligne suivante
			$ligne=trim(fgets($papifile));			
			if(feof($papifile)) {		
				fclose($papifile); //ferme le fichier		
				interruption("impossible de trouver &lt;/tr&gt; pour la ligne $numligne");
			}
	
		}
		
		/**************************************
				fin de la ligne 
		***************************************/			
		
		$donnees=explode('|',$ligneDonnees);
		$nbdonnees=count($donnees);	
		
		
		
		//normalement nbcolonnes=nbdonnees A VERIFIER
		
		$last=$ligneDonnees[strlen($ligneDonnees)-1];	//supprime le dernier carractere si c'est un |
		if ($last=='|') 
		{
			$ligneDonnees=substr($ligneDonnees,0,-1);
		}; 	

/******************************************************************************
						INSERTION DE LA LIGNE DANS LA BASE
******************************************************************************/	
		
		$query = "INSERT INTO gad_data (ID_T,Pl,t,Nom,CHAMPS) VALUES ($idt,$place,'$titre','$nomp','$ligneDonnees')";		
		if (mysqli_query ($link,$query)===TRUE) {
			//echo ' ';
		} else {
			interruption("Erreur lors de la requête : $query </br>");
		}		
		//ligne suivante
		$ligne=trim(fgets($papifile));	
		
	}
fclose($papifile); //ferme le fichier
/******************************************************************************
						FIN DE L IMPORT
******************************************************************************/	
	/**************************************
		enregistre le nombre de joueur  
	***************************************/
	$query="UPDATE gad_files SET NBJ_T=$numligne WHERE ID_T=$idt";
	if (mysqli_query ($link,$query)===TRUE) {
		//echo ' OK </br>';
	} else {
		interruption("Erreur lors de la requête : $query </br>");
	}

	//redirection vers la page de modification
	if ($dev==0) {
		header("Location: 04modifgad.php?id_t=$idt");
	} else {
		interruption("Mode dev activé : <a href='04modifgad.php?id_t=$idt'>04modifgad.php?id_t=$idt</a>");	
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

