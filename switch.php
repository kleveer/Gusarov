<?php
$a =1;
echo "<h2>Задание №1</h2>";
switch($a){
        case 1:
            $b = "one <br>";
            echo $b;
            break;
        case 2:
            echo "two <br>";
            break;
        case 3:
            echo "three <br>";
            break;
        case 4:
            echo "four <br>";
            break;
        case 5:
            echo "five <br>";
            break;
        case 6:
            echo "six <br>";
            break;
        case 7:
            echo "seven <br>";
            break;
        case 8:
            echo "eigth <br>";
            break;
        case 9:
            echo "nine <br>";
            break;
        case 10:
            echo "ten <br>";
            break;
        default:
            echo 'Ничего не попало';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Оператор Switch</h1>
    <h2>Задача 1</h2>
    <form action="">
        <p>Введите цифру:<input type="text" name="digit"></p>
        <p><input type="submit" name="task1"></p>
    </form>
</body>
</html>
<?php
$a = 12;
echo "<h2>Задание №2</h2>";
switch($a){
        case 1:
            $b = " <br>";
            echo '1 Января - Новый год <br>';
            break;
        case 2:
            echo " 14 Февраля - День святого Валентина <br>";
            break;
        case 3:
            echo "24 Марта - День штурманской службы ВВС России <br>";
            break;
        case 4:
            echo "1 Аперль - День смеха <br>";
            break;
        case 5:
            echo "1 Май - Праздник Весны и Труда. <br>";
            break;
        case 6:
            echo "12 Июня -  День России, Всемирный день борьбы с детским трудом, День пивовара в России. <br>";
            break;
        case 7:
            echo "1 Июль - День ветеранов боевых действий. <br>";
            break;
        case 8:
            echo "3 Август -  День железнодорожника. <br>";
            break;
        case 9:
            echo "1 Сентябрь - День Знаний <br>";
            break;
        case 10:
            echo "7 Октября - День учителя <br>";
            break;
        case 11:
            echo "4 Ноябрь - День народного единства <br>";
            break;
        case 12:
            echo "3 Декабрь - День юриста <br>";
            break;
        default:
            echo 'Ничего не попало';
    }
?>
<?php
    echo '<h2>Задание №3</h2>';
    $number = 135;
    $last = $number % 10;
    $three = ($last ** 2);
    $four = $three % 10;
    echo $three,'<br>', $four;
?>
<?php
    echo '<h2>Задание №4</h2>';
    $k=21;
    $last = $k % 10;
    $word = 'лет';
    switch($a){
        case $last == 1 and $k != 11:
            $word = 'год';
            break;
        case $last >= 2 and $last <= 4 and ($k < 10 or $k > 20);
        $word = 'года';
        break;
    }
echo "Мне $k $word";

?>
<?php
    $a = 1;
    $digit = match($a){
        1 => 'Один',
        2 => 'два',
        3 => 'три',
        default => 'Нет такой цифры'
    };

?>
