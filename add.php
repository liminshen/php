<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php include("menu.php");//引入导航栏 ?>
	<h3>发布商品</h3>
	<form action="add.php?action=add" enctype="multipart/form-data" method="post">
	<table border="1" width="400">
		<tr>
			<td align="right">名称：</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td align="right">类型：</td>
			<td>
				<select name="typeid" id="">
					<?php
						include ('dbconfig.php');
						foreach ($typelist as $k => $v)
							echo '<option value="'.$k.'">'.$v.'</option>'

					?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right">单价：</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td align="right">库存：</td>
			<td><input type="text" name="total"></td>
		</tr>
		<tr>
			<td align="right">图片：</td>
			<td><input type="file" name="pic"></td>
		</tr>
		<tr>
			<td align="right">描述：</td>
			<td><textarea name="note" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td align="right">描述：</td>
			<td><input type="submit"></td>
		</tr>
	</table>
	</form>
</body>
</html>
