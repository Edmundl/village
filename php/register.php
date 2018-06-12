<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/LgRg.css?v=<?php $_VER=8;echo $_VER;?>">
<head>
	<title>欢迎</title>
</head>
<body>
<div class="LgRg">
	<form action="registerR.php" method="post">
		<table class="LgRg-tb">
			<th colspan="2">普通用户注册</th>
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>密 码：</td>
					<td><input type="password" name="password"/></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="spassword"/></td>
				</tr>
				<tr>
					<td>姓名:</td>
					<td><input type="text" name="uname"/></td>
				</tr>
				<tr>
					<td colspan="2" class="lgrg-btn">
						<button type="submit" name="submit">注册</button>
						<button type="button" name="back" onclick="window.location.href='login.php'">返回</button>
					</td>
				</tr>
		</table>
	</form>
</div>
<script type="text/javascript" src="../js/frame.js"></script>
</body>
</html>