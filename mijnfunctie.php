
<?php 
           
function mijnFunctie($age, $voornaam){  //parameter
    echo "<br/>In de functie met " . $voornaam;
    $leeftijd = 18;
    if($leeftijd > 17){
        echo "Je mag auto rijden<br/>";
        echo "Want je bent $age";
    }
    
}

$deLeeftijd = 14;
$deNaam = Hans;

mijnFunctie(19, $deNaam);
mijnFunctie(21, "Kees");//argument
mijnFunctie(22, "Sjaak");

?>




<?php echo "Hello World<br/>"; ?>

<?php 



$leeftijd = "16";

        if ($leeftijd <= 16) {
            echo "0,2 promille";
            if($leeftijd > 16 && $leeftijd <=18){
                echo "0,4 promille";
            }
        }else {
            echo "0.8 promille";
        }

        
        
        
        $getal = 34;
        
        switch($getal){
            case 34:
                echo "het getal is 34";
                break;
            
            case 14: 
                echo "het getal is 14";
            
            default:
                echo "het is 40";
            }
            
            
        for($i = 0; $i <= 14; $i++){
            echo "kleiner dan 14 <br/>";
        }    
?>


