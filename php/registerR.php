<meta charset="utf-8">
<?php
	$link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$spassword=$_POST['spassword'];
		$uname=$_POST['uname'];
		$sel="select username from village.user where username='$username'";
		$res=mysqli_query($link,$sel);
		if(mysqli_num_rows($res)>0){
			echo "<script>alert('用户名已存在！请更换您的用户名！');</script>";
			echo "<script>window.location.href='register.php'</script>";
		}else{
			if($password==$spassword){
				$sql="insert into user(username,password,identity,name) values ('$username','$password','2','$uname')";
				$result=mysqli_query($link,$sql);
				if($result){
					echo "<script>alert('注册成功!');</script>";
					echo "<script>window.location.href='login.php'</script>";
				}else{
					echo "rigister faild!";
				}
			}else{
				echo "<script>alert('您输入的密码与确认密码不一致!');</script>";
				echo "<script>window.location.href='register.php'</script>";
			}
		}
	}
?>