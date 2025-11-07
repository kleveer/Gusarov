<?php
// $str = 'hello';
// for ($i =0; $i < mb_strlen($str); $i++) {
//     echo $str[$i], '<br>';
// }
// echo strlen($str,);
?>
<?php
echo '<h2>Задание №1</h2>';
$str = "Hello (pisunator) !";
$start = 0;
$end = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == '(') $start = $i;
    if ($str[$i] == ')') {
        $end = $i;
        break;
    }
}

if ($start > 0 and $end > 0 and $start < $end) {
    for ($i = $start + 1; $i < $end; $i++) {
        echo $str[$i];
    }
} else {
    echo '';
}
?>
<?php
"<br>";
echo '<h2>Задание №2</h2>';
$Words = [
'words' => 0,
'str' => "This is a test message."
];
for ($i = 0; $i < mb_strlen($Words['str']); $i++)
    {
        if ($Words['str'][$i] == " ")
            {
                $Words['words']++;
            }
    }
echo $Words['words'] + 1;
?>
<?php
echo '<h2>Задание №3</h2>';
$text = "php opo asd";
$words = explode(' ', $text);
foreach ($words as $word) {
    $len = strlen($word);
    if ($len > 0 and $word[0] == $word[$len-1]) {
        $result[] = $word;
}
}
echo "Слова, которые начинаются и заканчивается на одну и ту же букву:";
foreach ($result as $word) {
    echo "- $word";
}