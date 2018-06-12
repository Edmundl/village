<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from popwork where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="perworkAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
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
				<td>年龄:</td>
				<td><input type="text" name="age" value="<?php echo $row[age]?>"></td>
			</tr>
            <tr>
				<td>手机号码:</td>
				<td><input type="text" name="phone" value="<?php echo $row[phone]?>"></td>
			</tr>
            <tr>
				<td>所属公司:</td>
				<td><input type="text" name="company" value="<?php echo $row[company]?>"></td>
			</tr>
            <tr>
				<td>职位:</td>
				<td><input type="text" name="position" value="<?php echo $row[position]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>