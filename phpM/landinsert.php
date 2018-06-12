<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="landAction.php?action=insert" method="post">
		<table>
			<caption>村民土地添加</caption>
			<tr>
				<td>土地所有权:</td>
				<td>
						<select name="nature">
							<option value="私人">私人</option>
							<option value="国家">国家</option>
						</select>
				</td>
			</tr>
			<tr>
				<td>土地名称:</td>
				<td><input type="text" name="programname" placeholder="添加土地名称" onfocus="placeholder=''" onblur="placeholder='添加土地名称'"></td>
			</tr>
			<tr>
				<td>土地所属位置:</td>
				<td><input type="text" name="programplace" placeholder="添加位置" onfocus="placeholder=''" onblur="placeholder='添加位置'"></td>
			</tr>
            <tr>
				<td>土地所属人:</td>
				<td><input type="text" name="relatpop" placeholder="添加土地所属人" onfocus="placeholder=''" onblur="placeholder='添加土地所属人'"></td>
			</tr>
            <tr>
				<td>土地所属人联系方式:</td>
				<td><input type="text" name="relatphone" placeholder="添加土地所属人联系方式" onfocus="placeholder=''" onblur="placeholder='添加土地所属人联系方式'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>