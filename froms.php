<?php
    $a = 1; 
    $b = 1;
    if(isset($_GET)){
        $a = $_GET['a'];
        $b = $_GET['b'];
    }if($a<$b){
        $c = $a+$b;
    }else{
        $c = $a*$b ;
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
    <h2>Задание 1</h2>
    <form action="">
        <P>Введите a:<input type="text" name="a"></p> 
        <P>Введите b:<input type="text" name="b"></p> 
        <P><input type="submit" value="Отправить"></p> 
    </form>
    <p><?php echo "Результат : $c";?></p>

</body>
</html>