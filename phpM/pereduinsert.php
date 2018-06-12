<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="pereduAction.php?action=insert" method="post">
		<table>
			<caption>人口教育信息添加</caption>
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
				<td>文化程度:</td>
				<td>
					<select name="degree">
						<option value="小学">小学</option>
						<option value="初中">初中</option>
						<option value="高中">高中</option>
						<option value="专科">专科</option>
						<option value="本科">本科</option>
						<option value="研究生">研究生</option>
						<option value="博士">博士</option>
					</select>
				</td>
			</tr>
            <tr>
				<td>所在（毕业）学校:</td>
				<td><input type="text" name="school" placeholder="添加所在（毕业）学校" onfocus="placeholder=''" onblur="placeholder='添加所在（毕业）学校'"></td>
			</tr>
            <tr>
				<td>英语水平:</td>
				<td><input type="text" name="englevel" placeholder="添加英语水平" onfocus="placeholder=''" onblur="placeholder='添加英语水平'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>