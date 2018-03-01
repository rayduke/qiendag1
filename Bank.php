<?php
// Onze bankrekening app

$amount = 1000;

$product = 400;
$storting = 500;

//$jojo = afschrijving(300, 15);
//           285
//echo $jojo;

//$pizza = afschrijving($amount, 300);
//echo $pizza;
$amount = afschrijving($amount, 200);
$amount = afschrijving($amount, 200);
$amount = afschrijving($amount, 800);
$amount = bijschrijving($amount, 400);

echo "<br><br>TOTAAL".$amount;

function afschrijving($amount, $productprice){

    if($productprice > $amount ){
        
        echo "geen saldo";
        return $amount;
           
        } else {
            $newamount = $amount - $productprice; 
            return $newamount;
        }
    }


function bijschrijving($amount, $storting){
    $newamount = $amount + $storting;
 //   echo "New amount : ". $newamount;
    return $newamount;
}
function geefTerug(){
    return "Jan";
}

?>
