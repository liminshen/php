<?php
    //1.打开文件 如果没有自动尝试创建
    //fopen返回来的是资源类型resource
    // $fp = fopen('./file.txt','a+');
    // //2.写入
    // fwrite($fp,"哈哈哈\r");
    // //3.关闭文件
    // fclose($fp);

    //file_put_contents; 就只有一句话的时候，不需要做很灵活的事情的时候做 php5.0以上的版本使用
    file_put_contents('./file.txt','this is shuaige')
 ?>
