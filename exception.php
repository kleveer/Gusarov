<?php

try{
    $a = 'b';
    $b = 'r';
if(!$b){
    throw new DIvisionByZeroError('Делить на ноль нельзя!');

}
if(!is_numeric($a) or !is_numeric($b)){
    throw new TypeError('а и б не являются числами');
}
$result = $a / $b;
echo $result;
}catch(DivisionByZeroError $ex){
    echo "Произошло исключение: {$ex->getMessage()}";
}catch(TypeError  $ex){
    echo "Ошибка типа: {$ex->getMessage()}";
}catch(Throwable $ex){
    echo "Ошибка типа: {$ex->getMessage()}";
}
echo ' Программа продолжается';