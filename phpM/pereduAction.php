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
							$sex=$_POST['sex'];
                            $age=$_POST['age'];
                            $degree=$_POST['degree'];
                            $school=$_POST['school'];
                            $englevel=$_POST['englevel'];
                            $sql="insert into popedu(name,sex,age,degree,school,englevel) values ('$name','$sex','$age','$degree','$school','$englevel')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='pereduM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from popedu where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='pereduM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$name=$_POST['name'];
							$sex=$_POST['sex'];
                            $age=$_POST['age'];
                            $degree=$_POST['degree'];
                            $school=$_POST['school'];
                            $englevel=$_POST['englevel'];
							$sql="update popedu set name='{$name}',sex='{$sex}',age='{$age}',degree='{$degree}',school='{$school}',englevel='{$englevel}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='pereduM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>