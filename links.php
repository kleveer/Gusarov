<?php
$a = 5;
function setParam(&$param){
    $param = 10;
}
setParam($a);
?>
<p><?=$a?></p>


<h2>Задание №1 <br>
array pop()
array_push()
array_shift()
array_splice() <br>
array_unshift()
array_walk()
array_walk_recursive()
arsort()
asort() <br>
krsort()
ksort()
natcasesort()
natsort()
rsort () <br>
shuffle()
sort ()
uasort()
uksort()
usort()
</h2>
<h2>Задание №2</h2>
<?php
$a = 5;
function Cube(&$cub) {
    $cub = $cub**3;
}
Cube($a);
echo $a;
?>
<h2>Задание №3</h2>
<?php
$str = "Hello, world, you, are, ok";
function zap(&$str) {
    $str = str_replace(",","", $str);
}
zap($str);
?>
<?= $str; ?>
<h2>Задание №4</h2>
<?php
$str = "Hello World";
function reverse(&$str) {
    $str = strrev($str);
}
reverse($str);
?>
<?= $str; ?>
<h2>Задание №5</h2>
<?php
$numbers = [-10, 3, 6, -6, 0];
function absolute(&$array) {
    foreach ($array as &$value) {
        $value = abs($value);
    }
}
absolute($numbers);
echo "Массив равен" . implode(",", $numbers) ."";
?>
<h2>Задание №6</h2>
<?php
$numbers = [21, 3, 0, 5, -32];
function giveKey(&$numbers) {
    $newarray = [];
    foreach ($numbers as &$value) {
        $a = "$value";
        $newarray[$a] = $value;
    }
    $numbers = $newarray;
}
giveKey($numbers);
echo "Массив после: ". implode(",", $numbers) ."", '<br>';
var_dump(array_keys($numbers));