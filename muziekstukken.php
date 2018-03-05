<?php
include "klassen.php";


$muziekstuk1 = new Muziekstuk();
$muziekstuk1->artiestnaam = "Yør kultura";
$muziekstuk1->titelnaam = "Willow";
$muziekstuk1->bpm = 105;
$muziekstuk1->lengte = "5:03 min";

$muziekstuk2 = new Muziekstuk();
$muziekstuk2->artiestnaam = "Yør Kultura";
$muziekstuk2->titelnaam = " Oak";
$muziekstuk2->bpm = 110;
$muziekstuk2->lengte = "7:10 min";


$muziekstuk3 = new Muziekstuk();
$muziekstuk3->artiestnaam = "Stavroz";
$muziekstuk3->titelnaam = "Merci";
$muziekstuk3->bpm = 100;
$muziekstuk3->lengte = "8:20 min";


$muziekstukken = [$muziekstuk1, $muziekstuk2, $muziekstuk3];

foreach( $muziekstukken as $muziekstuk){
   echo "<br>" . $muziekstuk->afspelen();
}

echo $muziekstukken[2]->kopen();

