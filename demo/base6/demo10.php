<?php
//1.打开文件 如果没有自动尝试创建
//fopen返回来的是资源类型resource
$fp = fopen('./file.txt','r');
//2.写入
while (!feof($fp)) {
    echo fgetc($fp);
}
//3.关闭文件
fclose($fp);

 ?>
