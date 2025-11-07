<?php
    $lastnumber = 10;
    $multiplicationResult = 1;
    for ($i = 2; $i <= $lastnumber; $i++){
        if ($i % 2 == 0){
            $multiplicationResult *= $i;
        }
    }
echo "Произведение четных чисел от 1 до $lastnumber равно $multiplicationResult"; 
?>