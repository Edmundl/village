<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/LgRg.css?v=<?php $_VER=6;echo $_VER;?>">
<head>
	<title>欢迎</title>
</head>
<body>
<div class="LgRg">
	<form action="loginR.php" method="post">
		<table id="lgtb">
			<th colspan="2">村民系统登陆</th>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td>密 码：</td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>登陆身份：</td>
				<td>
					<select name="iden">
						<option>管理员</option>
						<option>普通用户</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="lgrg-btn">
					<button type="submit" name="submit">登陆</button>
					<button type="button" name="button" onclick="window.location.href='register.php'">注册</button>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>