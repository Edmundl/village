<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="perinfoAction.php?action=insert" method="post">
		<table>
			<caption>村民基本信息添加</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" placeholder="添加的姓名" onfocus="placeholder=''" onblur="placeholder='添加的姓名'"></td>
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
				<td>出生日期:</td>
				<td><input type="date" name="birthday"></td>
			</tr>
            <tr>
				<td>民族:</td>
				<td><input type="text" name="nation" placeholder="添加民族" onfocus="placeholder=''" onblur="placeholder='添加民族'"></td>
			</tr>
            <tr>
				<td>籍贯:</td>
				<td><input type="text" name="jiguan" placeholder="添加籍贯" onfocus="placeholder=''" onblur="placeholder='添加籍贯'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>