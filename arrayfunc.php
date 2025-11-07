<?php
echo "Задание №1", '<br>';
$numbers = [3,1,456,123,0,7,5];
$nach = array_search(0, $numbers);
$result = array_slice($numbers,0, $nach);
echo "Числа  до нуля включительно: " . implode(",", $result), '<br>';
?>

<?php
echo "Задание №2","<br>";
$numbers = [3,4,8,1,3,9];
$min = min($numbers);
$max = max($numbers);
$numb = array_replace($numbers,[
   array_search($min, $numbers) => $max,
   array_search($max, $numbers) => $min,
]);
echo "Массив после замены:", implode(", ", $numb),"<br>";
?>

<?php
echo "Задание №3", '<br>';
$array = [0,5,8,0,3,0,1,0];
$zero = array_keys($array, 0);
echo "Номера нулей:" . implode(", ", $zero),"<br>";
?>
<?php
echo "Задание №4","<br>";
$array = [0,5,8,0,3,0,1,0];
$filter = array_filter($array, function($val){
    return $val != 0;
});
echo "Массив без нолей:", implode(", ", $filter),"<br>";
?>