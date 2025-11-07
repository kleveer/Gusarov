<?php
    $a =$_GET['one'];
    $b =$_GET['two'];
    if($a + $b <180){
        echo "Треугольник существует";
    }if($a == 90 or $b == 90 or 180 - $a - $b == 90){
       $str = "Треугольник прямоугольный";
    }else{
        $str = "Треугольника не прямоугольный";
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
    <h1>Решения задач на условие</h1>
    <h2>Задание 2</h2>
    <form action="">
        <P>Введите первый угол:<input type="text" name="one"></p> 
        <P>Введите Второй угол:<input type="text" name="two"></p> 
        <P><input type="submit" value="Отправить"></p> 
    </form>
    <p><?php echo "Результат : $str";?></p>

</body>
</html>