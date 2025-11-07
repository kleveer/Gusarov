<?php
//В строке имеется одна точка с запятой (;).
//Подсчитать количество символов от (;), не включая его, до конца строки.
//Реализуйте функцию countLettersAfter($str, $sim), принимающую параметрами
//строку и символ и возвращающую число символов после первого вхождения заданного символа.
//Задайте строку и выведите результат на экран.
function countLettersAfter($str, $sim) {
    $pos = strpos($str, $sim);
    if ($pos == false) {
        return -1;
    }
    return strlen($str) - $pos - 1;
}
if ($_GET['str']) {
    $str = $_GET['str'];
    $result = countLettersAfter($str, ";");
    if ($result >= 0) {
        echo "Символов  после ;: ", $result;
    } else {
        echo "Точка с запятой отсутствуют";
    }
}
//  4 вариант