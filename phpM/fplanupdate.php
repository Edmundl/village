<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from jisheng where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="fplanAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改计生信息</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" value="<?php echo $row[name]?>" ></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="radio" name="sex" value="男" checked/><span class="man">男</span><input type="radio" name="sex" value="女"/>女</td>
			</tr>
			<tr>
				<td>民族:</td>
				<td><input type="text" name="nation" value="<?php echo $row[nation]?>"></td>
			</tr>
            <tr>
				<td>出生日期:</td>
				<td><input type="text" name="birthday" value="<?php echo $row[birthday]?>"></td>
			</tr>
            <tr>
				<td>婚姻状态:</td>
				<td>
					<select name="marriage" value="<?php echo $row[marriage]?>">
						<option value="未婚">未婚</option>
						<option value="已婚">已婚</option>
						<option value="离婚">离婚</option>
					</select>
				</td>
			</tr>
            <tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" value="<?php echo $row[idnum]?>"></td>
			</tr>
            <tr>
				<td>现有男孩:</td>
				<td><input type="text" name="boy" value="<?php echo $row[boy]?>"></td>
			</tr>
            <tr>
				<td>现有女孩:</td>
				<td><input type="text" name="girl" value="<?php echo $row[girl]?>"></td>
			</tr>
			<tr>
				<td>审核状态:</td>
				<td>
					<select name="state" value="<?php echo $row[state]?>">
						<option value="审核中">审核中</option>
						<option value="审核成功">审核成功</option>
						<option value="审核失败">审核失败</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>