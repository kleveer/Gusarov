<?php
$text = file_get_contents('texts/test.txt');
if(!is_dir('texts1')){
    mkdir('texts1');
}
file_put_contents('test.txt', $text . 'Marat');

echo file_get_contents('test.txt');

?>