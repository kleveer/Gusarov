<?php
$str = "hello world from Russia";
$words = explode(" ", $str);
foreach ($words as $word) {
}
?>
<?php foreach ($words as $word):?>
    <p><?= $word ?></p>
<?php endforeach;
$string = implode("", $words);
echo "<p>$string</p>";
?>
<?php
$str = "hello world from Russia";
$newStr = str_replace("hello","Hi", $str);
echo $newStr;
?>
<?php
echo '<h2>Задание №1</h2>';
$str = "Hello (marattt) !";
$open = strpos($str,"(");
$close = strpos($str,")");
$result1 = substr($str, $open +1, $close - $open -1);
echo $result1;
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
?>
<?php
echo '<br>';
echo '<h2>Задание №4</h2>';
$array = str_split($str);
$text = [];
foreach ($array as $word) {
    $text[$word] = true;
}
echo 'кол-во символов:',count($text),"<br>";
echo "Уникальные символы:", implode(",
", array_keys($text)), "<br>";
?>
<?php
echo '<br>','<h2>Задание №5</h2>';
$str = 'kkrottt';
$str_pos = mb_strpos($str,'');
$str_k = substr_count($str,'k');
$str_r = substr_count($str,'r');
$str_t = substr_count($str,'t');
echo "число букв k:", $str_k,"<br>";
echo "число букв r:", $str_r,"<br>";
echo "число букв t:", $str_t,"<br>";
?>
<?php
echo "<h2>Задание №6</h2>";
