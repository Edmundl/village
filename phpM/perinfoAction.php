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
                            $nation=$_POST['nation'];
                            $birthday=$_POST['birthday'];
                            $idnum=$_POST['idnum'];
                            $jiguan=$_POST['jiguan'];
                            $sql="insert into popinfo(name,sex,idnum,birthday,nation,jiguan) values ('$name','$sex','$idnum','$birthday','$nation','$jiguan')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='perinfoM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from popinfo where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='perinfoM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$name=$_POST['name'];
							$sex=$_POST['sex'];
                            $nation=$_POST['nation'];
                            $birthday=$_POST['birthday'];
                            $idnum=$_POST['idnum'];
                            $jiguan=$_POST['jiguan'];
							$sql="update popinfo set name='{$name}',sex='{$sex}',idnum='{$idnum}',birthday='{$birthday}',nation='{$nation}',jiguan='{$jiguan}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='perinfoM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>