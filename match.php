<?php
if(isset($_GET['task1'])){
$dig = (int) $_GET['digit'];
$digit = match($dig){
    1 => "one <br>",
    2 => "two <br>",
    3 => "three <br>",
    4 => "four <br>",
    5 => "five <br>",
    6 => "six <br>",
    7 => "seven <br>",
    8 => "eight <br>",
    9 => "nine <br>",
    10 => "ten <br>",
    default => "Ничего не подходит"
};
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
    <h1>Задачи match</h1>
    <h2>Задача 1</h2>
    <form action="">
        <p>Введите цифру<input type="text" name="digit"></p>
    <p><input type="submit" name="task1"></p>
    <p><?="Цифра называется: $digit"?></p>
    </form>
</body>
</html>
<?php
$a = 11 ;
echo "<h2>Задание №2</h2>";
$digit = match($a){
    1 =>  '1 Января - Новый год <br>',
    2 =>  '14 Февраля - День святого Валентина <br>',
    3 => '24 Марта - День штурманской службы ВВС России <br>',
    4 => '1 Аперль - День смеха <br>',
    5 => '1 Май - Праздник Весны и Труда. <br>',
    6 => '12 Июня -  День России, Всемирный день борьбы с детским трудом, День пивовара в России. <br>',
    7 => '1 Июль - День ветеранов боевых действий. <br>',
    8 => '3 Август -  День железнодорожника. <br>',
    9 => '1 Сентябрь - День Знаний <br>',
    10 => '7 Октября - День учителя <br>',
    11 => '4 Ноябрь - День народного единства <br>',
    12 => '3 Декабрь - День юриста <br>',
    default => 'ничего не попало('
};
echo $digit;
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
    $k=23;
    $last = $k % 10;
    $word = match($a){
        $last == 1 and $k != 11 => "год",
        $last >= 2 and $last <= 4 and ($k < 10 or $k > 20) => 'года',
        default => 'лет'
    };

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