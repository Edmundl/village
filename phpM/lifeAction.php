<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
					switch ($_GET['action']) {
						case 'insert':
							$name=$_POST['name'];
							$address=$_POST['address'];
                            $idnum=$_POST['idnum'];
                            $minmoney=$_POST['minmoney'];
                            $money=$_POST['money'];
                            $sql="insert into baozhang(name,address,idnum,minmoney) values ('$name','$address','$idnum','$minmoney')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='lifeM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from baozhang where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='lifeM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$name=$_POST['name'];
							$address=$_POST['address'];
                            $idnum=$_POST['idnum'];
                            $minmoney=$_POST['minmoney'];
                            $money=$_POST['money'];
							$sql="update baozhang set name='{$name}',address='{$address}',idnum='{$idnum}',minmoney='{$minmoney}'where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='lifeM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>