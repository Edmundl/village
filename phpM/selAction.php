<?php
	session_start();
?>
<meta charset="utf-8">
<?php
  	include 'managerframe.php';
?>
<link rel="stylesheet" type="text/css" href="../css/Mframe.css?v=<?php $_VER=3;echo $_VER;?>">
<meta charset="utf-8">
<?php
echo "<div style='width:100%;text-align:center;font-size:2rem;'>查询结果如下";
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
					switch ($_GET['active']) {
						case '1':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from user where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='margin:0 auto;width:600px;text-align:center;'>";
							echo "<tr><td style='width:200px'>id号";
							echo "</td><td style='width:200px'>用户名";
                            echo "</td><td style='width:200px'>密码";
							echo "</td><td style='width:200px'>身份";
							echo "</td><td style='width:200px'>姓名";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='margin:0 auto;width:600px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:200px'>$a[id]";
									echo "</td><td style='width:200px'>$a[username]";
									echo "</td><td style='width:200px'>$a[password]";
                                    echo "</td><td style='width:200px'>";            
                                    if($a[identity]=='1'){
                                        echo "管理员";
                                    }else if($a[identity]=='2'){
                                        echo "普通用户";
									}
									echo "</td><td style='width:200px'>$a[name]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '2':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from jisheng where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:900px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>性别";
							echo "</td><td style='width:100px'>民族";
							echo "</td><td style='width:100px'>出生日期";
							echo "</td><td style='width:100px'>是否已婚";
							echo "</td><td style='width:100px'>身份证号";
							echo "</td><td style='width:100px'>现有男孩";
							echo "</td><td style='width:100px'>现有女孩";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:900px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:100px'>$a[id]";
									echo "</td><td style='width:100px'>$a[name]";
									echo "</td><td style='width:100px'>$a[sex]";
									echo "</td><td style='width:100px'>$a[nation]";
									echo "</td><td style='width:100px'>$a[birthday]";
									echo "</td><td style='width:100px'>$a[marriage]";
									echo "</td><td style='width:100px'>$a[idnum]";
									echo "</td><td style='width:100px'>$a[boy]";
									echo "</td><td style='width:100px'>$a[girl]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '3':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from popinfo where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>性别";
							echo "</td><td style='width:100px'>身份证号";
							echo "</td><td style='width:100px'>出生日期";
							echo "</td><td style='width:100px'>民族";
							echo "</td><td style='width:100px'>籍贯";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:100px'>$a[id]";
									echo "</td><td style='width:100px'>$a[name]";
									echo "</td><td style='width:100px'>$a[sex]";
									echo "</td><td style='width:100px'>$a[idnum]";
									echo "</td><td style='width:100px'>$a[birthday]";
									echo "</td><td style='width:100px'>$a[nation]";
									echo "</td><td style='width:100px'>$a[jiguan]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '4':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from popwork where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>性别";
							echo "</td><td style='width:100px'>年龄";
							echo "</td><td style='width:100px'>手机号";
							echo "</td><td style='width:100px'>所在公司";
							echo "</td><td style='width:100px'>职位";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:100px'>$a[id]";
									echo "</td><td style='width:100px'>$a[name]";
									echo "</td><td style='width:100px'>$a[sex]";
									echo "</td><td style='width:100px'>$a[age]";
									echo "</td><td style='width:100px'>$a[phone]";
									echo "</td><td style='width:100px'>$a[company]";
									echo "</td><td style='width:100px'>$a[position]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '5':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from popedu where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>性别";
							echo "</td><td style='width:100px'>年龄";
							echo "</td><td style='width:100px'>文化程度";
							echo "</td><td style='width:100px'>所在（毕业）学校";
							echo "</td><td style='width:100px'>英语水平";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:200px'>$a[id]";
									echo "</td><td style='width:200px'>$a[name]";
									echo "</td><td style='width:200px'>$a[sex]";
									echo "</td><td style='width:200px'>$a[age]";
									echo "</td><td style='width:200px'>$a[degree]";
									echo "</td><td style='width:200px'>$a[school]";
									echo "</td><td style='width:200px'>$a[englevel]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '6':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from baoxian where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>性别";
							echo "</td><td style='width:100px'>身份证号";
							echo "</td><td style='width:100px'>家庭住址";
							echo "</td><td style='width:100px'>政府补助";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:200px'>$a[id]";
									echo "</td><td style='width:200px'>$a[name]";
									echo "</td><td style='width:200px'>$a[sex]";
									echo "</td><td style='width:200px'>$a[idnum]";
									echo "</td><td style='width:200px'>$a[address]";
									echo "</td><td style='width:200px'>$a[money]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '7':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from baozhang where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>姓名";
							echo "</td><td style='width:100px'>地址";
							echo "</td><td style='width:100px'>身份证号";
							echo "</td><td style='width:100px'>最低保障金额";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:700px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:200px'>$a[id]";
									echo "</td><td style='width:200px'>$a[name]";
									echo "</td><td style='width:200px'>$a[address]";
									echo "</td><td style='width:200px'>$a[idnum]";
									echo "</td><td style='width:200px'>$a[minmoney]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;

						case '8':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from house where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:500px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>户主";
							echo "</td><td style='width:100px'>房屋占地面积";
							echo "</td><td style='width:100px'>房屋所有权";
							echo "</td><td style='width:100px'>户主联系方式";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:500px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:100px'>$a[id]";
									echo "</td><td style='width:100px'>$a[user]";
									echo "</td><td style='width:100px'>$a[area]";
									echo "</td><td style='width:100px'>$a[power]";
									echo "</td><td style='width:100px'>$a[tel]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;
						case '9':
							$type=$_POST['type'];
							$value=$_POST['value'];
							$sql="select * from land where $type='$value'";
							$result=mysqli_query($link,$sql);
							echo "<table style='border:1px solid #000;margin:0 auto;width:500px;text-align:center;'>";
							echo "<tr><td style='width:100px'>id号";
							echo "</td><td style='width:100px'>土地所有权";
							echo "</td><td style='width:100px'>土地名称";
							echo "</td><td style='width:100px'>土地所属位置";
							echo "</td><td style='width:100px'>土地所属人";
							echo "</td><td style='width:100px'>土地所属人联系方式";
							echo "</td></tr>";
							echo "</table>";
							echo "<table style='border:1px solid #000;margin:0 auto;width:500px;text-align:center;'>";
								while ($a=mysqli_fetch_assoc($result)) {
									echo "<tr><td style='width:100px'>$a[id]";
									echo "</td><td style='width:100px'>$a[nature]";
									echo "</td><td style='width:100px'>$a[programname]";
									echo "</td><td style='width:100px'>$a[programplace]";
									echo "</td><td style='width:100px'>$a[relatpop]";
									echo "</td><td style='width:100px'>$a[relatphone]";
									echo "</td></tr>";
								}
							echo "</table>";
						break;
					}		
			}
echo "</div>";
?>