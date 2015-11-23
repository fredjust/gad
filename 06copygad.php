<?php
session_start();
$id_t=0;
$suf="";
if (isset($_REQUEST['id_t']))  { $id_t =$_REQUEST['id_t']; }; 


//sans id tournoi on quitte
if ($id_t==0) { header("Location: index.php"); };

//sans suffixe on quitte
if ($suf=="") { header("Location: index.php"); };

if (file_exists('html/gad'.$id_t.'.html')) {

	$i=1;
	while (file_exists('html/gad'.$id_t.'_'.$i.'.html')) {

		$i++;
		}

	if (copy ( 'html/gad'.$id_t.'.html' , 'html/gad'.$id_t.'_'.$i.'.html' )) {
			header("Location: 04modifgad.php?id_t=$id_t");
	}
}
else
{
	header("Location: index.php");
}


?>