<?php

$url = 'http://example.com/image.php';
$img = '/my/folder/flower.gif';
file_put_contents($img, file_get_contents($url));

$i=0;
while ($i<35) {
file_get_contents('http://flatfull.com/themes/bepop/assets/img/a'.$i.'.jpg')
}