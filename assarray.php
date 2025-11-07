<?php
    echo '<h1>Ассоциативыне массивы</h1>';
    echo '<h2>Задание №1</h2>';
$array = ['monday'=>'Понедельник',
    'tuesday' => 'Вторник',
    'Wednesday' => 'Среда',
    'Thursday' => 'Четверг',
    'friday' => 'Пятница',
    'Saturday' => 'Cуббота',
    'Sunday' => 'Восскресенье',
    'eight' => 'Восемь',
    'Nine' => 'Девять',
    'Ten' => 'Десять' ];
foreach($array as $key => $item){
    echo "<p>$key - $item</p>";
}

echo '<h2>Задание №2</h2>';

$w = 'три';
$f = false;
$array = ['one' => 'один',
    'two' => 'два',
    'three' => 'три'];
foreach($array as $key => $value){
    if ($value == $w){
        echo "$value - $key <br>";
        $f = true;
        break;
    }
    
}
if($f == false){
        echo "В словаре нет такого слова";
    }

echo '<h2>Задание №3</h2>';
$w = 'два';
$f = false;
$array = ['one' => 'один',
    'two' => 'два',
    'three' => 'три'];
foreach($array as $key => $value){
    if($key == $w){
        echo "$key - $value";
        $f = true;
        break;
    }elseif($value == $w){
        echo "$value - $key";
        $f = true;
        break;
    }
}
if($f == false){
    echo "В словаре нет такого слова";
}
echo "<h2>Задание №4</h2>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <p>Введите цифру:<input type="text" name="w"></p>
        <p><input type="submit" value="Перевести"></p>
    </form>
</body>
</html>
<?php
$w = 'два';
$f = false;
$array = ['one' => 'один',
    'two' => 'два',
    'three' => 'три'];
foreach($array as $key => $value){
    if($key == $w){
        echo "$key - $value";
        $f = true;
        break;
    }elseif($value == $w){
        echo "$value - $key";
        $f = true;
        break;
    }
}
if($f == false){
    echo "В словаре нет такого слова";
}
?>

