<?php
    $path = 'C:/wamp/www/demo/base6/text.txt';
    echo "path:".basename($path);
    echo "<br>";
    echo "dirname:".dirname($path);
    echo "<br>";
    print_r(pathinfo($path));
    $realPath = realPath('./text.txt');
    echo $realPath;
    echo "<br>";
    echo filesize($realPath);
 ?>
