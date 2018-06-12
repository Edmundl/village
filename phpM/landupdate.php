<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from land where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="landAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改土地信息</caption>
			<tr>
				<td>土地所有权:</td>
				<td>
						<select name="nature" value="<?php echo $row[nature]?>">
							<option value="私人">私人</option>
							<option value="国家">国家</option>
						</select>
				</td>
			</tr>
			<tr>
				<td>土地名称:</td>
				<td><input type="text" name="programname" value="<?php echo $row[programname]?>"></td>
			</tr>
			<tr>
				<td>土地所属位置:</td>
				<td><input type="text" name="programplace" value="<?php echo $row[programplace]?>"></td>
			</tr>
            <tr>
				<td>土地所属人:</td>
				<td><input type="text" name="relatpop" value="<?php echo $row[relatpop]?>"></td>
			</tr>
            <tr>
				<td>土地所属人联系方式:</td>
				<td><input type="text" name="relatphone" value="<?php echo $row[relatphone]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>