<?php
    $rectSquare = 0;
    $cubeVol1= 0;
    if (isset($_GET['rect'])){
        $rectSquare = $_GET['len'] * $_GET
        ['width'];
    }
    if (isset($_GET['cube'])){
        $cubeVol1 = $_GET['length']**3;
    }
?>
<h1>Решение Задач</h1>
<h2>Задача 1 площадь прямоугольника</h2>
<form action="">
    <p>Введите длину: <input type="text" name="len"></p>
    <p>Введите ширину: <input type="text" name="width"></p>
    <input type="submit" value="Ок" name="rect">
</form>
<p>
    <?= "Площадь прямоугольника = $rectSquare"?>
</p>
<h2>Задача 2 объем куба</h2>
<form action="">
    <p>Введите сторону: <input type="text" name="length"></p>
    <input type="submit" value="Ок" name="cube">
</form>
<p>
    <?= "Объем куба = $cubeVol1"?>
</p>