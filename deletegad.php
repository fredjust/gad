<?php
session_start();
if (!isset($_SESSION['ydh437'])) {
	$_SESSION['ydh437']='non';
	header('Location: index.php');
	exit;
}

if (isset($_REQUEST['id_t'])) { $id_t=$_REQUEST['id_t'];} else { die('id_t manquant'); };

include("_connect.php");
$query="UPDATE gad_files SET EFF=1 WHERE ID_T=$id_t";
if (!mysqli_query($link,$query)){
	echo ("ECHEC ! effacement tournoi n° $id_t</br>");
} else	{
	$query="DELETE FROM gad_data WHERE ID_T=$id_t";
	if (!mysqli_query($link,$query)) {
		echo ("ECHEC ! effacement ligne du tournoi n° $id_t</br>");
	} else {
		header('Location: 00admin.php');
	}
}
	
?>
