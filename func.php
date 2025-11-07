<?php
// echo '<h1>Функция</h1>';

// function multarray($numbers)
// {
//     $result = 1;
//     foreach ($numbers as $number) {
//         $result *= $number;
//     }
//     return $result;
// }

// $nums = [1,24,6];
// echo multarray($nums), '<br>';
?>
<?php
echo '<h2>Задание №1</h2>';
function cirleLength($d){
    return $d*2*3.14;
}
echo  cirleLength(10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h2>Задание №2</h2>
    <form action="">
        <p>Введите первую сторону треугольник:<input type="text" name="a"></p>
        <p>Введите вторую сторону треугольник:<input type="text" name="b"></p>
        <p>Введите третью сторону треугольник:<input type="text" name="c"></p>
        <p><input type="submit" value="Отправить"></p>
    </form>
</body>
</html>
<?php
function squareTr($a, $b, $c) {
    if ($a <= 0 or $b <= 0 or $c <= 0){
        return 0;
    }else{
        $p =($a+$b+$c)/2;
        $s = ($p*($p-$a)*($p-$b)*($p-$c))**0.5;
        return $s;
    }
    
}
echo squareTr($_GET['a'], $_GET['b'], $_GET['c']);
?>
<?php
echo '<h2> Задание №3</h2>';
function maxDivisor($n) {
    if ($n <= 1) return 0;
    for ($i = $n - 1; $i < $n; $i--) {
        if ($n % $i == 0) 
            return $i;
    }     
}

echo maxDivisor(18); 
?>
<?php
echo '<h2>Задание №4</h2>';
function allDivisor($n){
    $divisor = [];
    if ($n <= 1) return 0;
    for ($i = $n-1; $i >= 2; $i--){
        if ($n % $i == 0){
            $divisor[] = $i;
        }
        }
    return $divisor;
}
$divisor = allDivisor(18);
foreach ($divisor as $n) {
    echo $n, '<br>';
}