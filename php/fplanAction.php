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
                            $sql="insert into jisheng(name,sex,nation,birthday,marriage,idnum,boy,girl,state) values ('$name','$sex','$nation','$birthday','$married','$idnum','$boy','$girl','等待中')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('申请完成请等待!');</script>";
								echo "<script>window.location.href='fplan.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=$_GET['id'];
							$sql="delete from jisheng where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('取消申请成功!');</script>";
								echo "<script>window.location.href='fplan.php'</script>";
							}
							else
								echo "delete faild!";
							break;
					 }
			}
?>