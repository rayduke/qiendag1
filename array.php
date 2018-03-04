<?php
session_start();

//$dearray = [1, 2, 3, 4];

$dearray2 = ["een", "twee", "drie", "vier"];

$dearray3 = array("een", "twee", "drie", "vier");

$hetassocarray = ['naam' => "de waarde", 'tweedenaam' => "nog een waarde"];

echo $hetassocarray['naam'] . "<br>";
echo $hetassocarray['tweedenaam'] . "<br>";

print_r($hetassocarray) ;





$zin = "Het is vandaag vrijdag";

$return_woord = substr($zin, 7, 15);

echo $return_woord . "<br>";


echo str_word_count($zin, 0, 1);


//stripcslashes()
//strlen()
//join()
//str_replace()
//trim()






