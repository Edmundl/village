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
                            $phone=$_POST['phone'];
                            $company=$_POST['company'];
                            $position=$_POST['position'];
                            $sql="insert into popwork(name,sex,age,phone,company,position) values ('$name','$sex','$age','$phone','$company','$position')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='perworkM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from popwork where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='perworkM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$name=$_POST['name'];
							$sex=$_POST['sex'];
                            $age=$_POST['age'];
                            $phone=$_POST['phone'];
                            $company=$_POST['company'];
                            $position=$_POST['position'];
							$sql="update popwork set name='{$name}',sex='{$sex}',age='{$age}',phone='{$phone}',company='{$company}',position='{$position}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='perworkM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>