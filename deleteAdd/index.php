<?php
spl_autoload_register();
$json1 = file_get_contents('users1.json');
$data = json_decode($json1, true);

$objUsers = []; 

foreach ($data['users'] as $item) {
    $type = $item['type'];
    $name = $item['Name'];

    if ($type == 'student') {
        $group = $item['Group'];
        $objUsers[] = new Student($name, $group);
    }
    elseif ($type == 'teacher') {
        if (isset($item['Subjects']) and is_array($item['Subjects'])) {
            $subjects = $item['Subjects'];
        } else {
            $subjects = $item['Subject'];
        }
        $objUsers[] = new Teacher($name, $subjects);
    }
    elseif ($type == 'manager') {
        $position = $item['Position'];
        $objUsers[] = new Manager($name, $position);
    }
}


echo "<h2>Список пользователей:</h2>";
foreach ($objUsers as $user) {
    $user->sayAboutMe();
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>