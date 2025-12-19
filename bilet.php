<?php
$numbFormat = '';
if(isset($_GET['number']))
    $numbFormat = format($_GET['number']);
function format($number){
    $n = (string) $number;
    return $n;
}
?>
<php if($numbFormat): ?>
    <form action="">
        <input type="text" name="number">
        <input type="submit" value="Отправить">
    </form>
<php else: ?>
    <p><?= $numbFormat ?></p>