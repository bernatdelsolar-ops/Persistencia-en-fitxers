<?php


$nom = ($_POST['nom']);
$data_naix = ($_POST['data_naixament']);

$avui = getdate();

function calcul_dies($data_inicial,$data_final) {

$dies = (strtotime($data_inicial)-strtotime($data_final))/86400;
$dies = abs($dies); $dies = floor($dies);
return $dies;

}


$dies_pasats = calcul_dies($data_naix,$avui);


$fisic = sin(2*pi()*dies_pasats/23);
$emocional = sin(2*pi()*dies_pasats/28);
$intelectual = sin(2*pi()*dies_pasats/33);

$perc_fisic = $fisic * 100;
$perc_emoci = $fisic * 100;
$perc_intel = $fisic * 100;



?>