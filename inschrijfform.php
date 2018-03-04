<?php



function inschrijving(){


    echo "Voornaam: " . '<input type="text" name="vnaam">';
    echo "Achternaam: " . '<input type="text" name="anaam">';

    echo "Ben je al lid? " . '<input type="checkbox" name="ja">'  . "ja ";
    echo '<input type="checkbox" name="nee">'  . "nee &nbsp; ";
    echo '<input type="checkbox" name="nbrief">'  . "Nieuwsbrief &nbsp; ";

    echo '<input type="submit" method="POST">'  . "<br>";

}

$aantal = $_GET['aantal'];


for($i = 1; $i <= $aantal ; $i++ ){
    $inschrijving = inschrijving();
    echo $inschrijving;
}




