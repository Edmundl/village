<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="insuranceAction.php?action=insert" method="post">
		<table>
			<caption>村民养老保险添加</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" placeholder="添加的用户名" onfocus="placeholder=''" onblur="placeholder='添加的用户名'"></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="radio" name="sex" value="男" checked/><span class="man">男</span><input type="radio" name="sex" value="女"/>女</td>
			</tr>
			<tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" placeholder="添加身份证号" onfocus="placeholder=''" onblur="placeholder='添加身份证号'"></td>
			</tr>
            <tr>
				<td>家庭住址:</td>
				<td><input type="text" name="address" placeholder="添加家庭住址" onfocus="placeholder=''" onblur="placeholder='家庭住址'"></td>
			</tr>
            <tr>
				<td>政府补助:</td>
				<td><input type="text" name="money" placeholder="添加政府补助" onfocus="placeholder=''" onblur="placeholder='添加政府补助'"></td>
			</tr>
			<tr>
				<td>年龄:</td>
				<td><input type="text" name="age" placeholder="添加年龄" onfocus="placeholder=''" onblur="placeholder='添加年龄'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>