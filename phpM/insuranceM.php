<?php
  	include 'managerframe.php';
?>
<?php
	session_start();
?>
<!--完成分页-->
<?php
  $link=mysqli_connect('localhost','root','root','village');
  mysqli_query($link,"set names utf8");

//获得中的记录数
  $sql_total_records="select count(*) from baoxian";
  $total_records_result=mysqli_query($link,$sql_total_records);
  $total_records=mysqli_fetch_row($total_records_result);

//获得总页数,一般来说页面大小是固定的,所以这里暂且定为一页4个数据
  $page_size=8;
  $total_pages=ceil($total_records[0]/$page_size);

//通过GET方式获得客户端访问的页码
  $current_page_number=isset($_GET['page_number'])?$_GET['page_number']:1;
  if($current_page_number<1){
    $current_page_number=1;
  }
  if($current_page_number>$total_pages){
    $current_page_number=$total_pages;
  }

//获取到了要访问的页面以及页面大小,下面开始分页
  $begin_position=($current_page_number-1)*$page_size;
  $sql="select * from baoxian limit $begin_position,$page_size";
  $result=mysqli_query($link,$sql);
  ?>

<link rel="stylesheet" type="text/css" href="../css/Mframe.css?v=<?php $_VER=2;echo $_VER;?>">
<!--查询-->
<div class="sel">
	<form method="post" action="selAction.php?active=6">
		<select name="type">
			<option value='name'>姓名</option>
      <option value='idnum'>身份证号</option>
		</select>
		<input type="text" name="value">
		<input type="submit" value="查询" class="bsel">
	</form>
</div>
<!--显示-->
<div class="conright">
	<form method="post" action="insuranceAction.php?action=delete">
		<table>
			<caption class="m-cap">养老保险信息管理</caption>
			<tr>
				<th><input type="button" name="item[]" id="item[]" value="全选" onclick="selectall();" class="bq"></th>
				<th>id号</th>
				<th>姓名</th>
				<th>性别</th>
        <th>身份证号</th>
        <th>家庭住址</th>
				<th>政府补助</th>
				<th>年龄</th>
			</tr>
			<?php 
				while ($row=mysqli_fetch_assoc($result)) { 
			?>
				<tr>
					<td><input type='checkbox' name='item[]' id='item[]' value='<?php echo $row[id] ?>'/></td>
					<td><?php echo $row[id] ?></td>
					<td><?php echo $row[name] ?></td>
					<td><?php echo $row[sex] ?></td>
          <td><?php echo $row[idnum] ?></td>
          <td><?php echo $row[address] ?></td>
					<td><?php echo $row[money] ?></td>
					<td><?php echo $row[age] ?></td>
					<td>
						<input type='button' name='update' value='修改' style='cursor: pointer;height: 22px;width: 40px;' onclick="window.location.href='insuranceupdate.php?id=<?php echo $row[id] ?>'"/>
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td class="insert" colspan="11">
					<input type="button" name="register" value="插入" class="btn" onclick="window.location.href='insuranceInsert.php'">
					<input type='submit' name='delete' value='删除' class="btn" style='cursor: pointer;'/>
				</td>
			</tr>
			<tr>
				<td colspan="11" id="fpage">
					<?php
					    echo '<a href="insuranceM.php?page_number=1">首页</a>&nbsp;&nbsp;';
					    echo '<a href="insuranceM.php?page_number='.($current_page_number-1).'">上一页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					    echo "$current_page_number/$total_pages&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					    echo '<a href="insuranceM.php?page_number='.($current_page_number+1).'">下一页</a>&nbsp;&nbsp;';
					    echo '<a href="insuranceM.php?page_number='.($total_pages).'">尾页</a>&nbsp;&nbsp;';
					    mysqli_free_result($result);
					    mysqli_close($link);
					  ?>
				</td>
			</tr>
		</table>
	</form>
</div>

<!--完成全选-->
<script type="text/javascript">
function selectall(){
	var selectAll=document.getElementsByName("item[]");
	for(var i=0;i<selectAll.length;i++){
		selectAll[i].checked=true;
	}
}
</script>