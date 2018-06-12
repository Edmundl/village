<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from house where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="houseAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改房屋信息</caption>
			<tr>
				<td>用户:</td>
				<td><input type="text" name="user" value="<?php echo $row[user]?>"></td>
			</tr>
			<tr>
				<td>占地面积:</td>
				<td><input type="text" name="area" value="<?php echo $row[area]?>"></td>
			</tr>
			<tr>
				<td>所有权:</td>
				<td>
					<select name="power" value="<?php echo $row[power]?>">
						<option value="私人">私人</option>
						<option value="国家">国家</option>
					</select>
				</td>
			</tr>
            <tr>
				<td>联系方式:</td>
				<td><input type="text" name="tel" value="<?php echo $row[tel]?>"></td>
			</tr>
			<tr>
				<td>房屋所属地:</td>
				<td><input type="text" name="place" value="<?php echo $row[place]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>