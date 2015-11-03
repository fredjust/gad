<?php

// test git

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

$rvb='AA0000';

if (isset($_REQUEST['rvb']))  { $rvb=$_REQUEST['rvb']; };
$rvb1=couleur($rvb,0.7);
$rvb2=couleur($rvb,0.9);

?>

.gad-cl {font-family:Arial; font-size:8pt; color: #000000; background-color: #FFFFFF;}
.gad-cl:hover{background-color: #<?PHP echo $rvb1?>;cursor:default;}
.gad-fon {font-family:Arial; font-size:8pt; color: #000000; background-color: #<?PHP echo $rvb2?>;}
.gad-fon:hover{background-color: #<?PHP echo $rvb1?>;cursor:default;}
.gad-gad-entete {font-family:Arial; font-size:8pt; color: #FFFFFF; background-color: #<?PHP echo $rvb?>; font-weight: bold;}
.gad-titre {font-family:Arial; font-size:12pt; color: #<?PHP echo $rvb?>; font-weight:bold; height:50px}
.gad-ss-titre {font-family:Arial; font-size:10pt; color: #000000; background-color: #<?PHP echo $rvb1?>; font-weight: bold;}
.gad-surligne {font-family:Arial; font-size:8pt; font-weight: bold; color: #000000; background-color: #<?PHP echo $rvb1?>;}
td {	white-space:nowrap;	}
#gad-cont .gad-box {position: relative; z-index: 0;}
#gad-cont .gad-box:hover {position: relative; z-index: 50;}
#gad-cont .gad-box .gad-more {display: none; border: black solid 1px;}
#gad-cont .gad-box:hover .gad-more {display: block; position: absolute; left: 100px; top: 12px; padding: 10px 10px 10px 10px;
  border: 1px solid grey; background-color: white; }