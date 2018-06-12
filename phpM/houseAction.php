<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
					switch ($_GET['action']) {
						case 'insert':
                            $user=$_POST['user'];
                            $area=$_POST['area'];
                            $power=$_POST['power'];
							$tel=$_POST['tel'];
							$place=$_POST['place'];
                            $sql="insert into house(user,area,power,tel,place) values ('$user','$area','$power','$tel','$place')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='houseM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from house where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='houseM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$user=$_POST['user'];
							$area=$_POST['area'];
                            $power=$_POST['power'];
							$tel=$_POST['tel'];
							$place=$_POST['place'];
							$sql="update house set user='{$user}',area='{$area}',power='{$power}',tel='{$tel}',place='{$place}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='houseM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>