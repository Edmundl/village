<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="fplanAction.php?action=insert" method="post">
		<table>
			<caption>村民计生添加</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" placeholder="添加的用户名" onfocus="placeholder=''" onblur="placeholder='添加的用户名'"></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="radio" name="sex" value="男" checked/><span class="man">男</span><input type="radio" name="sex" value="女"/>女</td>
			</tr>
			<tr>
				<td>民族:</td>
				<td><input type="text" name="nation" placeholder="添加民族" onfocus="placeholder=''" onblur="placeholder='添加民族'"></td>
			</tr>
            <tr>
				<td>出生日期:</td>
				<td><input type="date" name="birthday"></td>
			</tr>
            <tr>
				<td>婚姻状态:</td>
				<td>
					<select name="marriage">
						<option value="未婚">未婚</option>
						<option value="已婚">已婚</option>
						<option value="离婚">离婚</option>
					</select>
				</td>
			</tr>
            <tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" placeholder="身份证号" onfocus="placeholder=''" onblur="placeholder='身份证号'"></td>
			</tr>
            <tr>
				<td>现有男孩:</td>
				<td><input type="text" name="boy" placeholder="现有男孩" onfocus="placeholder=''" onblur="placeholder='现有男孩'"></td>
			</tr>
            <tr>
				<td>现有女孩:</td>
				<td><input type="text" name="girl" placeholder="现有女孩" onfocus="placeholder=''" onblur="placeholder='现有女孩'"></td>
			</tr>
			<tr>
				<td>审核状态:</td>
				<td>
					<select name="state">
						<option value="审核中">审核中</option>
						<option value="审核成功">审核成功</option>
						<option value="审核失败">审核失败</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>