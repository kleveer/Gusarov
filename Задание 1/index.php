<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p> Введите строку <input type='text' name="str"></p>
        <p><input type='submit' value="Отправить" name="task1"></p>
    </form>
</body>
</html>

<?php
function palidrom($str) {
$processed_str = mb_strtolower($str);
$reversed_str = strrev($processed_str);
 if ($processed_str === $reversed_str) {
    echo "Исходная строка: $str - является палиндромом: true<br>";
    return true;
  } else {
    echo "Исходная строка: $str - не является палиндромом: false<br>";
    return false;
  }
}
if(isset($_GET['task1'])){
echo palidrom ($_GET['str']);
}; 
//Дана строка. Проверить является ли она палиндромом (читается одинако слева и справа).
//Результат вместе с исходной строкой вывести на экран.
//Реализуйте функцию palindrom($str), принимающую строку и выводящую true,
//если строка палиндром и false, если нет.
?>