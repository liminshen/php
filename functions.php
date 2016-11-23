<?php
	//公共函数库
	function uploadFile($filename,$path,$typelist=null){
		//1.获取上传文件名字
		$upfile = $_FILES[$filename];
		if(empty($upfile)){
			$typelist = array("image/gif","image/jpg","image/jpeg","image/png");//允许的文件类型
		}
		$res = array("error"=>false);//存放返回结果
		//2.过滤上传文件的错误号
		if($upfile["error"]>0){
			switch ($upfile["error"]) {
				case 1:
					$res["info"] = "超过限制upload_max_filesize 大小";
					break;
				case 2:
					$res["info"] = "超过限制MAX_UPLOAD_FILESIZE 大小";
					break;
				case 3:
					$res["info"] = "文件只有部分被上传";
					break;
				case 4:
					$res["info"] = "没有文件被上传";
					break;
				case 6:
					$res["info"] = "找不到临时文件夹";
					break;
				default:
					break;
			}
			return $res;
		}
		
		//3.限制大小
		// if($upfile.size>100000){
		// 	$res["info"] = "文件过大";
		// 	return $res;
		// }
		// //4.过滤类型
		// if(!in_array($upfile["type"],$typelist)){
		// 	$res["info"] = "上传文件不符合".$upfile["type"];
		// 	return $res;
		// }
		// //5.初始化下信息（为图片产生一个随机的名字）;
		// $fileinfo = pathinfo($upfile["name"]);
		// do{
		// 	$newfile = date("YmdHis").rand(1000,999).".".$fileinfo["extendion"];//随机生成个文件名字
		// }
		//6.执行上传处理
		// if(is_uploaded_file($upfile["tmp_name"])){
		// 	if(move_uploaded_file($upfile["tmp_name"],$path."/".$newfile)){
		// 		//上传成功后的文件名赋给返回数组
		// 		$res["info"] = $newfile;
		// 		$res["error"] = true;
		// 	}else{
		// 		$res["info"] = "上传文件失败";
		// 	}
		// }else{
		// 	$res["info"] = "不是一个上传的文件";
		// }
		// return $res;
	}
?>