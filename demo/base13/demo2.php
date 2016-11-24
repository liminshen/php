<?php 
	// echo $_FILES['userfile'];
	print_r($_FILES);
	if($_FILES['userfile']['error']>0){
		switch ($_FILES['userfile']['error']) {
			case '1':
				echo "<script>alert('超出大小限制');history.back();</script>";
				break;
			case '2':
				echo "<script>alert('超出MAX_FILE_SIZE');history.back();</script>";
				break;
			case '3':
				echo "<script>alert('表示没有上载任何文件');history.back();</script>";
				break;
		}
		exit;
	}
	//检验文件格式
	if(!$_FILES['userfile']['type']==='image/jpeg'){
		echo "<script>alert('本站只允许jpeg的图片上传');history.back();</script>";
		exit;
	}
	//判断是否缓存成功
	if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
		//转移图片
		if(!move_uploaded_file($_FILES["userfile"]["tmp_name"],"./upload/".$_FILES["userfile"]["name"])){
			echo "<script>alert('上传失败');history.back();</script>";
		}else{
			echo "<script>alert('上传成功');</script>";
		}
	}
	//move_uploaded_file
 ?>