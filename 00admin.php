<?php
session_start();
/******************************************************************************
ACTIONS DE LA PAGE
- permet de se connecter en mode admin
- lien vers envoyer une grille sendfile.php 
- liste les grilles avec un lien de modification modifgad.php 
*********************************************************************************/

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
<?php

if (isset($_REQUEST['pass'])) { 
	$pass=$_REQUEST['pass'];
	if ($pass=='votreMDP') {
		$_SESSION['ydh437']='oui';
	}
}
if (!isset($_SESSION['ydh437'])) {
	$_SESSION['ydh437']='non';
}

include("_connect.php");
?>

<H1>Dynamiseur de grille américaine</H1>
<a href='index.php'>Accueil</a> > Administration
<?php 
if ($_SESSION['ydh437']=='non') {
?>
</br>
</br>
<form action="00admin.php" method="post">
Password : <input type="password" name="pass"  />
<input type="submit" value="Mode Admin" />
</form>

<?php 
}
?>

<?php 
if ($_SESSION['ydh437']=='oui') {
?>
</br>
<ul>
<li><a href="01sendfile.php">Envoyer une grille</a></li>
</ul>
<br>

Liste des grilles version > 2.20 
<table>
<tr>
<td></td>
<td>Id</td>
<td>Nom</td>
<td>Version</td>
<td>Import </td>
<td>Joueurs </td>
<td> </td>

</tr>
<?php

$requete_fiche=mysqli_query ($link,"SELECT * FROM gad_files ORDER BY ID_T DESC");
while ($row=mysqli_fetch_array($requete_fiche) ) 
{
if ($row[6]=='') {$coultext='000000';} else {$coultext='FFFFFF';};
?>
<tr>
<td><?php if ($row['EFF']==0) {  ?><a href='deletegad.php?id_t=<?php echo $row[0]?>' TITLE='Effacer les lignes !'><img src='img/del.png'></a><?php } ?></td>
<td><?php echo $row[0]?></td>
<td ><a href='html/gad<?php echo $row[0]?>.html' target="_blank"><?php echo $row[1]?></a></td>
<td STYLE="background-color:#<?php echo $row[6]?>; color:#<?php echo $coultext?>;" align='center'><?php echo $row['VER']?></td>
<td align='center'><?php echo $row['MAJ']?></td>
<td align='right'><?php echo $row['NBJ_T']?></td>
<td>
<?php if ($row['EFF']==0) {  ?><a href='04modifgad.php?id_t=<?php echo $row[0]?>'>Modifier</a><?php } else { ?> 
<a href='deletefile.php?id_t=<?php echo $row[0]?>' TITLE='Supprimer le tournoi !'><img src='img/del.png'></a> <?php } ?>
</td>


</tr>
<?php
}

} // fin section admin
?>
</table>

</body>
</html>