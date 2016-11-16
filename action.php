<?php

//1.引入配置文件，函数库
	require('dbconfig.php');
	require('functions.php');
//2.链接mysql，获取对应的数据库
	$link = mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
	mysql_select_db(DBNAME,$link);
//3.获取action参数的值，并且对应的操作
	switch ($_GET['action']) {
		case 'add'://添加
			$name = $_POST['name'];
			$typeid = $_POST['typeid'];
			$price = $_POST['price'];
			$total = $_POST['total'];
			$note = $_POST['note'];
			$addtime = time();
			break;
		case 'del'://删除
			break;
		case 'update'://修改
			break;
		case 'add':
			break;
		
		default:
			break;
	}
//4.关闭数据库
	mysql_close();
?>