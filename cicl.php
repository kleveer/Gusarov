<?php
    $Startnumber = 1;
    $multiplier = 3;
    $quantity = 7;
    for ($i = 0; $i <= $quantity; $i++){
        echo $Startnumber,'<br>';
        $Startnumber = $Startnumber*$multiplier;
    }
?>