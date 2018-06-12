<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
					switch ($_GET['action']) {
						case 'insert':
							$username=$_POST['username'];
							$password=$_POST['password'];
							$iden=$_POST['iden'];
							$uname=$_POST['uname'];
							if($iden=='管理员'){
								$sql="insert into user(username,password,identity,name) values ('$username','$password','1','$uname')";
								$result=mysqli_query($link,$sql);
								if($result){
									echo "<script>alert('添加成功!');</script>";
									echo "<script>window.location.href='userM.php'</script>";
								}
								else
									echo "insert faild!";
								break;
							}
							else if($iden=='普通用户'){
								$sql="insert into user(username,password,identity,name) values ('$username','$password','2','$uname')";
								$result=mysqli_query($link,$sql);
								if($result){
									echo "<script>alert('添加成功!');</script>";
									echo "<script>window.location.href='userM.php'</script>";
								}
								else
									echo "insert faild!";
								break;
							}
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from user where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='userM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$username=$_POST['username'];
							$password=$_POST['password'];
							$iden=$_POST['iden'];
							$uname=$_POST['uname'];
							if($iden=='管理员'){
								$sql="update user set username='{$username}',password='{$password}',identity='1',name='{$uname}' where id=$id";
								$result=mysqli_query($link,$sql);
								if($result){
									echo "<script>alert('修改成功!');</script>";
									echo "<script>window.location.href='userM.php'</script>";
								}
								else
									echo "update faild!";
								break;
							}else if($iden=='普通用户'){
								$sql="update user set username='{$username}',password='{$password}',identity='2',name='{$uname}' where id=$id";
								$result=mysqli_query($link,$sql);
								if($result){
									echo "<script>alert('修改成功!');</script>";
									echo "<script>window.location.href='userM.php'</script>";
								}
								else
									echo "insert faild!";
								break;
							}
					 }
			}
?>