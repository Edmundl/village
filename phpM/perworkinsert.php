<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="perworkAction.php?action=insert" method="post">
		<table>
			<caption>村民基本信息添加</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" placeholder="添加的用户名" onfocus="placeholder=''" onblur="placeholder='添加的用户名'"></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="radio" name="sex" value="男" checked/><span class="man">男</span><input type="radio" name="sex" value="女"/>女</td>
			</tr>
			<tr>
				<td>年龄:</td>
				<td><input type="text" name="age" placeholder="添加年龄" onfocus="placeholder=''" onblur="placeholder='添加年龄'"></td>
			</tr>
            <tr>
				<td>手机号码:</td>
				<td><input type="text" name="phone" placeholder="添加手机号码" onfocus="placeholder=''" onblur="placeholder='添加手机号码'"></td>
			</tr>
            <tr>
				<td>所属公司:</td>
				<td><input type="text" name="company" placeholder="添加所属公司" onfocus="placeholder=''" onblur="placeholder='添加所属公司'"></td>
			</tr>
            <tr>
				<td>职位:</td>
				<td><input type="text" name="position" placeholder="添加职位" onfocus="placeholder=''" onblur="placeholder='添加职位'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>