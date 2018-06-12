<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u642.png"/>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from land where relatpop in (select name from user where username='$username')";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
            if($row>0){
?>
                    <div class="conone">
                        <div class="cononetext">土地性质:<span><?php echo $row[nature] ?></span></div>
                        <div class="cononetext">用地项目名称:<span><?php echo $row[programname] ?></span></div>
                        <div class="cononetext">土地所属:<span><?php echo $row[relatpop] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">联系方式:<span><?php echo $row[relatphone] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">地理位置:<span><?php echo $row[programplace] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/u641.jpg"/>
                    </div>
<?php
            }
            else{
?>
                <div class="contwo">
                    您还没有承包任何土地!
                </div>
<?php
            }
        }
?>
                </div>
<?php
    include 'framebottom.php';
?>