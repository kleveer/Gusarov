<?php
// задание №3
    echo '<h2>Задание 3</h2>';
        echo '<table border = "1">';
        echo "<br>";
        for($i = 1; $i <= 10; $i++){
            echo '<tr>';
        for ($j= 1; $j <= 10; $j++){
            $n = $i * $j;
            echo "<td style ='width: 20px; heigth: px;'>", $n, "</td>";

    }
        echo '<tr>';
    }
echo '</table>';
?>
<?php
echo '<table border ="1px"';
    echo '<h2>Задание 4</h2>';
        echo "<tr>";
        for($i = 10; $i <= 99; $i++){
            echo "<td>". ($i**2) ."</td>";
            if ($i %10 == 9) echo "</tr><tr>";
    }
        echo '</tr>';
        echo '</table>';
?>
<?php
    echo "<h2>Задание №5</h2>";
    $width = 7;
    $heigth = 5;
    for ($i = 1; $i <= $heigth; $i++){
        for($j = 1; $j <=$width; $j++){
            if($i == 1 or $i == $heigth or $j == 1 or $j == $width){
                echo "9";
            } else {
                echo "3";
            }
        }
        echo '<br>';
    }
?>
<?php
    echo '<h2>Задание №6</h2>';
    $n = 12;
    for($i = 1; $i <= $n;$i++){
        if ($n % $i == 0){
            echo $i;
        }
    }
?>
<?php
    echo '<h2>Задание №7</h2>';
    $n = 66;
    $b = 1;
    while ($n > 0){
        $b *= $n % 10;
        $n = (int)($n / 10);
    }
    echo $b;
?>