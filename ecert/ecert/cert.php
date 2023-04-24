<?php

    header('content-type:image/jpeg');
    $font=realpath('tnr_reg.ttf');

    $image=imagecreatefromjpeg('sample.jpg');
    $color=imagecolorallocate($image, 0, 0, 0);
    $name = "John Carl S. Enero";
    
    imagettftext($image, 80, 0, 710, 780, $color, $font, $name);
    imagejpeg($image);
    imagedestroy($image);


?>