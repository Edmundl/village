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
                            $idnum=$_POST['idnum'];
                            $address=$_POST['address'];
							$money=$_POST['money'];
							$age=$_POST['age'];
                            $sql="insert into baoxian(name,sex,idnum,address,money,age) values ('$name','$sex','$idnum','$address','$money','$age')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='insuranceM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from baoxian where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='insuranceM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$name=$_POST['name'];
							$sex=$_POST['sex'];
                            $idnum=$_POST['idnum'];
                            $address=$_POST['address'];
							$money=$_POST['money'];
							$age=$_POST['age'];
							$sql="update baoxian set name='{$name}',sex='{$sex}',idnum='{$idnum}',address='{$address}',money='{$money}',age='{$age}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='insuranceM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>