<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/insert.css">
<div id="container">
	<?php
		$id=$_GET['id'];
		$link=mysqli_connect('localhost','root','root','village');
		mysqli_query($link,"set names utf8");
		$sql="select * from popedu where id=$id";
		$result=mysqli_query($link,$sql);
	?>
	<?php while ($row=mysqli_fetch_assoc($result)) { ?>
	<form action="pereduAction.php?action=update&&id=<?php echo $row[id] ?>" method="post">
		<table>
			<caption>修改人口教育详情信息</caption>
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
				<td><input type="text" name="school" value="<?php echo $row[school]?>"></td>
			</tr>
            <tr>
				<td>英语水平:</td>
				<td><input type="text" name="englevel" value="<?php echo $row[englevel]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">修改</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</div>