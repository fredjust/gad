<?php
/******************************************************************************
ACTIONS DE LA PAGE
- déconnecte du mode admin
- liens vers tester les couleurs rvb.php
- liens vers administration admin.php
- liste les grilles ayant une version c-a-d déjà générées 
	avec un lien de consultation
*********************************************************************************/
session_start();
if (isset($_REQUEST['admin'])) { 
	$_SESSION['ydh437']='non';
}
if (!isset($_SESSION['ydh437'])) {
	$_SESSION['ydh437']='non';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
<H1>Dynamiseur de grille américaine</H1>
Accueil

<ul>
<li><a href='01sendfile.php'>Dynamiser une grille</a></a>
<li><a href="rvb.php" target="_blanck">Tester les couleurs et obtenir le style</a></li>
<li><a href="00admin.php">Administration</a>
<?php if ($_SESSION['ydh437']=='oui') {
?>
( <a href='index.php?admin=0'>déconnexion</a> ) 
<?php
}
?>

</li>
<li><a href='historique.html'>Historique</a>
</ul>

<br>

Liste des grilles américaines dynamiques</br>
</br>
<table>
<tr>
<td>Id</td>
<td>Nom</td>
<td>Version</td>
<td> Date</td>
<td> Dép</td>
<td> joueurs</td>
</tr>
<?php
include("_connect.php");
$requete_fiche=mysqli_query ($link,"SELECT * FROM gad_files ORDER BY ID_T DESC");
while ($row=mysqli_fetch_array($requete_fiche) ) 
{
?>
<tr>
<td STYLE="background-color:#<?php echo $row[6]?>; color:#FFFFFF;" ><?php echo $row[0]?></td>
<td ><a href='html/gad<?php echo $row[0]?>.html' target="_blank"><?php echo $row[1]?></a><br>
	<?php
	$i=1;
	while (file_exists('html/gad'.$row[0].'_'.$i.'.html')) { ?>
			<a href="html/gad<?php echo $row[0]?>_<?php echo $i?>.html" target=blank> copie <?php echo $i?> </a>
<?php
		$i++;
		}
	?>



</td>
<td STYLE="background-color:#<?php echo $row[6]?>; color:#FFFFFF;" align='center'><?php echo $row['VER']?></td>
<td> <?php echo $row['MAJ']?></td>
<td align="right"> <?php echo $row['dep']?></td>
<td align="right"> <?php echo $row['NBJ_T']?></td>
</tr>
<?php
}
/***************************************************************************************/
?>

</table>
</body>
</html>