<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Задание на формы</H1>
    <form method="GET">
    <p>Введите своё Имя: <input type="text" name="firstname"></p>
    <p>Введите своё Фамилию: <input type="text" name="lastname"></p>
    <p>Введите своё Отчество: <input type="text" name="surname"></p>
    <p><input type="submit" value="Отправить" name="fio"></p>
    </form>
</body>
</html>
<?php
if(isset($_GET['fio'])) {
    $first= $_GET['firstname'];
    $last = $_GET['lastname'];
    $sur = $_GET['surname'];
    echo "<b>Ваше ФИО: </b>$first $last $sur <br>" ;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Делители числа</title>
</head>
<body>

<h2>Найти делители числа</h2>

<form method="get">
    Введите число: 
    <input type="number" name="num">
    <button type="submit">Показать делители</button>
</form>

<?php
if (isset($_GET['num'])) {
    $n = $_GET['num']; 
    
    if ($n <= 0) {
        echo "<p>Введите положительное число!</p>";
    } else {
        echo "<h3>Делители числа $n:</h3>";
        echo "<strong>";
        
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                echo $i, ' ';
            }
        }
        
        echo "</strong>";
    }
}
?>
<h3>Задание 3</h3>
<form action="">
    Сторона 1 <input type="number" name="a"><br>
    Сторона 2 <input type="number" name="b"><br>
    Сторона 3 <input type="number" name="c"><br>
    <input type="submit" name="cube" value="Найти">
</form>
<?php
if(isset($_GET['cube'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

if($a + $b > $c and $a + $c > $b and $b + $c > $a) {
    $p = ($a + $b + $c)/2;
    $s = 0.5*($p*($p - $a)*($p - $b)*($p - $c));
    echo "Площадь треугольника равна:", $s, '<br>';
}} else {
    echo "Треугольника  не существует";
}

?>
</body>
</html>