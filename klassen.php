<?php


class Student{

    public $voornaam;
    public $achernaam;
    public $leeftijd;
    
    function voorstellen(){
    echo "Hallo mijn naam is ".$this->voornaam." ".$this->achternaam."en ik ben " . $this->leeftijd ;  ; 
    
    }
}




class Muziekstuk {
    public $artiestnaam;
    public $titelnaam;
    public $bpm;
    public $lengte;
    
    
    public function __construct($artiestnaam, $titelnaam, $bpm, $lengte){

        $this->artiestnaam = $artiestnaam;
        $this->titelnaam = $titelnaam;
        $this->bpm = $bpm;
        $this->lengte = $lengte;
        
        echo "Je bent nu het nummer " .$this->titelnaam." van " .$this->artiestnaam. 
                " aan het afspelen. Het nummer is ".$this->lengte ." lang en heeft ".$this->bpm. " bpm<br><br>";
    }
    
    
    
    function afspelen(){
        echo "Je bent nu het nummer " .$this->titelnaam." van " .$this->artiestnaam. 
                " aan het afspelen. Het nummer is ".$this->lengte ." lang en heeft ".$this->bpm. " bpm";
    }
    
    function kopen(){
        echo "Je hebt het nummer " .$this->titelnaam." van " .$this->artiestnaam. " gekocht";
    }
    
}


  

