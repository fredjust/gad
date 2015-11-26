<?php
/******************************************************************************
ACTIONS DE LA PAGE
- affiche les anciennes GAD de la table ga_tournois
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
<a href='index.php'>Accueil</a> > Anciennes grilles

<br>

<br>

Liste des anciennes grilles américaines dynamiques</br>
</br>
<table>
<tr>
<td>Id</td>
<td>Nom</td>
<td>Version</td>
<td> Date</td>
<td> joueurs</td>
</tr>

<?php
include("_connect.php");
$requete_fiche=mysqli_query ($link,"SELECT * FROM ga_tournois WHERE VER<>'' ORDER BY ID_T DESC LIMIT 0,50");
while ($row=mysqli_fetch_array($requete_fiche) ) 
{
?>
<tr>
<td STYLE="background-color:#<?php echo $row[6]?>; color:#FFFFFF;" ><?php echo $row[0]?></td>
<td ><a href='html/gad<?php echo $row[0]?>.html' target="_blanck"><?php echo $row[1]?></a></td>
<td STYLE="background-color:#<?php echo $row[6]?>; color:#FFFFFF;" align='center'><?php echo $row['VER']?></td>
<td> <?php echo $row['MAJ']?></td>
<td align="right"> <?php echo $row['NBJ_T']?></td>
</tr>
<?php
}

?>
</table>
</body>
</html>