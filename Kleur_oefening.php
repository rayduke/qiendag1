<script>
    function kleurkiezen(kleur){

        switch(kleur){

        case "rood": 
                document.getElementById("welkomnaam").style.backgroundColor = "red";
                break;

        case "blauw":
                document.getElementById("welkomnaam").style.backgroundColor = "blue";
                break;

        case "geel": 
                document.getElementById("welkomnaam").style.backgroundColor = "yellow";
                break; 

        }    
    }    
   
    function kleurMsg(kleur){
        alert("U heeft op "+kleur+" geklikt");
    } 

</script>


<?php



echo "<center>";
echo "<input type=button method=GET id=rood value=rood onclick=kleurkiezen('rood');kleurMsg('rood')>";
echo "<input type=button method=GET id=blauw value=blauw onclick=kleurkiezen('blauw');kleurMsg('blauw')>";
echo "<input type=button method=GET id=geel value=geel onclick=kleurkiezen('geel');kleurMsg('geel')>";
echo "<input type=text id=welkomnaam>";
echo "</center>";

?>