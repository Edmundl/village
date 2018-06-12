<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u601.png"/>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from house where user in (select name from user where username='$username')";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
            if($row>0){
?>
                    <div class="conone">
                        <div class="cononetext">户主:<span><?php echo $row[user] ?></span></div>
                        <div class="cononetext">占地面积:<span><?php echo $row[area] ?>平方米</span></div>
                        <div class="cononetext">土地所属:<span><?php echo $row[power] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">联系方式:<span><?php echo $row[tel] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">地理位置:<span><?php echo $row[place] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/u600.jpg"/>
                    </div>
<?php
            }
            else{
?>
                <div class="contwo">
                    您还尚未达到参保年龄!
                </div>
<?php
            }
        }
?>
                </div>
<?php
    include 'framebottom.php';
?>