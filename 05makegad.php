<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- GENERE LE FICHIER HTML A PARTIR DE LA table gad_data
- calcule les deux nuances de couleur 
- redirige vers le fichier s il existe déjà est que force==0
- met a jour gad_files avec le numéro de version et la couleur utilisée
- renvoie vers la grille générée
*********************************************************************************/

$rvb="AA0000";
// numéro de version utilisée permet de vérifier si une grille est à jour
$version="3.0b";


$dev=0; //variable =1 si on est en developpement 
if (isset($_SESSION['dev']))  { $dev =$_SESSION['dev']; }; 
if (isset($_GET['dev']))  { $dev =$_GET['dev']; $_SESSION["dev"]=$dev; };
/*****************************************************************************/
function echod($message) {
	/*global $dev;
	if ($_SESSION["dev"]==1) {
		echo $message.'<br>';
	}*/
}
/*****************************************************************************/

if (isset($_GET['id_t']))  { $id_t =$_GET['id_t'];  };
if (isset($_GET['rvb'])) { $rvb=$_GET['rvb']; };
if (isset($_GET['show'])) { $show=$_GET['show']; };
if (isset($_GET['force'])) { $force=$_GET['force']; } else { $force=0; };

/*****************************************************************************/
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
$rvb1=couleur($rvb,0.7);
$rvb2=couleur($rvb,0.9);

/*****************************************************************************/
//sans id tournoi on quitte
if (!isset($id_t)) { header("Location: index.php"); };
if (isset($show)) {$jas=explode(",",$show); };

//redirection vers le fichier HTML s'il existe et qu'on ne force pas la génération
if ($force==0) {
	if (file_exists('html/gad'.$id_t.'.html')) {
		header('Location: html/gad'.$id_t.'.html');
		exit;
	};
};
/*****************************************************************************/
echod("Création du fichier html/gad$id_t.html</br>");
$papifile = fopen('html/gad'.$id_t.'.html', 'w'); //ouvre le fichier 

// connexion à la base
include("_connect.php");	

/******************************************************************************
									REQUETTE TOURNOI
******************************************************************************/
$query="SELECT * FROM gad_files WHERE ID_T=$id_t";
$requete_fiche=mysqli_query($link,$query);
echod($query);

if ($row=mysqli_fetch_assoc($requete_fiche))
{
	$COL_T=$row['COL_T'];
	$NOM_T=$row['NOM_T'];
	$DESC_T=$row['DESC_T'];	
	$cas=$row['CAS'];
	$jas=explode(",",$row['JAS']);

	for ($njas=0; $njas<count($jas); $njas++) {
		$pos=strpos($jas[$njas],"-"); 
		if ($pos>0) { //si c'est un interval type 1-20
			$debut=substr($jas[$njas],0,$pos);
			$fin=substr($jas[$njas], $pos+1);
			for ($naj=$debut;$naj<=$fin;$naj++) {
				$jas[]=$naj;	
			}				
		}			
	}

	
	
	//SI une couleur existe dans la base
	if ($row['RVB']<>'') {
		$rvb=$row['RVB'];
		$rvb1=couleur($rvb,0.7);
		$rvb2=couleur($rvb,0.9);
	} else {
		$rvb="AA0000";
		$rvb1=couleur($rvb,0.7);
		$rvb2=couleur($rvb,0.9);
	}
	
echod("Colonnes : $COL_T");
//récupération des colonnes pour ce tournoi	
$cols =explode(",",$COL_T);
//nombre de colonne
$nbcol = count($cols); 	
echod("Nombre de colonnes : $nbcol");

for ($c=0; $c<$nbcol; $c++) {
		if ($cols[$c]=='FFE') {
			$rPerf='FFE';
		}
}

for ($c=0; $c<$nbcol; $c++) {
		if ($cols[$c]=='Perf') {
			$rPerf='Perf';
		}
}
echod("colonne Perf : $rPerf");



/******************************************************************************
								ECRITURE FICHIER
******************************************************************************/

fwrite($papifile,"<html>\n");
fwrite($papifile,"<head>\n");
//fwrite($papifile,"<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
//fwrite($papifile,"<link id=\"styleDeBase\" rel=\"stylesheet\" type=\"text/css\" href=\"css/couleur_$rvb.css\"/>\n");
fwrite($papifile,"<style type=text/css>\n");
fwrite($papifile,".ligneclaire {font-family:Arial; font-size:8pt; color: #000000; background-color: #FFFFFF;}\n");
fwrite($papifile,".ligneclaire:hover{background-color: #$rvb1;cursor:default;}\n");
fwrite($papifile,".lignefoncee {font-family:Arial; font-size:8pt; color: #000000; background-color: #$rvb2;}\n");
fwrite($papifile,".lignefoncee:hover{background-color: #$rvb1;cursor:default;}\n");
fwrite($papifile,".entete {font-family:Arial; font-size:8pt; color: #FFFFFF; background-color: #$rvb; font-weight: bold;}\n");
fwrite($papifile,".titre {font-family:Arial; font-size:12pt; color: #$rvb; font-weight:bold; height:50px}\n");
fwrite($papifile,".soustitre {font-family:Arial; font-size:10pt; color: #000000; background-color: #$rvb1; font-weight: bold;}\n");
fwrite($papifile,".surligne { background-color: #$rvb1;}\n");
fwrite($papifile,"td {	white-space:nowrap;	}\n");
fwrite($papifile,"a { text-decoration: none; }\n");
fwrite($papifile,"#container .infobox {position: relative; z-index: 0;}\n");
fwrite($papifile,"#container .infobox:hover {position: relative; z-index: 50;}\n");
fwrite($papifile,"#container .infobox .more {display: none; border: black solid 1px;}\n");
fwrite($papifile,"#container .infobox:hover .more {display: block; position: absolute; left: 100px; top: 12px; padding: 10px 10px 10px 10px;\n");
fwrite($papifile,"border: 1px solid grey; background-color: white; }\n");
fwrite($papifile,"</style>\n");
fwrite($papifile,"</head>\n");
fwrite($papifile,"<body>\n");
fwrite($papifile,"<div align=\"center\">\n");

/******************************************************************************
								AFFICHAGE TABLEAU 
******************************************************************************/

fwrite($papifile,"<div class=\"titre\">\n");

//affiche le nom du tournoi
fwrite($papifile,$NOM_T);

fwrite($papifile,"<br>\n");

//affiche la description du tournoi
fwrite($papifile,$DESC_T);

fwrite($papifile,"</div>\n");
fwrite($papifile,"<div id=\"container\">\n");
fwrite($papifile,"<table border='0' cellpadding='1' cellspacing='0' bordercolor='#000000'>\n");
fwrite($papifile,"<tr class=\"entete\">\n");

/******************************************************************************
								AFFICHAGE DES ENTETES 
******************************************************************************/
for ($c=0; $c<$nbcol; $c++) 
{		
	if ($c>2) {
		fwrite($papifile,"\t<td width='30px'>&nbsp;$cols[$c]&nbsp;</td>\n");	
	} else {
		fwrite($papifile,"\t<td>&nbsp;$cols[$c]&nbsp;</td>\n");	
	}
}
//colonne diff
fwrite($papifile,"\t<td>&nbsp;Diff&nbsp;</td>\n");	
fwrite($papifile,"</tr>\n");

/******************************************************************************
							REQUETTE LIGNES 
******************************************************************************/
$nbl=0;// compteur de ligne
$njas=0;// n° joueur surligné
$query="SELECT * FROM gad_data WHERE ID_T=$id_t ORDER BY Pl";
$requete_fiche=mysqli_query ($link,$query);
echod($query);
while ($row=mysqli_fetch_array($requete_fiche) ) {		
	
	$champs['Pl']=$row['Pl'];
	$champs['t']=$row['t'];
	$champs['Nom']=$row['Nom'];
	
	
	//contient les champs supplémentaires en commencant par ELO
	$tempo=explode('|',$row['CHAMPS']);		
	for ($c=0; $c<count($tempo); $c++) {		
		$strtruc="";
		$strtruc=$cols[$c+3];
		$champs[$strtruc]=$tempo[$c];
	}
	//$champs['Club']=$row['Club'];
	
	//met en gras la perf si elle est supperieur au classement
	// rPerf doit etre égale au numéro de colonne contenant perf ou ffe	
	if ($champs[$rPerf]>$champs[$cols[3]]) {$gras1="<b>";} else {$gras1='';}; 
	
	// compteur de ligne
	$nbl++;
	//ligne sombre ou ligne claire
	if (($nbl&1)==0) {$cf='claire';} else {$cf='foncee';};

	$surligne='';
	if (isset($jas)) {				
		for ($njas=1; $njas<count($jas)+1; $njas++) {
			if ($jas[$njas-1]==$champs['Pl']) { 
				$surligne="class=\"surligne\"";				
			}			
		}
	}
	
	if (($row['Club']==$cas)&&($cas!='')) { $surligne="class=\"surligne\""; };
		
		fwrite($papifile,"<tr class=\"ligne$cf\">\n");
/******************************************************************************
							AFFICHAGE LIGNES 
******************************************************************************/
		
			
		fwrite($papifile,"\t<td align=\"right\"> ".$champs['Pl']."</td>\n");
		fwrite($papifile,"\t<td align=\"right\"> ".$champs['t']."</td>\n");
		
		If (TRUE) { // AFFICHAGE DU NOM DU JOUEUR ET DE SON PARCOURS
			
					
			//**************************** SI LA COLONNE CONTIENT LE NOM
			
			
				//modifie la classe d'affichage si le joueur est a surligner				
								
				fwrite($papifile,"\t<td $surligne>\n");				
				fwrite($papifile,"\t<div class=\"infobox\">\n");				
				fwrite($papifile,"\t<b>".$champs['Nom']."</b>\n");	
				
				/******************************************************************************
													AFFICHAGE PARCOURS
				******************************************************************************/
				fwrite($papifile,"\t<div class=\"more\">\n");				
				fwrite($papifile,"\t<center>\n");	
				fwrite($papifile,"\t<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>\n");
				
				fwrite($papifile,"\t\t<tr class=\"soustitre\">");
				
				if ($row['Club']!='') {
					fwrite($papifile,"\t<td colspan=50 align=center>".$row['Club']."</td></tr>");			
				}
				
				fwrite($papifile,"\t\t<tr class=\"soustitre\">");
				fwrite($papifile,"\t<td> </td>");
				fwrite($papifile,"\t<td> </td>");
				fwrite($papifile,"\t<td> </td>");			
				
				//affiche les infos du joueur
				for ($cjou=0; $cjou<$nbcol; $cjou++) {
					if (substr($cols[$cjou],0,2)!='Rd') {
						$nomprenom=str_replace( ' ','&nbsp;', $champs[$cols[$cjou]]);						
						fwrite($papifile,"\t<td>$nomprenom</td>");
					}
				}
				//colonne Diff
				fwrite($papifile,"<td></td>");					
				fwrite($papifile,"</tr>\n");
				
				
				
				fwrite($papifile,"\t\t<tr class=\"entete\">");				
				fwrite($papifile,"<td>Rd</td>");				
				fwrite($papifile,"<td> </td>");					
				fwrite($papifile,"<td> </td>");				
					
					//affiche les entetes de colonne différentes des rondes
					for ($col=0; $col<$nbcol; $col++) {	
						if (substr($cols[$col],0,2)!='Rd') {
							fwrite($papifile,"<td>$cols[$col]</td>");
						}
					}
					//colonne diff
					fwrite($papifile,"\t<td>&nbsp;Diff&nbsp;</td>\n");	
					fwrite($papifile,"</tr>\n");	
				
					$rd=0; // compteur de ronde
					$rde=1; // compteur de ronde effective
					// pour chaque colonne du joueur
					for ($i=0; $i<$nbcol; $i++) {
						//si la colonne est une ronde
						if (substr($cols[$i],0,2)=='Rd') {
							$rd++;		
							$numadv=substr($champs[$cols[$i]],1,-1);//récupère le classement de l'adv
							$resadv=substr($champs[$cols[$i]],0,1);//récupère le résultat + - = < > E
							$couladv=substr($champs[$cols[$i]],strlen($champs[$cols[$i]])-1,1); //récupère la couleur B N E
							if (($rde&1)==0) {$cf='claire';} else {$cf='foncee';};
							// LIGNE SI EXEMPT A UNE RONDE
							if (($numadv=='X')&&($resadv='E')) {
								$rde++;
								fwrite($papifile,"\t\t<tr class=\"ligne$cf\">");	
								fwrite($papifile,"<td > $rd </td>");	
								fwrite($papifile,"<td></td>");	
								fwrite($papifile,"<td>Exempt</td>");
								for ($j=0; $j<$nbcol; $j++) {
									if ((substr($cols[$j],0,2)!='Rd')) {
										fwrite($papifile,"<td></td>");	
									}
								}
								fwrite($papifile,"<td></td>");	
								fwrite($papifile,"</tr>\n");
							} else {
								$query="SELECT * FROM gad_data WHERE ID_T=$id_t AND Pl=$numadv";
								
								if ($requete_adv=mysqli_query($link,$query)) { 
									$row_adv=mysqli_fetch_array($requete_adv); 
									
									$champs_adv['Pl']=$row_adv['Pl'];
									$champs_adv['t']=$row_adv['t'];
									$champs_adv['Nom']=$row_adv['Nom'];
	
									//contient les champs supplémentaires en commencant par ELO
									$tempo=explode('|',$row_adv['CHAMPS']);		
									for ($c=0; $c<count($tempo); $c++) {		
										$strtruc="";
										$strtruc=$cols[$c+3];
										$champs_adv[$strtruc]=$tempo[$c];
									}
									
									$champs_adv['Club']=$row_adv['Club'];
									
									
									$rde++;
									//Gras si perf
									$gras='';
									if ((($champs_adv[$cols[3]]-$champs[$cols[3]])>20)&&(($resadv=='+')||($resadv=='='))) {$gras='class="surligne"';} ;
									if ((($champs[$cols[3]]-$champs_adv[$cols[3]]>20))&&(($resadv=='-')||($resadv=='='))) {$gras='class="surligne"';};
					
									fwrite($papifile,"\t\t<tr class=\"ligne$cf\">");	
									fwrite($papifile,"<td > $rd </td>");	
									
									if ($couladv=="N"){$couladv="C";};
									fwrite($papifile,"<td> &#x25F$couladv; </td>");	
									
									fwrite($papifile,"<td $gras>");	
									if ($resadv=='+') {fwrite($papifile,"Gagn&eacute;");};
									if ($resadv=='=') {fwrite($papifile,"Nulle");};
									if ($resadv=='-') {fwrite($papifile,"Perdu");};
									
									if ($resadv=='>') {fwrite($papifile,"Gain (F)");};									
									if ($resadv=='<') {fwrite($papifile,"Absent");};									
									fwrite($papifile,"</td>");									
									
									for ($j=0; $j<$nbcol; $j++) {
										if ((substr($cols[$j],0,2)!='Rd')) {
											$donnee=str_replace( ' ','&nbsp;', $champs_adv[$cols[$j]]);	
											if ($j==3) {fwrite($papifile,"<td $gras>");} else {fwrite($papifile,"<td>");};																		
											
											$donnee=str_replace('.5','&frac12;',$donnee);				//remplace les 1/2 
											$donnee=str_replace('.25','&frac14;',$donnee);				//remplace les 1/4
											$donnee=str_replace('.75','&frac34;',$donnee);				//remplace les 3/4		
											
											if ($champs_adv['Club']!='') {
												fwrite($papifile,"<a title=\"".$champs_adv['Club']."\">");
											}
											
											fwrite($papifile,"$donnee");
											
											if ($champs_adv['Club']!='') {
												fwrite($papifile,"</a>");
											}
											
											fwrite($papifile,"</td>");	
											
										}
									}
									$diff=$champs_adv[$rPerf]-$champs_adv[$cols[3]];
									if ($diff>0) {$plus='+';} else {$plus='';};
									fwrite($papifile,"\t<td align=\"right\">".$plus.$diff."</td>\n");								
									fwrite($papifile,"</tr>\n");				
								}
							}
						}
					}
				
				fwrite($papifile,"\t</table>\n");				
				fwrite($papifile,"\t</div>\n");			
				fwrite($papifile,"\t</div>\n");				
				fwrite($papifile,"\t</center>\n");				
				fwrite($papifile,"</td>\n");					
			
			//***********************************************************************
			//*************************************************************************
			//***********************************************************************
			
		}
		
		for ($c=3; $c<count($champs); $c++) 
		{	
			if  ($cols[$c]=='Pts') 
			{
				$donnee=$champs['Pts'];
				$donnee=str_replace('.5','&frac12;',$donnee);				//remplace les 1/2 
				$donnee=str_replace('.25','&frac14;',$donnee);				//remplace les 1/4
				$donnee=str_replace('.75','&frac34;',$donnee);				//remplace les 3/4				
				fwrite($papifile,"\t<td align='center'><b>$donnee</b></td>\n");		
			}			
			// si la colonne est une ronde
			elseif  (substr($cols[$c],0,2)=='Rd') {				
			
			
				fwrite($papifile,"\t<td align=\"right\">".$champs[$cols[$c]]."</td>\n");
			}			
			//**************************** SI LA COLONNE CONTIENT LE ELO 
			elseif  ($c==3) {							
				fwrite($papifile,"\t<td align=\"right\">$gras1 ".$champs[$cols[3]]."</td>\n");
			}
			//**************************** SI LA COLONNE CONTIENT LA PERF
			elseif  ($cols[$c]==$rPerf)  {							
				fwrite($papifile,"\t<td align=\"right\">$gras1 ".$champs[$rPerf]."</td>\n");
			}
			//**************************** POUR LES AUTRES COLONNES
			else {
				$donnee=$champs[$cols[$c]];
				$donnee=str_replace('.5','&frac12;',$donnee);				//remplace les 1/2 
				$donnee=str_replace('.25','&frac14;',$donnee);				//remplace les 1/4
				$donnee=str_replace('.75','&frac34;',$donnee);				//remplace les 3/4			
				fwrite($papifile,"\t<td align='center'> $donnee </td>\n");
			}
		}	
		
		$diff=$champs[$rPerf]-$champs[$cols[3]];
		if ($diff>0) {$plus='+';} else {$plus='';};
		fwrite($papifile,"\t<td align=\"right\">".$plus.$diff."</td>\n");
		fwrite($papifile,"</tr>\n");
	}
}
fwrite($papifile,"</table>\n");
fwrite($papifile,"</br>\n");
fwrite($papifile,"<a href=\"http://www.echecs95.com/spip.php?article32\" class=\"titre\" target=\"_blank\">&nbsp;&nbsp; A propos des grilles am&eacute;ricaines dynamiques &nbsp;&nbsp;</a>\n");
fwrite($papifile,"</br></br></br></br></br></br></br></br>\n");
fwrite($papifile,"</div>\n");
fwrite($papifile,"</div>\n");
fwrite($papifile,"</body></html>\n");
//ECHO "Fermeture du fichier gad$id_t.html</br>";
fclose($papifile); //ferme le fichier

mysqli_query($link,"UPDATE gad_files SET VER='$version',RVB='$rvb' WHERE ID_T=$id_t");
if ($dev==0) {
	 header('Location: html/gad'.$id_t.'.html');
} else {	
	ECHO "<a href=\"html/gad$id_t.html\" target=\"_blank\">Afficher le fichier gad$id_t.html</a></br>";
	}


?>