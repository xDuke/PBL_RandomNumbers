<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $get = $_GET["eingabefeld"];
    $seitenzahl = intval($get);

    switch(inhaltPruefen($seitenzahl)){
        case 1:
            echo "Deine Eingabe war leider keine Zahl.";
            breaK;
        case 2:
            echo "Gib bitte eine Seitenzahl über 2 an.";
            break;
        case 0:
            echo "Du hast eine " . rand(1,$seitenzahl) . " gewürfelt.";
            break;
        default:
            echo "-3";
    }
}
function inhaltPruefen($pInhalt)
{
    if(gettype($pInhalt) !== "integer"){
        return 1;
    }
    else{
        if($pInhalt <= 2){
return 2;
}
}
return 0;
}

?>

<a href = "index.html" ><button>Nochmal würfeln</button></a>

</body>
</html>