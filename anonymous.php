<?php
// $funkecho = function($string) {
//     echo $string;
// };
// $funkEcho("Hello");
echo '<h1>Анонимные функции</h1>';
function useCallback($number, $callBack) {
    return $callBack($number);
}
function square($num) {
    return $num**2;
}
$cube = function($num) {
    return $num**3;
};

echo useCallback(5, $cube), '<br>';
?>
<?php
echo "<h3>Задание №1</h3>",'<br>';

function getEvenNumbers($array){
    return array_filter($array, function($value) {
        return $value %2== 0;
    });
};
$numbers = [1,2,3,5,4,6];
$evenNumbers = getEvenNumbers($numbers);
echo "Массив равен:" . implode(" ", $evenNumbers) ."<br>";
?>
<?php
echo "<h3>Задание №2</h3>","<br>";
$nums = [2,1,4,5,8,16];
$cude = function($num) {
    return $num **3;
};
echo implode(',', array_map($cude, $numbers)) .'<br>';
?>
<?php
echo '<h3>Задание №3</h3>','<br>';
$num = [1,4,6,2,7];
$product = array_reduce($num, function($carry, $item) {
    return $carry + $item;
});
$geometr = pow($product, 1 / count($num));
echo "Исходный массив:" . implode(" ", $num) ."<br>";
echo "Среднее арифметическое равно: ", array_sum($num)/count($num), '<br>';
echo "Среднее геометрическое равно:", $geometr,"<br>";
?>
<?php
echo "<h3>Задание №4</h3>","<br>";
$students = [
    ['name' => 'Вася','birth'=> 2006, 'height' => 175],
    ['name' => 'Аристарх','birth'=> 2008, 'height' => 190],
    ['name' => 'Серега','birth'=> 2007, 'height' => 150],
    ['name' => 'Марат','birth'=> 2008, 'height' => 189],
];
$tallStudents = array_filter($students, function($student) {
    return $student['height'] > 170;
});
echo "Количество студентов выше 170: ", count($tallStudents),"<br>";

$names = array_map(function($student) {
    return $student["name"];
}, $tallStudents);
echo "Имена студентов выше 170см: " . implode(", ", $names) ."<br>";
?>
<?php
echo "<h3>Задание №5</h3>","<br>";
$num = [-10,-6,8,0,6,4];
$neg = count(array_filter($num, function($n)  {
    return $n < 0;
}));
$positive = count(array_filter($num, function($n)  {
    return $n > 0;
}));
$zero = count(array_filter($num, function($n)  {
    return $n == 0;
}));
echo "Данный массив: " . implode(", ", $num) ."<br>";
echo "Отрицательные числа: ", $neg,"<br>";
echo "Положительные числа: ", $positive,"<br>";
echo "Равных нулю: ", $zero,"<br>";
?>
<?php
echo "<h3>Задание №6</h3>","<br>";
$num = [1,3,-12,7,-9,0,-3];
$k = 0;
$negative = count(array_filter($num, function($n) use ($k) {
    return $n < $k;
}));
$positive = count(array_filter($num, function($n) use ($k) {
    return $n > $k;
}));
$zero = count(array_filter($num, function($n) use ($k) {
    return $n == $k;
}));
echo "Числа меньше числа к: ", $negative, '<br>';
echo "Равные числу к: ", $zero, '<br>';
echo "Числа больше числа к: ", $positive, '<br>';
?>