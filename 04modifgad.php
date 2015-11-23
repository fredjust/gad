<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- MODIFIE LA TABLE gad_files
- permet de modifier 
	nom	
	description
	joueurs surlignés
	couleur
- lien vers la grille si elle existe
- lien vers 05makegad.php en forçant la création ?force=1
*********************************************************************************/
include("_connect.php");

// mode développement 
$dev=''; //variable =1 si on est en développement 
if (isset($_SESSION['dev']))  { $dev =$_SESSION['dev']; }; 
if (isset($_GET['dev']))  { $dev =$_GET['dev']; $_SESSION["dev"]=$dev; };

$id_t=0;
$modif=0;
$rvb='AA0000';

$ipvisit=$_SERVER["REMOTE_ADDR"];

// numéro de version utilisée par makegad il doit etre identique
$version='3.0b';


// si des valeurs sont posté
if (isset($_REQUEST['id_t']))  { $id_t =$_REQUEST['id_t']; }; 
if (isset($_REQUEST['nom'])) { $nom=addslashes($_REQUEST['nom']); }; 
if (isset($_REQUEST['desc']))  { $desc=addslashes($_REQUEST['desc']); };
if (isset($_REQUEST['rvb']))  { $rvb =$_REQUEST['rvb']; };
if (isset($_REQUEST['jas']))  { $jas =$_REQUEST['jas']; };
if (isset($_REQUEST['club']))  { $club =addslashes($_REQUEST['club']); };
if (isset($_REQUEST['modif']))  { $modif =$_REQUEST['modif']; };

/******************************************************************************
MODIFICATION
******************************************************************************/

$andIP="AND IP='$ipvisit'";

if (!isset($_SESSION['ydh437'])) {
	$_SESSION['ydh437']='non';
}

if ($_SESSION['ydh437']=='oui') { $andIP=''; };

if($modif==1) {
	$query="UPDATE gad_files SET NOM_T='$nom',DESC_T='$desc',RVB='$rvb',JAS='$jas' WHERE ID_T=$id_t $andIP";
	if (!mysqli_query($link,$query)) {		
		ECHO 'Erreur lors de <br>'.$query;
	}
}

if($modif==2) {
	$query="UPDATE gad_files SET CAS='$club' WHERE ID_T=$id_t $andIP";
	if (!mysqli_query($link,$query)) {		
		ECHO 'Erreur lors de <br>'.$query;
	}
}



//sans id tournoi on quitte
if ($id_t==0) { header("Location: index.php"); };

$gadfile=0;
if (file_exists('html/gad'.$id_t.'.html')) {
	$gadfile=1;
}

include("_connect.php");

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

function couleur($couleur,$facteur) {
	$R=hexdec(substr($couleur, 0, 2));
	$V=hexdec(substr($couleur, 2, 2));
	$B=hexdec(substr($couleur, 4, 2));
 
	$nR=dechex($R+(255-$R)*$facteur);
	$nV=dechex($V+(255-$V)*$facteur);
	$nB=dechex($B+(255-$B)*$facteur);
	
	$couleur2=$nR.$nV.$nB;
	return($couleur2);
}



?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
	<H1>Dynamiseur de grille américaine <?php echo $dev?></H1>
	<a href='index.php'>Accueil</a> > <a href='01sendfile.php'>Envoyer une GA</a> > Modifier la GAD<br>
	<br>	

	
		
		<?php

		$requete_fiche=mysqli_query ($link,"SELECT * FROM gad_files WHERE ID_T=$id_t");
		if ($row=mysqli_fetch_array($requete_fiche) ) 
		{
			$ver_use=0;
			$ver_use=$row['VER'];
			$rvb=$row['RVB'];
			$rvb1=couleur($rvb,0.7);
			$rvb2=couleur($rvb,0.9);
			$ipOK=$row['IP'];			
			if (($ipOK!=$ipvisit)&&($_SESSION['ydh437']=='non')) {
				Echo "Vous n'avez pas l'autorisation de modifier cette grille";
				exit;
			}
			?>
			<form action="04modifgad.php" method="post">		
			<input type="hidden" name="id_t" value="<?php echo $row['ID_T']?>" />
			<input type="hidden" name="modif" value="1" />
			Cette grille portera le numéro <?php echo $row['ID_T']?><br>
			<?php if ($gadfile==1) { ?>
				<br>Attention une grille avec cet identifiant existe déjà <br>
				<input type="button" onclick="window.open('html/gad<?php echo $id_t?>.html','gad','height=500,width=1000,top=100,left=100,location=no');" value="Cette grille"> sera écrasée et remplacée si vous continuez !<br>
				<br>
			<?php 
				}	
			?>
			Nombre de joueurs trouvés : <?php echo $row['NBJ_T']?></br>
			Fichier d'origine : <a href="<?php echo $row['Grille']?>" TARGET=blank><?php echo $row['Grille']?></a><br>
			<br>
			Avant de générer la grille, vous pouvez modifier les zones suivantes<br>
			<bR>
			<table>		
			<tr>
				<td>Titre de la grille américaine : </td>
				<td><input type="text" name="nom" value="<?php echo $row['NOM_T']?>" size="50"/></td>
			</tr>

			<tr>
			<td>Que voulez vous afficher sur la 2° ligne :<br>
				(à la place de Grille américaine après la ronde ...)
			</td>
			<td>
				<input type="text" name="desc" value="<?php echo $row['DESC_T']?>" size="50" /><br>				
				exemple : cadence 15 min + 2 sec , 14 janvier 2015
			</td>			
			</tr>
			<tr>
				<td>Places des joueurs à surligner séparées par des virgules :<br>
				(Laisser vide si vous ne voulez surligner personne)
				</td>
				<td><input type="text" name="jas" value="<?php echo $row[7]?>" size="30" /> exemple: 2,5,13,24</td>
			</tr>
			<tr>
				<td>Couleur de la grille : </td>
				<td STYLE="background-color:#<?php echo $row['RVB']?>;" >
			<SELECT NAME="rvb">
				<?php
				$requete_fiche=mysqli_query ($link,"SELECT * FROM gad_color ORDER BY ORD DESC");
				while ($rowc=mysqli_fetch_array($requete_fiche) ) 
				{
					$isselect='';
					if ($rowc['RVB']==$row['RVB']) {$isselect='SELECTED';};
					ECHO ("<OPTION VALUE=\"".$rowc['RVB']."\" $isselect STYLE=\"background-color:#".$rowc['RVB'].";\">".$rowc['NOM']);					
				}
				?>					
			</SELECT>	
			</td>
			<tr><td></td><td STYLE="background-color:#<?php echo $rvb1?>;" >&nbsp;</td></tr>
			<tr><td></td><td STYLE="background-color:#<?php echo $rvb2?>;" >&nbsp;</td></tr>
			</tr>
			<?php		
		}
	?>
	<tr><td>En cas de changements  </td><td><input type="submit" value="Enregistrer les modifications" /></td></tr>
			
	</form>
	<tr><td>
	après avoir modifié les informations précédentes,<br>
	vous pouvez générer et afficher la GAD en cliquant sur le bouton suivant<br>
	<br><i>
	Cela ouvrira une nouvelle fenetre avec votre grille<br>
	vous pouvez revenir ici pour modifier des options et la regénérer<br>
	Il peut etre nécessaire d'actualiser cette nouvelle fenetre<br>
	en appuyant sur F5 pour voir vos modifications<br>
	</i>
	</td><td align=center STYLE="background-color:#<?php echo $rvb1?>">
		<input type="button" onclick="window.open('05makegad.php?id_t=<?php echo $id_t?>&rvb=<?php echo $row['RVB']?>&force=1','gad','height=500,width=1000,top=100,left=100,location=no');" value="Générer et afficher la grille dynamique"><br>
	
	
	</td></tr>
	</table>
	<br>
	<b>INFORMATIONS SUPPLEMENTAIRES EN OPTION</b><br>
	<hr>

	
				<?php
				$requete_fiche=mysqli_query ($link,"SELECT DISTINCT Club FROM gad_data WHERE ID_T=$id_t AND Club<>'' ORDER BY Club");
				if ($rowc=mysqli_fetch_array($requete_fiche) ) { 
					if ($rowc['Club']!='') {
				?>			
				Les clubs ont été importés et s'afficheront, <br>				
					<form action="04modifgad.php" method="post">	
					<input type="hidden" name="id_t" value="<?php echo $id_t?>" />
					<input type="hidden" name="modif" value="2" />
						Je souhaite que les joueurs de <SELECT NAME="club">	
						<?php 
						$isselect='';
						if ($rowc['Club']==$row['CAS']) {$isselect='SELECTED';};
						echo "<!--".$row['CAS']."-->";
						ECHO ("<OPTION VALUE=''>Aucun");					
						ECHO ("<OPTION VALUE=\"".$rowc['Club']."\" $isselect>".$rowc['Club']."\n");					
						
						while ($rowc=mysqli_fetch_array($requete_fiche) ) {
							$isselect='';
							if ($rowc['Club']==$row['CAS']) {$isselect='SELECTED';};
							ECHO ("<OPTION VALUE=\"".$rowc['Club']."\" $isselect>".$rowc['Club']."\n");					
						}
						?> 
						</SELECT>
						soient <input type="submit" value="Surligner" /> 
						<?php 
					}
				}
				?>					
			
			
			
				</form>
				
				<form enctype="multipart/form-data" action="saveclassement.php" method="post">
					<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
					<input type="hidden" name="id_t" value="<?php echo $id_t?>" />
					Si vous voulez afficher les clubs des joueurs, vous pouvez envoyer le fichier HTML du classement pour ce tournoi<br>
					<br>
					LE CLASSEMENT : <input name="nomfichier" type="file" />  <input type="submit" value="Importer" /><br>
				</form>
	<hr>
	<b>CRER UNE COPIE DE CETTE GRILLE</b><br>
	Cela permet d'obtenir différentes versions d'une même grille<br>
	Une pour tous et une pour un club particulier avec ses joueurs surlignés<br>
	La grille actuelle sera dupliquée, pensez a remodifier les options pour la grille générale<br>
	Copies existantes de cette grille :<br>
	<ul>
		<?php
		$i=1;
		while (file_exists('html/gad'.$id_t.'_'.$i.'.html')) {
			?>
			<li> <a href="html/gad<?php echo $id_t?>_<?php echo $i?>.html" target=blank>gad<?php echo $id_t?>_<?php echo $i?>.html</a>

			<?php
			$i++;
		}
		?>
	</ul>
	<form action="06copygad.php" method="post">
		<input type="hidden" name="id_t" value="<?php echo $id_t?>" />		
		<input type="submit" value="Créer une copie" />
	</form>
	<hr>
	Afficher les variations du Elo FIDE (en préparation ...)
</body>
</html>