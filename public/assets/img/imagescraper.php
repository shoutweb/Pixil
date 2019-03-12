<?php

$img = '/var/www/html/slice/my_app/public/assets/img/';
$externalURL = 'http://flatfull.com/themes/bepop/assets/img/';


$i=0;
while ($i<36) {
    $fileName = "c".$i.".jpg";
    file_put_contents(
        $img.$fileName,
        file_get_contents($externalURL.$fileName)
    );
    $i++;
    echo "$fileName downloaded";
}
