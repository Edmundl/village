<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from user where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="userAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改用户信息</caption>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="username" value="<?php echo $row[username]?>" ></td>
			</tr>
			<tr>
				<td>密  码：</td>
				<td><input type="password" name="password" value="<?php echo $row[password]?>" ></td>
			</tr>
			<tr>
				<td>用户权限:</td>
				<td><select name="iden">
						<option>管理员</option>
						<option>普通用户</option>
					</select></td>
			</tr>
			<tr>
				<td>姓  名：</td>
				<td><input type="text" name="uname" value="<?php echo $row[name]?>" ></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>