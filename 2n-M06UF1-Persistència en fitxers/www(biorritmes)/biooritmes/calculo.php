<?php

$nom = ($_POST['nom']);
$date1 = ($_POST['data_naixament']);
$date2 = date('Y-m-d');

function dateDiff($date1, $date2)
{
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
}

$dateDiff = dateDiff($date1, $date2);

$fisic = sin(2*pi()*$dateDiff/23);
$emocional = sin(2*pi()*$dateDiff/28);
$intelectual = sin(2*pi()*$dateDiff/33);

$perc_fisic = round($fisic * 100);
$perc_emoci = round($emocional * 100);
$perc_intel = round($intelectual * 100);

?>