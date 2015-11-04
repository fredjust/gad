<?php
session_start();
if (!isset($_SESSION['ydh437'])) {
	$_SESSION['ydh437']='non';
	header('Location: index.php');
	exit;
}

if (isset($_REQUEST['id_t'])) { $id_t=$_REQUEST['id_t'];} else { die('id_t manquant'); };

include("_connect.php");
$query="DELETE FROM gad_files WHERE ID_T=$id_t";
if (!mysqli_query($link,$query)){
	echo ("ECHEC ! effacement tournoi n° $id_t</br>");
} else	{	
		header('Location: 00admin.php');
}

	
?>
