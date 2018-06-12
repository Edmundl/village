<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from baoxian where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="insuranceAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改养老保险信息</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" value="<?php echo $row[name]?>" ></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td><input type="radio" name="sex" value="男" checked/><span class="man">男</span><input type="radio" name="sex" value="女"/>女</td>
			</tr>
			<tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" value="<?php echo $row[idnum]?>"></td>
			</tr>
            <tr>
				<td>家庭住址:</td>
				<td><input type="text" name="address" value="<?php echo $row[address]?>"></td>
			</tr>
            <tr>
				<td>政府补助:</td>
				<td><input type="text" name="money" value="<?php echo $row[money]?>"></td>
			</tr>
			<tr>
				<td>年龄:</td>
				<td><input type="text" name="age" value="<?php echo $row[age]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>