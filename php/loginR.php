<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$iden=$_POST['iden'];

		if($iden=='管理员'){
			$sql1="select * from village.user where username='$username' and password='$password' and identity='1'";
			$res=mysqli_query($link,$sql1);
			$row=mysqli_num_rows($res);
			if($row>0){
				session_start();
				$_SESSION["manager_user"]=$username;
				echo "<script>window.location.href='../phpM/userM.php'</script>";
			}else{
				echo "<script>alert('您登陆的用户名没达到权限!');</script>";
				echo "<script>window.location.href='login.php'</script>";
			}
			break;
		}
		else if($iden=='普通用户'){
			$sql2="select * from village.user where username='$username' and password='$password' and identity='2'";
			$result=mysqli_query($link,$sql2);
			$rows=mysqli_num_rows($result);
			if($rows>0){
				session_start();
				$_SESSION["index_user"]=$username;
				echo "<script>window.location.href='index.php'</script>";
			}else{
				echo "<script>alert('您使用的是管理员用户，请更换至普通用户!');</script>";
				echo "<script>window.location.href='login.php'</script>";
			}
			break;
		}
		
		
	}
?>