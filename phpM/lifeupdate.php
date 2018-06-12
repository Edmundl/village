<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from baozhang where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="lifeAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改最低生活保障信息</caption>
			<tr>
				<td>姓名:</td>
				<td><input type="text" name="name" value="<?php echo $row[name]?>" ></td>
			</tr>
			<tr>
				<td>地址:</td>
				<td><input type="text" name="address" value="<?php echo $row[address]?>"></td>
			</tr>
			<tr>
				<td>身份证号:</td>
				<td><input type="text" name="idnum" value="<?php echo $row[idnum]?>"></td>
			</tr>
            <tr>
				<td>最低保险金额:</td>
				<td><input type="text" name="minmoney" value="<?php echo $row[minmoney]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>