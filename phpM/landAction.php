<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
					switch ($_GET['action']) {
						case 'insert':
                            $nature=$_POST['nature'];
                            $programname=$_POST['programname'];
                            $programplace=$_POST['programplace'];
                            $relatpop=$_POST['relatpop'];
                            $relatphone=$_POST['relatphone'];
                            $sql="insert into land(nature,programname,programplace,relatpop,relatphone) values ('$nature','$programname','$programplace','$relatpop','$relatphone')";
                            $result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('添加成功!');</script>";
								echo "<script>window.location.href='landM.php'</script>";
							}
							else
								echo "insert faild!";
							break;
						case 'delete':
							$id=implode(",", $_POST['item']);
							$sql="delete from land where id in({$id})";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('删除成功!');</script>";
								echo "<script>window.location.href='landM.php'</script>";
							}else{
								echo "delete faild!";
							}
							break;
						case 'update':
							$id=$_GET['id'];
							$nature=$_POST['nature'];
                            $programname=$_POST['programname'];
                            $programplace=$_POST['programplace'];
                            $relatpop=$_POST['relatpop'];
                            $relatphone=$_POST['relatphone'];
							$sql="update land set nature='{$nature}',programname='{$programname}',programplace='{$programplace}',relatpop='{$relatpop}',relatphone='{$relatphone}' where id=$id";
							$result=mysqli_query($link,$sql);
							if($result){
								echo "<script>alert('修改成功!');</script>";
								echo "<script>window.location.href='landM.php'</script>";
							}
							else
								echo "update faild!";
							break;
					 }
			}
?>