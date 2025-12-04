<?php
$json = file_get_contents('customer.json');
$data = json_decode($json, true);

if (isset($_GET['login'])) {
    $login = $_GET['login'];
    $password = $_GET['password'];
    foreach($users as $user){
        if($user['login'] == $login and $user['password'] == $password) {
            $success = true;
            $userData = $user;
            break;
        }
    }
}
?>
<form action="">
    Логин: <input type="text" name="login"><br>
    Пороль: <input type="text" name="password"><br>
    <button type="submit">Войти</button>
</form>
