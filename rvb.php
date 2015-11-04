<?php
/******************************************************************************
ACTIONS DE LA PAGE
- PERMET DE TESTER L APPARENCE D UNE GRILE AVEC UNE COULEUR
- propose les couleur de la table couleur
- permet de choisir une couleur avec un javascript
******************************************************************************/

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

$rvb='395480';
$rvbl='395480';
$rvbs='395480';

if (isset($_REQUEST['rvbs'])) { 

	$rvbs=$_REQUEST['rvbs']; 
	
	if ($rvbs=='autre') {
	
		$rvb=$_REQUEST['rvbl'];
	} else {
	
		$rvb=$rvbs;
	}
	
	
};

if (isset($_REQUEST['rvb']))  { $rvb =$_REQUEST['rvb']; };
$rvb1=couleur($rvb,0.7);
$rvb2=couleur($rvb,0.9);

?>
<html>
<head>
<style type=text/css>
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
</style>
</head>
<body>
<a href='index.php'>Accueil</a>
<div align="center">
<div class="gad-titre">
tester les couleurs sur une feuille contenant toutes les infos<br>
y compris le club des joueurs<br>
<hr>
Championnat de France Cadets Juniors<br>
cadence 5 min + 2 sec , 17 Octobre 2015</div>
<br><br><br>
<div id="gad-cont">
<table border='0' cellpadding='1' cellspacing='0' bordercolor='#000000'>
<tr class="gad-gad-entete">
	<td>&nbsp;Pl&nbsp;</td>
	<td>&nbsp;t&nbsp;</td>
	<td>&nbsp;Nom&nbsp;</td>
	<td width='30px'>&nbsp;Rapide&nbsp;</td>
	<td width='30px'>&nbsp;Cat&nbsp;</td>
	<td width='30px'>&nbsp;Fede&nbsp;</td>
	<td width='30px'>&nbsp;Ligue&nbsp;</td>
	<td width='30px'>&nbsp;Rd01&nbsp;</td>
	<td width='30px'>&nbsp;Rd02&nbsp;</td>
	<td width='30px'>&nbsp;Rd03&nbsp;</td>
	<td width='30px'>&nbsp;Rd04&nbsp;</td>
	<td width='30px'>&nbsp;Rd05&nbsp;</td>
	<td width='30px'>&nbsp;Rd06&nbsp;</td>
	<td width='30px'>&nbsp;Rd07&nbsp;</td>
	<td width='30px'>&nbsp;Rd08&nbsp;</td>
	<td width='30px'>&nbsp;Rd09&nbsp;</td>
	<td width='30px'>&nbsp;Pts&nbsp;</td>
	<td width='30px'>&nbsp;Tr&nbsp;</td>
	<td width='30px'>&nbsp;Perf&nbsp;</td>
	<td>&nbsp;Diff&nbsp;</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 1</td>
	<td align="right"> f</td>
	<td >
	<div class="gad-box">
	<b>RAKOTOMAHARO Fy Antenaina</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Clichy-Echecs-92</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>1</td>	<td>f</td>	<td>RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</td>	<td>2330R</td>	<td>CadM</td>	<td>MAD</td>	<td>IDF</td>	<td>8.5</td>	<td>42</td>	<td>2676</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td class="gad-surligne"><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 2330R</td>
	<td align='center'> CadM </td>
	<td align='center'> MAD </td>
	<td align='center'> IDF </td>
	<td align="right">+25N</td>
	<td align="right">=13B</td>
	<td align="right">+10N</td>
	<td align="right">+2B</td>
	<td align="right">+3N</td>
	<td align="right">+4B</td>
	<td align="right">+5N</td>
	<td align="right">+7B</td>
	<td align="right">+14N</td>
	<td align='center'><b>8&frac12;</b></td>
	<td align='center'> 42 </td>
	<td align="right"><b> 2676</td>
	<td align="right">+346</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 2</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>MEUNIER Clement</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Echiquier Orangeois</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>2</td>	<td>&nbsp;</td>	<td>MEUNIER&nbsp;Clement</td>	<td>2280R</td>	<td>CadM</td>	<td>FRA</td>	<td>PRO</td>	<td>7</td>	<td>41.5</td>	<td>2364</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td class="gad-surligne"><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 2280R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> PRO </td>
	<td align="right">+24B</td>
	<td align="right">+30N</td>
	<td align="right">=8B</td>
	<td align="right">-1N</td>
	<td align="right">+11B</td>
	<td align="right">+12N</td>
	<td align="right">=7B</td>
	<td align="right">+5B</td>
	<td align="right">+3N</td>
	<td align='center'><b>7</b></td>
	<td align='center'> 41&frac12; </td>
	<td align="right"><b> 2364</td>
	<td align="right">+84</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 3</td>
	<td align="right"> f</td>
	<td >
	<div class="gad-box">
	<b>MIRIMANIAN Hayk</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>U.S.Villejuif Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>3</td>	<td>f</td>	<td>MIRIMANIAN&nbsp;Hayk</td>	<td>2260R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>7</td>	<td>41.5</td>	<td>2362</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td ><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td class="gad-surligne"><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 2260R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+6B</td>
	<td align="right">+11N</td>
	<td align="right">+7B</td>
	<td align="right">+21N</td>
	<td align="right">-1B</td>
	<td align="right">+14N</td>
	<td align="right">+8B</td>
	<td align="right">+10N</td>
	<td align="right">-2B</td>
	<td align='center'><b>7</b></td>
	<td align='center'> 41&frac12; </td>
	<td align="right"><b> 2362</td>
	<td align="right">+102</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 4</td>
	<td align="right"> f</td>
	<td >
	<div class="gad-box">
	<b>RODRIGUEZ Adrien</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Lutèce Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>4</td>	<td>f</td>	<td>RODRIGUEZ&nbsp;Adrien</td>	<td>2200R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>7</td>	<td>39</td>	<td>2288</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 2200R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+17B</td>
	<td align="right">=15N</td>
	<td align="right">=12B</td>
	<td align="right">+11N</td>
	<td align="right">+21B</td>
	<td align="right">-1N</td>
	<td align="right">+9B</td>
	<td align="right">+8N</td>
	<td align="right">+10B</td>
	<td align='center'><b>7</b></td>
	<td align='center'> 39 </td>
	<td align="right"><b> 2288</td>
	<td align="right">+88</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 5</td>
	<td align="right"> f</td>
	<td >
	<div class="gad-box">
	<b>KAMBRATH Yannick</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Clichy-Echecs-92</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>5</td>	<td>f</td>	<td>KAMBRATH&nbsp;Yannick</td>	<td>2270R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>6</td>	<td>39</td>	<td>2226</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td ><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td class="gad-surligne"><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td class="gad-surligne"><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2270R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+33N</td>
	<td align="right">+18B</td>
	<td align="right">-21N</td>
	<td align="right">+22B</td>
	<td align="right">+12B</td>
	<td align="right">+7N</td>
	<td align="right">-1B</td>
	<td align="right">-2N</td>
	<td align="right">+11B</td>
	<td align='center'><b>6</b></td>
	<td align='center'> 39 </td>
	<td align="right"> 2226</td>
	<td align="right">-44</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 6</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>OHANOV David</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cavalier Bleu Drancy</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>6</td>	<td>&nbsp;</td>	<td>OHANOV&nbsp;David</td>	<td>1840R</td>	<td>JunM</td>	<td>ARM</td>	<td>IDF</td>	<td>6</td>	<td>31.5</td>	<td>1973</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td class="gad-surligne"><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td ><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td class="gad-surligne"><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td class="gad-surligne"><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1840R</td>
	<td align='center'> JunM </td>
	<td align='center'> ARM </td>
	<td align='center'> IDF </td>
	<td align="right">-3N</td>
	<td align="right">-26B</td>
	<td align="right">+32N</td>
	<td align="right">+35B</td>
	<td align="right">-19N</td>
	<td align="right">+34B</td>
	<td align="right">+21N</td>
	<td align="right">+22B</td>
	<td align="right">+13N</td>
	<td align='center'><b>6</b></td>
	<td align='center'> 31&frac12; </td>
	<td align="right"><b> 1973</td>
	<td align="right">+133</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 7</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>MSELLEK Ilyass</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Tremblay en France</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>7</td>	<td>&nbsp;</td>	<td>MSELLEK&nbsp;Ilyass</td>	<td>2420R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5.5</td>	<td>44</td>	<td>2224</td><td></td></tr>
		<tr class="gad-gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gain (F)</td><td><a title="Yerres-Roi">38</a></td><td><a title="Yerres-Roi">&nbsp;</a></td><td><a title="Yerres-Roi">LI&nbsp;Victor</a></td><td ><a title="Yerres-Roi">1890R</a></td><td><a title="Yerres-Roi">CadM</a></td><td><a title="Yerres-Roi">FRA</a></td><td><a title="Yerres-Roi">IDF</a></td><td><a title="Yerres-Roi">0</a></td><td><a title="Yerres-Roi">24&frac12;</a></td><td><a title="Yerres-Roi">0</a></td>	<td align="right">-1890</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td ><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td class="gad-surligne"><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td class="gad-surligne"><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td ><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2420R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">>38N</td>
	<td align="right">+19B</td>
	<td align="right">-3N</td>
	<td align="right">+8N</td>
	<td align="right">+9B</td>
	<td align="right">-5B</td>
	<td align="right">=2N</td>
	<td align="right">-1N</td>
	<td align="right">+16B</td>
	<td align='center'><b>5&frac12;</b></td>
	<td align='center'> 44 </td>
	<td align="right"> 2224</td>
	<td align="right">-196</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 8</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>ROQUE Gaetan</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cavalier de la Tourelle Saint-Mande</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>8</td>	<td>&nbsp;</td>	<td>ROQUE&nbsp;Gaetan</td>	<td>2040R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5.5</td>	<td>40.5</td>	<td>2238</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gain (F)</td><td><a title="Club d'Echecs du Vesinet">37</a></td><td><a title="Club d'Echecs du Vesinet">&nbsp;</a></td><td><a title="Club d'Echecs du Vesinet">GENIX&nbsp;Oscar</a></td><td ><a title="Club d'Echecs du Vesinet">1660R</a></td><td><a title="Club d'Echecs du Vesinet">CadM</a></td><td><a title="Club d'Echecs du Vesinet">FRA</a></td><td><a title="Club d'Echecs du Vesinet">IDF</a></td><td><a title="Club d'Echecs du Vesinet">0</a></td><td><a title="Club d'Echecs du Vesinet">24&frac12;</a></td><td><a title="Club d'Echecs du Vesinet">0</a></td>	<td align="right">-1660</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td class="gad-surligne"><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td ><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td class="gad-surligne"><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 2040R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">>37N</td>
	<td align="right">+10B</td>
	<td align="right">=2N</td>
	<td align="right">-7B</td>
	<td align="right">+13N</td>
	<td align="right">+19B</td>
	<td align="right">-3N</td>
	<td align="right">-4B</td>
	<td align="right">+17N</td>
	<td align='center'><b>5&frac12;</b></td>
	<td align='center'> 40&frac12; </td>
	<td align="right"><b> 2238</td>
	<td align="right">+198</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 9</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>TOURE Ananth</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Noisiel Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>9</td>	<td>&nbsp;</td>	<td>TOURE&nbsp;Ananth</td>	<td>2110R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5.5</td>	<td>33</td>	<td>2033</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td class="gad-surligne"><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td ><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td ><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td class="gad-surligne"><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2110R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-29N</td>
	<td align="right">+28B</td>
	<td align="right">+33N</td>
	<td align="right">+27B</td>
	<td align="right">-7N</td>
	<td align="right">+21B</td>
	<td align="right">-4N</td>
	<td align="right">=17B</td>
	<td align="right">+18N</td>
	<td align='center'><b>5&frac12;</b></td>
	<td align='center'> 33 </td>
	<td align="right"> 2033</td>
	<td align="right">-77</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 10</td>
	<td align="right"> f</td>
	<td >
	<div class="gad-box">
	<b>PHILIPPE Guillaume</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Clichy-Echecs-92</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>10</td>	<td>f</td>	<td>PHILIPPE&nbsp;Guillaume</td>	<td>2360R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>42.5</td>	<td>2133</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td ><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td class="gad-surligne"><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2360R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+16B</td>
	<td align="right">-8N</td>
	<td align="right">-1B</td>
	<td align="right">+17N</td>
	<td align="right">+24B</td>
	<td align="right">+15N</td>
	<td align="right">+14B</td>
	<td align="right">-3B</td>
	<td align="right">-4N</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 42&frac12; </td>
	<td align="right"> 2133</td>
	<td align="right">-227</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 11</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>ALBARIC Etienne</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Lutèce Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>11</td>	<td>&nbsp;</td>	<td>ALBARIC&nbsp;Etienne</td>	<td>1930R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>40</td>	<td>2065</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td ><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1930R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+26N</td>
	<td align="right">-3B</td>
	<td align="right">+29N</td>
	<td align="right">-4B</td>
	<td align="right">-2N</td>
	<td align="right">+27B</td>
	<td align="right">+25N</td>
	<td align="right">+12B</td>
	<td align="right">-5N</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 40 </td>
	<td align="right"><b> 2065</td>
	<td align="right">+135</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 12</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>DUMAS Charles</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cavalier de la Tourelle Saint-Mande</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>12</td>	<td>&nbsp;</td>	<td>DUMAS&nbsp;Charles</td>	<td>2230R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>39</td>	<td>2068</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td ><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td class="gad-surligne"><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2230R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+23N</td>
	<td align="right">+22B</td>
	<td align="right">=4N</td>
	<td align="right">+13B</td>
	<td align="right">-5N</td>
	<td align="right">-2B</td>
	<td align="right">=16B</td>
	<td align="right">-11N</td>
	<td align="right">+24B</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 39 </td>
	<td align="right"> 2068</td>
	<td align="right">-162</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 13</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>EK Alexandre</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cercle d'Echecs de Villepinte</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>13</td>	<td>&nbsp;</td>	<td>EK&nbsp;Alexandre</td>	<td>2090R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>39</td>	<td>2012</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td class="gad-surligne"><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2090R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+34B</td>
	<td align="right">=1N</td>
	<td align="right">+15B</td>
	<td align="right">-12N</td>
	<td align="right">-8B</td>
	<td align="right">+23B</td>
	<td align="right">+18N</td>
	<td align="right">=16N</td>
	<td align="right">-6B</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 39 </td>
	<td align="right"> 2012</td>
	<td align="right">-78</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 14</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>LUTARD Florian</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Clichy-Echecs-92</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>14</td>	<td>&nbsp;</td>	<td>LUTARD&nbsp;Florian</td>	<td>2170R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>38.5</td>	<td>2054</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td class="gad-surligne"><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td ><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td ><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2170R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+27N</td>
	<td align="right">-21B</td>
	<td align="right">+25N</td>
	<td align="right">+16B</td>
	<td align="right">+23N</td>
	<td align="right">-3B</td>
	<td align="right">-10N</td>
	<td align="right">+15B</td>
	<td align="right">-1B</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 38&frac12; </td>
	<td align="right"> 2054</td>
	<td align="right">-116</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 15</td>
	<td align="right"> ff</td>
	<td >
	<div class="gad-box">
	<b>BELLAICHE Elise</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cercle d'Echecs de Villepinte</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>15</td>	<td>ff</td>	<td>BELLAICHE&nbsp;Elise</td>	<td>1900R</td>	<td>JunF</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>34.5</td>	<td>2024</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td ><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td class="gad-surligne"><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td ><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td class="gad-surligne"><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1900R</td>
	<td align='center'> JunF </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+36N</td>
	<td align="right">=4B</td>
	<td align="right">-13N</td>
	<td align="right">=18B</td>
	<td align="right">+27N</td>
	<td align="right">-10B</td>
	<td align="right">+23N</td>
	<td align="right">-14N</td>
	<td align="right">+22B</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 34&frac12; </td>
	<td align="right"><b> 2024</td>
	<td align="right">+124</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 16</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>DUQUESNE Adrien</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Evry Grand Roque</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>16</td>	<td>&nbsp;</td>	<td>DUQUESNE&nbsp;Adrien</td>	<td>1870R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>5</td>	<td>33</td>	<td>2067</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td ><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td ><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td class="gad-surligne"><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td ><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1870R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-10N</td>
	<td align="right">+29B</td>
	<td align="right">+26N</td>
	<td align="right">-14N</td>
	<td align="right">+30B</td>
	<td align="right">+22B</td>
	<td align="right">=12N</td>
	<td align="right">=13B</td>
	<td align="right">-7N</td>
	<td align='center'><b>5</b></td>
	<td align='center'> 33 </td>
	<td align="right"><b> 2067</td>
	<td align="right">+197</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 17</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>GUERLACH Keigo</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>C.E. de  Bois-Colombes</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>17</td>	<td>&nbsp;</td>	<td>GUERLACH&nbsp;Keigo</td>	<td>1820R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>4.5</td>	<td>35</td>	<td>1917</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td ><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td ><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td class="gad-surligne"><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td class="gad-surligne"><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1820R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-4N</td>
	<td align="right">+36B</td>
	<td align="right">-22N</td>
	<td align="right">-10B</td>
	<td align="right">+26N</td>
	<td align="right">+31B</td>
	<td align="right">+19N</td>
	<td align="right">=9N</td>
	<td align="right">-8B</td>
	<td align='center'><b>4&frac12;</b></td>
	<td align='center'> 35 </td>
	<td align="right"><b> 1917</td>
	<td align="right">+97</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 18</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>TOURE Vasanth</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Noisiel Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>18</td>	<td>&nbsp;</td>	<td>TOURE&nbsp;Vasanth</td>	<td>2020R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>4.5</td>	<td>33.5</td>	<td>1943</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td class="gad-surligne"><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td ><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2020R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+31B</td>
	<td align="right">-5N</td>
	<td align="right">-23B</td>
	<td align="right">=15N</td>
	<td align="right">+28B</td>
	<td align="right">+30N</td>
	<td align="right">-13B</td>
	<td align="right">+21N</td>
	<td align="right">-9B</td>
	<td align='center'><b>4&frac12;</b></td>
	<td align='center'> 33&frac12; </td>
	<td align="right"> 1943</td>
	<td align="right">-77</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 19</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>PRUVOT Louis</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Club d'Echecs de Saint-Maur</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>19</td>	<td>&nbsp;</td>	<td>PRUVOT&nbsp;Louis</td>	<td>2120R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>4.5</td>	<td>33</td>	<td>1890</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td ><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td class="gad-surligne"><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td ><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td class="gad-surligne"><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td class="gad-surligne">Nulle</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td class="gad-surligne"><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 2120R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+28B</td>
	<td align="right">-7N</td>
	<td align="right">+24B</td>
	<td align="right">-23N</td>
	<td align="right">+6B</td>
	<td align="right">-8N</td>
	<td align="right">-17B</td>
	<td align="right">+31N</td>
	<td align="right">=20B</td>
	<td align='center'><b>4&frac12;</b></td>
	<td align='center'> 33 </td>
	<td align="right"> 1890</td>
	<td align="right">-230</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 20</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>MARTIN Matthieu</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>J.E.E.N.</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>20</td>	<td>&nbsp;</td>	<td>MARTIN&nbsp;Matthieu</td>	<td>1590R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>4.5</td>	<td>27.5</td>	<td>1756</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td class="gad-surligne"><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td class="gad-surligne"><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td class="gad-surligne">Nulle</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td class="gad-surligne"><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1590R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-22N</td>
	<td align="right">-23B</td>
	<td align="right">-28N</td>
	<td align="right">-32B</td>
	<td align="right">+36N</td>
	<td align="right">+33B</td>
	<td align="right">+29N</td>
	<td align="right">+25B</td>
	<td align="right">=19N</td>
	<td align='center'><b>4&frac12;</b></td>
	<td align='center'> 27&frac12; </td>
	<td align="right"><b> 1756</td>
	<td align="right">+166</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 21</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>BENHAIM Louis</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>RYBEJA</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>21</td>	<td>&nbsp;</td>	<td>BENHAIM&nbsp;Louis</td>	<td>1910R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>41</td>	<td>1953</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="U.S.Villejuif Echecs">3</a></td><td><a title="U.S.Villejuif Echecs">f</a></td><td><a title="U.S.Villejuif Echecs">MIRIMANIAN&nbsp;Hayk</a></td><td ><a title="U.S.Villejuif Echecs">2260R</a></td><td><a title="U.S.Villejuif Echecs">JunM</a></td><td><a title="U.S.Villejuif Echecs">FRA</a></td><td><a title="U.S.Villejuif Echecs">IDF</a></td><td><a title="U.S.Villejuif Echecs">7</a></td><td><a title="U.S.Villejuif Echecs">41&frac12;</a></td><td><a title="U.S.Villejuif Echecs">2362</a></td>	<td align="right">+102</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">f</a></td><td><a title="Lutèce Echecs">RODRIGUEZ&nbsp;Adrien</a></td><td ><a title="Lutèce Echecs">2200R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">7</a></td><td><a title="Lutèce Echecs">39</a></td><td><a title="Lutèce Echecs">2288</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td class="gad-surligne"><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1910R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+35B</td>
	<td align="right">+14N</td>
	<td align="right">+5B</td>
	<td align="right">-3B</td>
	<td align="right">-4N</td>
	<td align="right">-9N</td>
	<td align="right">-6B</td>
	<td align="right">-18B</td>
	<td align="right">+36N</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 41 </td>
	<td align="right"><b> 1953</td>
	<td align="right">+43</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 22</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>HADDOUCHE Lehyan</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Tremblay en France</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>22</td>	<td>&nbsp;</td>	<td>HADDOUCHE&nbsp;Lehyan</td>	<td>1940R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>36</td>	<td>1851</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td ><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td class="gad-surligne"><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td class="gad-surligne"><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1940R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+20B</td>
	<td align="right">-12N</td>
	<td align="right">+17B</td>
	<td align="right">-5N</td>
	<td align="right">+31B</td>
	<td align="right">-16N</td>
	<td align="right">+24B</td>
	<td align="right">-6N</td>
	<td align="right">-15N</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 36 </td>
	<td align="right"> 1851</td>
	<td align="right">-89</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 23</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>LISSIANSKY Garri</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Lutèce Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>23</td>	<td>&nbsp;</td>	<td>LISSIANSKY&nbsp;Garri</td>	<td>1830R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>33.5</td>	<td>1918</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td ><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td class="gad-surligne"><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td class="gad-surligne"><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td ><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1830R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-12B</td>
	<td align="right">+20N</td>
	<td align="right">+18N</td>
	<td align="right">+19B</td>
	<td align="right">-14B</td>
	<td align="right">-13N</td>
	<td align="right">-15B</td>
	<td align="right">-24N</td>
	<td align="right">+31B</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 33&frac12; </td>
	<td align="right"><b> 1918</td>
	<td align="right">+88</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 24</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>DENJOY Arnaud</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Paris Jeunes Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>24</td>	<td>&nbsp;</td>	<td>DENJOY&nbsp;Arnaud</td>	<td>1840R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>33.5</td>	<td>1908</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td ><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td ><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">10</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">PHILIPPE&nbsp;Guillaume</a></td><td ><a title="Clichy-Echecs-92">2360R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">42&frac12;</a></td><td><a title="Clichy-Echecs-92">2133</a></td>	<td align="right">-227</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">12</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">DUMAS&nbsp;Charles</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2230R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">JunM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">39</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2068</a></td>	<td align="right">-162</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1840R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-2N</td>
	<td align="right">+32B</td>
	<td align="right">-19N</td>
	<td align="right">+26B</td>
	<td align="right">-10N</td>
	<td align="right">+29B</td>
	<td align="right">-22N</td>
	<td align="right">+23B</td>
	<td align="right">-12N</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 33&frac12; </td>
	<td align="right"><b> 1908</td>
	<td align="right">+68</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 25</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>AFRAOUI Anaelle</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Clichy-Echecs-92</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>25</td>	<td>&nbsp;</td>	<td>AFRAOUI&nbsp;Anaelle</td>	<td>1860R</td>	<td>CadF</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>33</td>	<td>1760</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">1</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">RAKOTOMAHARO&nbsp;Fy&nbsp;Antenaina</a></td><td ><a title="Clichy-Echecs-92">2330R</a></td><td><a title="Clichy-Echecs-92">CadM</a></td><td><a title="Clichy-Echecs-92">MAD</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">8&frac12;</a></td><td><a title="Clichy-Echecs-92">42</a></td><td><a title="Clichy-Echecs-92">2676</a></td>	<td align="right">+346</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td class="gad-surligne"><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td class="gad-surligne"><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1860R</td>
	<td align='center'> CadF </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-1B</td>
	<td align="right">+34N</td>
	<td align="right">-14B</td>
	<td align="right">-31N</td>
	<td align="right">+32B</td>
	<td align="right">+28N</td>
	<td align="right">-11B</td>
	<td align="right">-20N</td>
	<td align="right">+35B</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 33 </td>
	<td align="right"> 1760</td>
	<td align="right">-100</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 26</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>BUREAU Etienne</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Paris Jeunes Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>26</td>	<td>&nbsp;</td>	<td>BUREAU&nbsp;Etienne</td>	<td>1550R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>32.5</td>	<td>1788</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td class="gad-surligne"><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td ><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td class="gad-surligne"><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td class="gad-surligne"><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1550R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-11B</td>
	<td align="right">+6N</td>
	<td align="right">-16B</td>
	<td align="right">-24N</td>
	<td align="right">-17B</td>
	<td align="right">+32N</td>
	<td align="right">+28B</td>
	<td align="right">+30N</td>
	<td align="right">-27B</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 32&frac12; </td>
	<td align="right"><b> 1788</td>
	<td align="right">+238</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 27</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>AZOUNI Anais</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>l'Echiquier de La Ville Montreuil</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>27</td>	<td>&nbsp;</td>	<td>AZOUNI&nbsp;Anais</td>	<td>1810R</td>	<td>CadF</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>30.5</td>	<td>1763</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">14</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">LUTARD&nbsp;Florian</a></td><td ><a title="Clichy-Echecs-92">2170R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">38&frac12;</a></td><td><a title="Clichy-Echecs-92">2054</a></td>	<td align="right">-116</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td class="gad-surligne"><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td ><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1810R</td>
	<td align='center'> CadF </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-14B</td>
	<td align="right">+35N</td>
	<td align="right">+30B</td>
	<td align="right">-9N</td>
	<td align="right">-15B</td>
	<td align="right">-11N</td>
	<td align="right">-31N</td>
	<td align="right">+36B</td>
	<td align="right">+26N</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 30&frac12; </td>
	<td align="right"> 1763</td>
	<td align="right">-47</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 28</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>BALDI Valentine</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>C.E. de  Bois-Colombes</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>28</td>	<td>&nbsp;</td>	<td>BALDI&nbsp;Valentine</td>	<td>1780R</td>	<td>CadF</td>	<td>FRA</td>	<td>IDF</td>	<td>4</td>	<td>30</td>	<td>1772</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td ><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td ><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td class="gad-surligne"><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td class="gad-surligne"><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1780R</td>
	<td align='center'> CadF </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-19N</td>
	<td align="right">-9N</td>
	<td align="right">+20B</td>
	<td align="right">+33B</td>
	<td align="right">-18N</td>
	<td align="right">-25B</td>
	<td align="right">-26N</td>
	<td align="right">+35N</td>
	<td align="right">+34B</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 30 </td>
	<td align="right"> 1772</td>
	<td align="right">-8</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 29</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>GUYON Sophie</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cercle d'échecs des Sables d'Olonne</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>29</td>	<td>&nbsp;</td>	<td>GUYON&nbsp;Sophie</td>	<td>1770R</td>	<td>CadF</td>	<td>FRA</td>	<td>PDL</td>	<td>4</td>	<td>30</td>	<td>1750</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td class="gad-surligne"><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td ><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Lutèce Echecs">11</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">ALBARIC&nbsp;Etienne</a></td><td ><a title="Lutèce Echecs">1930R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">5</a></td><td><a title="Lutèce Echecs">40</a></td><td><a title="Lutèce Echecs">2065</a></td>	<td align="right">+135</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td class="gad-surligne"><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1770R</td>
	<td align='center'> CadF </td>
	<td align='center'> FRA </td>
	<td align='center'> PDL </td>
	<td align="right">+9B</td>
	<td align="right">-16N</td>
	<td align="right">-11B</td>
	<td align="right">-30N</td>
	<td align="right">+35B</td>
	<td align="right">-24N</td>
	<td align="right">-20B</td>
	<td align="right">+34N</td>
	<td align="right">+32B</td>
	<td align='center'><b>4</b></td>
	<td align='center'> 30 </td>
	<td align="right"> 1750</td>
	<td align="right">-20</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 30</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>BOL Frederic</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Cavalier de la Tourelle Saint-Mande</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>30</td>	<td>&nbsp;</td>	<td>BOL&nbsp;Frederic</td>	<td>1950R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>3</td>	<td>31.5</td>	<td>1703</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Echiquier Orangeois">2</a></td><td><a title="Echiquier Orangeois">&nbsp;</a></td><td><a title="Echiquier Orangeois">MEUNIER&nbsp;Clement</a></td><td ><a title="Echiquier Orangeois">2280R</a></td><td><a title="Echiquier Orangeois">CadM</a></td><td><a title="Echiquier Orangeois">FRA</a></td><td><a title="Echiquier Orangeois">PRO</a></td><td><a title="Echiquier Orangeois">7</a></td><td><a title="Echiquier Orangeois">41&frac12;</a></td><td><a title="Echiquier Orangeois">2364</a></td>	<td align="right">+84</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td class="gad-surligne"><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="Evry Grand Roque">16</a></td><td><a title="Evry Grand Roque">&nbsp;</a></td><td><a title="Evry Grand Roque">DUQUESNE&nbsp;Adrien</a></td><td class="gad-surligne"><a title="Evry Grand Roque">1870R</a></td><td><a title="Evry Grand Roque">CadM</a></td><td><a title="Evry Grand Roque">FRA</a></td><td><a title="Evry Grand Roque">IDF</a></td><td><a title="Evry Grand Roque">5</a></td><td><a title="Evry Grand Roque">33</a></td><td><a title="Evry Grand Roque">2067</a></td>	<td align="right">+197</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td class="gad-surligne"><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td class="gad-surligne"><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1950R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">+32N</td>
	<td align="right">-2B</td>
	<td align="right">-27N</td>
	<td align="right">+29B</td>
	<td align="right">-16N</td>
	<td align="right">-18B</td>
	<td align="right">+34N</td>
	<td align="right">-26B</td>
	<td align="right">-33N</td>
	<td align='center'><b>3</b></td>
	<td align='center'> 31&frac12; </td>
	<td align="right"> 1703</td>
	<td align="right">-247</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 31</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>MIDAVAINE Pierre</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>J.E.E.N.</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>31</td>	<td>&nbsp;</td>	<td>MIDAVAINE&nbsp;Pierre</td>	<td>1650R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>3</td>	<td>29.5</td>	<td>1705</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Noisiel Echecs">18</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Vasanth</a></td><td ><a title="Noisiel Echecs">2020R</a></td><td><a title="Noisiel Echecs">JunM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">4&frac12;</a></td><td><a title="Noisiel Echecs">33&frac12;</a></td><td><a title="Noisiel Echecs">1943</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td ><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td class="gad-surligne"><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Tremblay en France">22</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">HADDOUCHE&nbsp;Lehyan</a></td><td ><a title="Tremblay en France">1940R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">4</a></td><td><a title="Tremblay en France">36</a></td><td><a title="Tremblay en France">1851</a></td>	<td align="right">-89</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td class="gad-surligne"><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Club d'Echecs de Saint-Maur">19</a></td><td><a title="Club d'Echecs de Saint-Maur">&nbsp;</a></td><td><a title="Club d'Echecs de Saint-Maur">PRUVOT&nbsp;Louis</a></td><td ><a title="Club d'Echecs de Saint-Maur">2120R</a></td><td><a title="Club d'Echecs de Saint-Maur">JunM</a></td><td><a title="Club d'Echecs de Saint-Maur">FRA</a></td><td><a title="Club d'Echecs de Saint-Maur">IDF</a></td><td><a title="Club d'Echecs de Saint-Maur">4&frac12;</a></td><td><a title="Club d'Echecs de Saint-Maur">33</a></td><td><a title="Club d'Echecs de Saint-Maur">1890</a></td>	<td align="right">-230</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Lutèce Echecs">23</a></td><td><a title="Lutèce Echecs">&nbsp;</a></td><td><a title="Lutèce Echecs">LISSIANSKY&nbsp;Garri</a></td><td ><a title="Lutèce Echecs">1830R</a></td><td><a title="Lutèce Echecs">CadM</a></td><td><a title="Lutèce Echecs">FRA</a></td><td><a title="Lutèce Echecs">IDF</a></td><td><a title="Lutèce Echecs">4</a></td><td><a title="Lutèce Echecs">33&frac12;</a></td><td><a title="Lutèce Echecs">1918</a></td>	<td align="right">+88</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1650R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-18N</td>
	<td align="right">-33B</td>
	<td align="right">+36N</td>
	<td align="right">+25B</td>
	<td align="right">-22N</td>
	<td align="right">-17N</td>
	<td align="right">+27B</td>
	<td align="right">-19B</td>
	<td align="right">-23N</td>
	<td align='center'><b>3</b></td>
	<td align='center'> 29&frac12; </td>
	<td align="right"><b> 1705</td>
	<td align="right">+55</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 32</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>BEAUDRON Raphael</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>J.E.E.N.</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>32</td>	<td>&nbsp;</td>	<td>BEAUDRON&nbsp;Raphael</td>	<td>1600R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>3</td>	<td>29.5</td>	<td>1596</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Paris Jeunes Echecs">24</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">DENJOY&nbsp;Arnaud</a></td><td ><a title="Paris Jeunes Echecs">1840R</a></td><td><a title="Paris Jeunes Echecs">JunM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">33&frac12;</a></td><td><a title="Paris Jeunes Echecs">1908</a></td>	<td align="right">+68</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td ><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td ><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Paris Jeunes Echecs">26</a></td><td><a title="Paris Jeunes Echecs">&nbsp;</a></td><td><a title="Paris Jeunes Echecs">BUREAU&nbsp;Etienne</a></td><td class="gad-surligne"><a title="Paris Jeunes Echecs">1550R</a></td><td><a title="Paris Jeunes Echecs">CadM</a></td><td><a title="Paris Jeunes Echecs">FRA</a></td><td><a title="Paris Jeunes Echecs">IDF</a></td><td><a title="Paris Jeunes Echecs">4</a></td><td><a title="Paris Jeunes Echecs">32&frac12;</a></td><td><a title="Paris Jeunes Echecs">1788</a></td>	<td align="right">+238</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td class="gad-surligne"><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1600R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-30B</td>
	<td align="right">-24N</td>
	<td align="right">-6B</td>
	<td align="right">+20N</td>
	<td align="right">-25N</td>
	<td align="right">-26B</td>
	<td align="right">+36N</td>
	<td align="right">+33B</td>
	<td align="right">-29N</td>
	<td align='center'><b>3</b></td>
	<td align='center'> 29&frac12; </td>
	<td align="right"> 1596</td>
	<td align="right">-4</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 33</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>NOBLECOURT Nicolas</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>L'Echiquier Chellois</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>33</td>	<td>&nbsp;</td>	<td>NOBLECOURT&nbsp;Nicolas</td>	<td>1840R</td>	<td>JunM</td>	<td>FRA</td>	<td>IDF</td>	<td>3</td>	<td>29</td>	<td>1673</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">5</a></td><td><a title="Clichy-Echecs-92">f</a></td><td><a title="Clichy-Echecs-92">KAMBRATH&nbsp;Yannick</a></td><td ><a title="Clichy-Echecs-92">2270R</a></td><td><a title="Clichy-Echecs-92">JunM</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">6</a></td><td><a title="Clichy-Echecs-92">39</a></td><td><a title="Clichy-Echecs-92">2226</a></td>	<td align="right">-44</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Gagn&eacute;</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Noisiel Echecs">9</a></td><td><a title="Noisiel Echecs">&nbsp;</a></td><td><a title="Noisiel Echecs">TOURE&nbsp;Ananth</a></td><td ><a title="Noisiel Echecs">2110R</a></td><td><a title="Noisiel Echecs">CadM</a></td><td><a title="Noisiel Echecs">FRA</a></td><td><a title="Noisiel Echecs">IDF</a></td><td><a title="Noisiel Echecs">5&frac12;</a></td><td><a title="Noisiel Echecs">33</a></td><td><a title="Noisiel Echecs">2033</a></td>	<td align="right">-77</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td class="gad-surligne"><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td class="gad-surligne"><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td class="gad-surligne"><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td ><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td class="gad-surligne"><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td class="gad-surligne"><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1840R</td>
	<td align='center'> JunM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-5B</td>
	<td align="right">+31N</td>
	<td align="right">-9B</td>
	<td align="right">-28N</td>
	<td align="right">-34B</td>
	<td align="right">-20N</td>
	<td align="right">+35B</td>
	<td align="right">-32N</td>
	<td align="right">+30B</td>
	<td align='center'><b>3</b></td>
	<td align='center'> 29 </td>
	<td align="right"> 1673</td>
	<td align="right">-167</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 34</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>GAULT Paolo</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Issy-Les-Moulineaux</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>34</td>	<td>&nbsp;</td>	<td>GAULT&nbsp;Paolo</td>	<td>1660R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>2</td>	<td>29</td>	<td>1555</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">13</a></td><td><a title="Cercle d'Echecs de Villepinte">&nbsp;</a></td><td><a title="Cercle d'Echecs de Villepinte">EK&nbsp;Alexandre</a></td><td ><a title="Cercle d'Echecs de Villepinte">2090R</a></td><td><a title="Cercle d'Echecs de Villepinte">CadM</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">39</a></td><td><a title="Cercle d'Echecs de Villepinte">2012</a></td>	<td align="right">-78</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FC; </td><td class="gad-surligne">Perdu</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td class="gad-surligne"><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FB; </td><td >Gagn&eacute;</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td ><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td class="gad-surligne"><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td ><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cavalier de la Tourelle Saint-Mande">30</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">BOL&nbsp;Frederic</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">1950R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">3</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">31&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">1703</a></td>	<td align="right">-247</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1660R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-13N</td>
	<td align="right">-25B</td>
	<td align="right">-35N</td>
	<td align="right">+36B</td>
	<td align="right">+33N</td>
	<td align="right">-6N</td>
	<td align="right">-30B</td>
	<td align="right">-29B</td>
	<td align="right">-28N</td>
	<td align='center'><b>2</b></td>
	<td align='center'> 29 </td>
	<td align="right"> 1555</td>
	<td align="right">-105</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 35</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>HARCAUT Aurelien</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>GIF-CC2-Echecs</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>35</td>	<td>&nbsp;</td>	<td>HARCAUT&nbsp;Aurelien</td>	<td>1550R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>1</td>	<td>29</td>	<td>1398</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td class="gad-surligne"><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">&nbsp;</a></td><td><a title="Cavalier Bleu Drancy">OHANOV&nbsp;David</a></td><td ><a title="Cavalier Bleu Drancy">1840R</a></td><td><a title="Cavalier Bleu Drancy">JunM</a></td><td><a title="Cavalier Bleu Drancy">ARM</a></td><td><a title="Cavalier Bleu Drancy">IDF</a></td><td><a title="Cavalier Bleu Drancy">6</a></td><td><a title="Cavalier Bleu Drancy">31&frac12;</a></td><td><a title="Cavalier Bleu Drancy">1973</a></td>	<td align="right">+133</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Cercle d'échecs des Sables d'Olonne">29</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">&nbsp;</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">GUYON&nbsp;Sophie</a></td><td ><a title="Cercle d'échecs des Sables d'Olonne">1770R</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">CadF</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">FRA</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">PDL</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">4</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">30</a></td><td><a title="Cercle d'échecs des Sables d'Olonne">1750</a></td>	<td align="right">-20</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FB; </td><td class="gad-surligne">Perdu</td><td><a title="C.E. de Rueil Malmaison">36</a></td><td><a title="C.E. de Rueil Malmaison">&nbsp;</a></td><td><a title="C.E. de Rueil Malmaison">SANET&nbsp;Paul</a></td><td class="gad-surligne"><a title="C.E. de Rueil Malmaison">1020R</a></td><td><a title="C.E. de Rueil Malmaison">CadM</a></td><td><a title="C.E. de Rueil Malmaison">FRA</a></td><td><a title="C.E. de Rueil Malmaison">IDF</a></td><td><a title="C.E. de Rueil Malmaison">1</a></td><td><a title="C.E. de Rueil Malmaison">28</a></td><td><a title="C.E. de Rueil Malmaison">1082</a></td>	<td align="right">+62</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="L'Echiquier Chellois">33</a></td><td><a title="L'Echiquier Chellois">&nbsp;</a></td><td><a title="L'Echiquier Chellois">NOBLECOURT&nbsp;Nicolas</a></td><td ><a title="L'Echiquier Chellois">1840R</a></td><td><a title="L'Echiquier Chellois">JunM</a></td><td><a title="L'Echiquier Chellois">FRA</a></td><td><a title="L'Echiquier Chellois">IDF</a></td><td><a title="L'Echiquier Chellois">3</a></td><td><a title="L'Echiquier Chellois">29</a></td><td><a title="L'Echiquier Chellois">1673</a></td>	<td align="right">-167</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">28</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">BALDI&nbsp;Valentine</a></td><td ><a title="C.E. de  Bois-Colombes">1780R</a></td><td><a title="C.E. de  Bois-Colombes">CadF</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4</a></td><td><a title="C.E. de  Bois-Colombes">30</a></td><td><a title="C.E. de  Bois-Colombes">1772</a></td>	<td align="right">-8</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Clichy-Echecs-92">25</a></td><td><a title="Clichy-Echecs-92">&nbsp;</a></td><td><a title="Clichy-Echecs-92">AFRAOUI&nbsp;Anaelle</a></td><td ><a title="Clichy-Echecs-92">1860R</a></td><td><a title="Clichy-Echecs-92">CadF</a></td><td><a title="Clichy-Echecs-92">FRA</a></td><td><a title="Clichy-Echecs-92">IDF</a></td><td><a title="Clichy-Echecs-92">4</a></td><td><a title="Clichy-Echecs-92">33</a></td><td><a title="Clichy-Echecs-92">1760</a></td>	<td align="right">-100</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1550R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-21N</td>
	<td align="right">-27B</td>
	<td align="right">+34B</td>
	<td align="right">-6N</td>
	<td align="right">-29N</td>
	<td align="right">-36B</td>
	<td align="right">-33N</td>
	<td align="right">-28B</td>
	<td align="right">-25N</td>
	<td align='center'><b>1</b></td>
	<td align='center'> 29 </td>
	<td align="right"> 1398</td>
	<td align="right">-152</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 36</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>SANET Paul</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>C.E. de Rueil Malmaison</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>36</td>	<td>&nbsp;</td>	<td>SANET&nbsp;Paul</td>	<td>1020R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>1</td>	<td>28</td>	<td>1082</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="Cercle d'Echecs de Villepinte">15</a></td><td><a title="Cercle d'Echecs de Villepinte">ff</a></td><td><a title="Cercle d'Echecs de Villepinte">BELLAICHE&nbsp;Elise</a></td><td ><a title="Cercle d'Echecs de Villepinte">1900R</a></td><td><a title="Cercle d'Echecs de Villepinte">JunF</a></td><td><a title="Cercle d'Echecs de Villepinte">FRA</a></td><td><a title="Cercle d'Echecs de Villepinte">IDF</a></td><td><a title="Cercle d'Echecs de Villepinte">5</a></td><td><a title="Cercle d'Echecs de Villepinte">34&frac12;</a></td><td><a title="Cercle d'Echecs de Villepinte">2024</a></td>	<td align="right">+124</td>
</tr>
		<tr class="gad-cl"><td > 2 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="C.E. de  Bois-Colombes">17</a></td><td><a title="C.E. de  Bois-Colombes">&nbsp;</a></td><td><a title="C.E. de  Bois-Colombes">GUERLACH&nbsp;Keigo</a></td><td ><a title="C.E. de  Bois-Colombes">1820R</a></td><td><a title="C.E. de  Bois-Colombes">CadM</a></td><td><a title="C.E. de  Bois-Colombes">FRA</a></td><td><a title="C.E. de  Bois-Colombes">IDF</a></td><td><a title="C.E. de  Bois-Colombes">4&frac12;</a></td><td><a title="C.E. de  Bois-Colombes">35</a></td><td><a title="C.E. de  Bois-Colombes">1917</a></td>	<td align="right">+97</td>
</tr>
		<tr class="gad-fon"><td > 3 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="J.E.E.N.">31</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MIDAVAINE&nbsp;Pierre</a></td><td ><a title="J.E.E.N.">1650R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1705</a></td>	<td align="right">+55</td>
</tr>
		<tr class="gad-cl"><td > 4 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="Issy-Les-Moulineaux">34</a></td><td><a title="Issy-Les-Moulineaux">&nbsp;</a></td><td><a title="Issy-Les-Moulineaux">GAULT&nbsp;Paolo</a></td><td ><a title="Issy-Les-Moulineaux">1660R</a></td><td><a title="Issy-Les-Moulineaux">CadM</a></td><td><a title="Issy-Les-Moulineaux">FRA</a></td><td><a title="Issy-Les-Moulineaux">IDF</a></td><td><a title="Issy-Les-Moulineaux">2</a></td><td><a title="Issy-Les-Moulineaux">29</a></td><td><a title="Issy-Les-Moulineaux">1555</a></td>	<td align="right">-105</td>
</tr>
		<tr class="gad-fon"><td > 5 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="J.E.E.N.">20</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">MARTIN&nbsp;Matthieu</a></td><td ><a title="J.E.E.N.">1590R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">4&frac12;</a></td><td><a title="J.E.E.N.">27&frac12;</a></td><td><a title="J.E.E.N.">1756</a></td>	<td align="right">+166</td>
</tr>
		<tr class="gad-cl"><td > 6 </td><td> &#x25FC; </td><td class="gad-surligne">Gagn&eacute;</td><td><a title="GIF-CC2-Echecs">35</a></td><td><a title="GIF-CC2-Echecs">&nbsp;</a></td><td><a title="GIF-CC2-Echecs">HARCAUT&nbsp;Aurelien</a></td><td class="gad-surligne"><a title="GIF-CC2-Echecs">1550R</a></td><td><a title="GIF-CC2-Echecs">CadM</a></td><td><a title="GIF-CC2-Echecs">FRA</a></td><td><a title="GIF-CC2-Echecs">IDF</a></td><td><a title="GIF-CC2-Echecs">1</a></td><td><a title="GIF-CC2-Echecs">29</a></td><td><a title="GIF-CC2-Echecs">1398</a></td>	<td align="right">-152</td>
</tr>
		<tr class="gad-fon"><td > 7 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="J.E.E.N.">32</a></td><td><a title="J.E.E.N.">&nbsp;</a></td><td><a title="J.E.E.N.">BEAUDRON&nbsp;Raphael</a></td><td ><a title="J.E.E.N.">1600R</a></td><td><a title="J.E.E.N.">CadM</a></td><td><a title="J.E.E.N.">FRA</a></td><td><a title="J.E.E.N.">IDF</a></td><td><a title="J.E.E.N.">3</a></td><td><a title="J.E.E.N.">29&frac12;</a></td><td><a title="J.E.E.N.">1596</a></td>	<td align="right">-4</td>
</tr>
		<tr class="gad-cl"><td > 8 </td><td> &#x25FC; </td><td >Perdu</td><td><a title="l'Echiquier de La Ville Montreuil">27</a></td><td><a title="l'Echiquier de La Ville Montreuil">&nbsp;</a></td><td><a title="l'Echiquier de La Ville Montreuil">AZOUNI&nbsp;Anais</a></td><td ><a title="l'Echiquier de La Ville Montreuil">1810R</a></td><td><a title="l'Echiquier de La Ville Montreuil">CadF</a></td><td><a title="l'Echiquier de La Ville Montreuil">FRA</a></td><td><a title="l'Echiquier de La Ville Montreuil">IDF</a></td><td><a title="l'Echiquier de La Ville Montreuil">4</a></td><td><a title="l'Echiquier de La Ville Montreuil">30&frac12;</a></td><td><a title="l'Echiquier de La Ville Montreuil">1763</a></td>	<td align="right">-47</td>
</tr>
		<tr class="gad-fon"><td > 9 </td><td> &#x25FB; </td><td >Perdu</td><td><a title="RYBEJA">21</a></td><td><a title="RYBEJA">&nbsp;</a></td><td><a title="RYBEJA">BENHAIM&nbsp;Louis</a></td><td ><a title="RYBEJA">1910R</a></td><td><a title="RYBEJA">JunM</a></td><td><a title="RYBEJA">FRA</a></td><td><a title="RYBEJA">IDF</a></td><td><a title="RYBEJA">4</a></td><td><a title="RYBEJA">41</a></td><td><a title="RYBEJA">1953</a></td>	<td align="right">+43</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"><b> 1020R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right">-15B</td>
	<td align="right">-17N</td>
	<td align="right">-31B</td>
	<td align="right">-34N</td>
	<td align="right">-20B</td>
	<td align="right">+35N</td>
	<td align="right">-32B</td>
	<td align="right">-27N</td>
	<td align="right">-21B</td>
	<td align='center'><b>1</b></td>
	<td align='center'> 28 </td>
	<td align="right"><b> 1082</td>
	<td align="right">+62</td>
</tr>
<tr class="gad-fon">
	<td align="right"> 37</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>GENIX Oscar</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Club d'Echecs du Vesinet</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>37</td>	<td>&nbsp;</td>	<td>GENIX&nbsp;Oscar</td>	<td>1660R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>0</td>	<td>24.5</td>	<td>0</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Absent</td><td><a title="Cavalier de la Tourelle Saint-Mande">8</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">&nbsp;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">ROQUE&nbsp;Gaetan</a></td><td ><a title="Cavalier de la Tourelle Saint-Mande">2040R</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">CadM</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">FRA</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">IDF</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">5&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">40&frac12;</a></td><td><a title="Cavalier de la Tourelle Saint-Mande">2238</a></td>	<td align="right">+198</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1660R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right"><8B</td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align='center'><b>0</b></td>
	<td align='center'> 24&frac12; </td>
	<td align="right"> 0</td>
	<td align="right">-1660</td>
</tr>
<tr class="gad-cl">
	<td align="right"> 38</td>
	<td align="right"> &nbsp;</td>
	<td >
	<div class="gad-box">
	<b>LI Victor</b>
	<div class="gad-more">
	<center>
	<table border='0' cellpadding='2' cellspacing='0' bordercolor='#000000'>
		<tr class="gad-ss-titre">	<td colspan=50 align=center>Yerres-Roi</td></tr>		<tr class="gad-ss-titre">	<td> </td>	<td> </td>	<td> </td>	<td>38</td>	<td>&nbsp;</td>	<td>LI&nbsp;Victor</td>	<td>1890R</td>	<td>CadM</td>	<td>FRA</td>	<td>IDF</td>	<td>0</td>	<td>24.5</td>	<td>0</td><td></td></tr>
		<tr class="gad-entete"><td>Rd</td><td> </td><td> </td><td>Pl</td><td>t</td><td>Nom</td><td>Rapide</td><td>Cat</td><td>Fede</td><td>Ligue</td><td>Pts</td><td>Tr</td><td>Perf</td>	<td>&nbsp;Diff&nbsp;</td>
</tr>
		<tr class="gad-fon"><td > 1 </td><td> &#x25FB; </td><td >Absent</td><td><a title="Tremblay en France">7</a></td><td><a title="Tremblay en France">&nbsp;</a></td><td><a title="Tremblay en France">MSELLEK&nbsp;Ilyass</a></td><td ><a title="Tremblay en France">2420R</a></td><td><a title="Tremblay en France">CadM</a></td><td><a title="Tremblay en France">FRA</a></td><td><a title="Tremblay en France">IDF</a></td><td><a title="Tremblay en France">5&frac12;</a></td><td><a title="Tremblay en France">44</a></td><td><a title="Tremblay en France">2224</a></td>	<td align="right">-196</td>
</tr>
	</table>
	</div>
	</div>
	</center>
</td>
	<td align="right"> 1890R</td>
	<td align='center'> CadM </td>
	<td align='center'> FRA </td>
	<td align='center'> IDF </td>
	<td align="right"><7B</td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align="right"></td>
	<td align='center'><b>0</b></td>
	<td align='center'> 24&frac12; </td>
	<td align="right"> 0</td>
	<td align="right">-1890</td>
</tr>
</table>
</div>
</br>
<form action="rvb.php" method="get">
<SELECT NAME="rvbs">
<OPTION VALUE="autre" > Autre : 
<?php
include("_connect.php");
$requete_fiche=mysqli_query ($link,"SELECT * FROM couleur ORDER BY ORD DESC");
while ($row=mysqli_fetch_array($requete_fiche) ) 
{
?>

<OPTION VALUE="<?php echo $row[1]?>" STYLE="background-color:#<?php echo $row[1]?>;" <?php if ($rvb==$row[1]) {echo 'SELECTED';} ?>>  <?php echo $row[2]?>

<?php
}
?>
</SELECT>
<input class="color {pickerMode:'HVS'}" type="text" name="rvbl" value="<?php echo $rvb?>" />
<input type="submit" value="Coloriser" />
</form>
</div>
<hr>
<div class=gad-titre>
ATTENTION UNIQUEMENT POUR LES VERSIONS >3.1<br>
<br>
Le style a int&eacute;grer dans votre code HTML ou dans un fichier externe :  <br>
&lt;style type=text/css&gt;<br>
<TEXTAREA name="css" rows=15 COLS=130>
.gad-cl {font-family:Arial; font-size:8pt; color: #000000; background-color: #FFFFFF;}
.gad-cl:hover{background-color: #<?PHP echo $rvb1?>;cursor:default;}
.gad-fon {font-family:Arial; font-size:8pt; color: #000000; background-color: #<?PHP echo $rvb2?>;}
.gad-fon:hover{background-color: #<?PHP echo $rvb1?>;cursor:default;}
.gad-entete {font-family:Arial; font-size:8pt; color: #FFFFFF; background-color: #<?PHP echo $rvb?>; font-weight: bold;}
.gad-titre {font-family:Arial; font-size:12pt; color: #<?PHP echo $rvb?>; font-weight:bold; height:50px}
.gad-ss-titre {font-family:Arial; font-size:10pt; color: #000000; background-color: #<?PHP echo $rvb1?>; font-weight: bold;}
.gad-surligne {font-family:Arial; font-size:8pt; font-weight: bold; color: #000000; background-color: #<?PHP echo $rvb1?>;}
td {	white-space:nowrap;	}
#gad-cont .gad-box {position: relative; z-index: 0;}
#gad-cont .gad-box:hover {position: relative; z-index: 50;}
#gad-cont .gad-box .gad-more {display: none; border: black solid 1px;}
#gad-cont .gad-box:hover .gad-more {display: block; position: absolute; left: 100px; top: 12px; padding: 10px 10px 10px 10px;
  border: 1px solid grey; background-color: white; }
</TEXTAREA><br>
&lt;/style&gt;<br>
<br>
vous pouvez &eacute;galement utiliser :<br>
&lt;link rel="stylesheet" type="text/css" href="http://www.echecs95.com/gad/gad-css.php?rvb=<?PHP echo $rvb?>"/&gt;
<br><br><br><br><br><br><br><br>.
</div>
</div>

<script type="text/javascript" src="jscolor/jscolor.js"></script>
</body></html>
