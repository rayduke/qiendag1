<?php
session_start();
$_SESSION['ab']=9;

$getal1 = $_GET['getal1'];

$getal2 = $_GET['getal2'];   

$operator = $_GET['operator'];


switch($operator) {
    
    case "optellen": 

            echo optellen($getal1, $getal2);
            break;
        
    case "aftrekken":

            echo aftrekken($getal1, $getal2);
            break;
            
    case "delen":
            
            echo delen($getal1, $getal2);
            break;
           
    case "vermenigv":
            
            echo vermenigv($getal1, $getal2);
            break;

} 


function optellen($getal1, $getal2){
    $resultaat = $getal1 + $getal2;
    return $getal1 . "+" . $getal2 . "= " . $resultaat . "<br><br>";
}

function aftrekken($getal1, $getal2){
    $resultaat = $getal1 - $getal2;
    return $getal1 . "-" . $getal2 . "= " . $resultaat . "<br><br>";
}
            
function delen($getal1, $getal2){
    if($getal1 == 0 || $getal2 == 0){
        echo "Error: Cannot divide by zero";
    }else {
    $resultaat = $getal1 / $getal2;
    return $getal1 . "/" . $getal2 . "= " . $resultaat . "<br><br>";
    }
}      

function vermenigv($getal1, $getal2){
    $resultaat = $getal1 * $getal2;
    return $getal1 . "*" . $getal2 . "= " . $resultaat . "<br><br>";
}      