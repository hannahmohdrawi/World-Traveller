<?php
  
$riel = 2103942;

$kyat = 19092;

$krones = 109;

$lek = 9094;

echo $riel;
echo "\n";
echo $kyat;
echo "\n";
echo $krones;
echo "\n";
echo $lek;

//Exchange Rates to USD: 

$riel_to_usd = 0.00026;
$kyat_to_usd = 0.00066;
$krones_to_usd = 0.11;
$lek_to_usd = 0.0090;

//Calculating amount in USD

$usd_to_riel = $riel_to_usd * $riel;
$usd_to_kyat = $kyat_to_usd * $kyat;
$usd_to_krones = $krones_to_usd * $krones;
$usd_to_lek = $lek_to_usd * $lek;

echo "\n";
echo "Converted to USD:";
echo $usd_to_riel;
echo "\n";
echo $usd_to_kyat;
echo "\n";
echo $usd_to_krones;
echo "\n";
echo $usd_to_lek;


//Final USD amount
$final_riel = $usd_to_riel - 1;
$final_kyat = $usd_to_kyat - 1;
$final_krones = $usd_to_krones - 1;
$final_lek = $usd_to_lek - 1;


echo "\n";
echo "Final USD amount:";
echo $final_riel;
echo "\n";
echo $final_kyat;
echo "\n";
echo $final_krones;
echo "\n";
echo $final_lek;

