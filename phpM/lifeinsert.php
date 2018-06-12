<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="lifeAction.php?action=insert" method="post">
		<table>
			<caption>村民最低生活保障添加</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" placeholder="添加的用户名" onfocus="placeholder=''" onblur="placeholder='添加的用户名'"></td>
			</tr>
			<tr>
				<td>住址:</td>
				<td><input type="text" name="address" placeholder="添加的住址" onfocus="placeholder=''" onblur="placeholder='添加的住址'"></td>
			</tr>
			<tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" placeholder="添加身份证号" onfocus="placeholder=''" onblur="placeholder='添加身份证号'"></td>
			</tr>
            <tr>
				<td>最低保障金额:</td>
				<td><input type="text" name="minmoney" placeholder="添加最低保障金额" onfocus="placeholder=''" onblur="placeholder='添加最低保障金额'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>