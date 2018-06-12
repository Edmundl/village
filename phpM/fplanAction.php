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
                            $married=$_POST['marriage'];
                            $idnum=$_POST['idnum'];
                            $boy=$_POST['boy'];
							$girl=$_POST['girl'];
							$sta=$_POST['state'];
                            $sql="insert into jisheng(name,sex,nation,birthday,marriage,idnum,boy,girl,state) values ('$name','$sex','$nation','$birthday','$married','$idnum','$boy','$girl','$sta')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='fplanM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from jisheng where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='fplanM.php'</script>";
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
                            $married=$_POST['marriage'];
                            $idnum=$_POST['idnum'];
                            $boy=$_POST['boy'];
							$girl=$_POST['girl'];
							$sta=$_POST['state'];
							$sql="update jisheng set name='{$name}',sex='{$sex}',nation='{$nation}',birthday='{$birthday}',marriage='{$married}',idnum='{$idnum}',boy='{$boy}',girl='{$girl}',state='{$sta}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='fplanM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>