<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css?v=<?php $_VER=1;echo $_VER;?>">
<div id="container">
	<form action="houseAction.php?action=insert" method="post">
		<table>
			<caption>村民房屋添加</caption>
			<tr>
				<td>用户:</td>
				<td><input type="text" name="user" placeholder="添加的用户" onfocus="placeholder=''" onblur="placeholder='添加的用户'"></td>
			</tr>
			<tr>
				<td>占地面积:</td>
				<td><input type="text" name="area" placeholder="添加的占地面积" onfocus="placeholder=''" onblur="placeholder='添加的占地面积'"></td>
			</tr>
			<tr>
				<td>所有权:</td>
				<td>
					<select name="power">
						<option value="私人">私人</option>
						<option value="国家">国家</option>
					</select>
				</td>
			</tr>
            <tr>
				<td>联系方式:</td>
				<td><input type="text" name="tel" placeholder="添加的联系方式" onfocus="placeholder=''" onblur="placeholder='添加的联系方式'"></td>
			</tr>
			<tr>
				<td>房屋所属地:</td>
				<td><input type="text" name="place" placeholder="添加的房屋所属地" onfocus="placeholder=''" onblur="placeholder='添加的房屋所属地'"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="添加" class="sub"></input></td>
			</tr>
		</table>
	</form>
</div>