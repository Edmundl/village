<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="userAction.php?action=insert" method="post">
		<table>
			<caption>用户添加</caption>
			<tr>
				<td>用户名：</td>
				<td><input type="text" name="username" placeholder="添加的用户名" onfocus="placeholder=''" onblur="placeholder='添加的用户名'"></td>
			</tr>
			<tr>
				<td>密  码：</td>
				<td><input type="password" name="password" placeholder="添加的密码" onfocus="placeholder=''" onblur="placeholder='添加的密码'"></td>
			</tr>
			<tr>
				<td>用户权限:</td>
				<td><select name="iden">
						<option>管理员</option>
						<option>普通用户</option>
					</select></td>
			</tr>
			<tr>
				<td>姓  名:</td>
				<td><input type="text" name="uname" placeholder="添加用户姓名" onfocus="placeholder=''" onblur="placeholder='添加用户姓名'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>