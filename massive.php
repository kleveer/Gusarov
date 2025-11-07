<?php
echo "Задание №1", '<br>';
    $nums = [1,2,5,15,8];
    $max=$nums[0];
    $min=$nums[0];
    foreach($nums as $num){
        if ($num<$max){
            $max=$num;
        }if ($num>$min){
            $min=$num;
        }
        
    }
echo "Максимальное значение в массиве max равно $min", '<br>';
echo "Минимальное значение в массиве min равно: $max", '<br>';

echo "Задание №2", '<br>';
$nums = [1,2,5,15,9];
$sum = 0;
$pro = 1;
foreach($nums as $n){
    $sum += $n;
    $pro *= $n;
}
echo "Сумма равна: $sum", '<br>';
echo "произведение равно: $pro", '<br>';

echo "Задание №3", '<br>';
$nums = [1,2,3,5,8];
$sum = 0;
foreach($nums as $n){
    $sum += $n;
}
$average = $sum/count($nums);
echo "Среднее значение равно: $average", '<br>';

echo "задание №4", '<br>';
$nums = [1,3,-5,7,-9]; 
$p = [];
foreach($nums as $n){
    if ($nums>0){
        $p[] =$n*$n;
    }else{
        $p[] = abs($n);
    }
}
echo "Исходный массив:", '<br>';
foreach($nums as $number){
    echo "$number",'<br>';
}
echo "Получившиеся массив:", '<br>';
foreach($p as $number2){
    echo "$number2",'<br>';
}

echo "Задание №5", '<br>';

?>