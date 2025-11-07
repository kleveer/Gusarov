<?php

$students = [
    ['name' => 'Иванов', 'group' => 'ив1к-24', 'cource' => 1],
    ['name' => 'Сидоров', 'group' => 'ив1к-23', 'cource' => 3],
    ['name' => 'Матросов', 'group' => 'ив1к-22', 'cource' => 2],
];
foreach($students as $student){
    echo " Имя: {$student['name']}, группа: {$student['group']}, курс: {$student['cource']}";
    echo '<br>';
}
// echo $array[3][1];

$array = [  
    [1, 2, 3, 4],  
    [5, 6, 7, 8],  
    [9, 10, 11, 12] 
];  
   
echo "<table border='1'>";  
foreach ($array as $row) {  
    echo "<tr>";  
    foreach ($row as $value) {  
        echo "<td>$value</td>";  
    }  
    echo "</tr>";  
}  
echo "</table>"; 
