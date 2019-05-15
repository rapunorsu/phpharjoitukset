<?php
echo "Nelli\n";

$nimi = "Jussi\n";
echo $nimi;

$tervehdys = "hei mitä kuuluu $nimi \n";
echo "missä olet " . $nimi . "?\n";
$nimet = [" Tiina", " Jussi", " Keijo"];
echo $nimet[1];
$age = 5;

if ($age >= 18) {
    echo "olet aikuinen \n";
} else {
    echo "olet vielä lapsi \n";
}

function tervehdi($nimi){
    return "Heippa $nimi \n";
}

echo tervehdi("tiina");
echo tervehdi("janne");

echo 5 ** 2;