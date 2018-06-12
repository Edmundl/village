<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u521.png"/>
</div>
<div class="container-intro">
    <p>养老保险，全称社会基本养老保险，是国家和社会根据一定的法律和法规，为解决劳动者在达到国家规定的解除劳动义务的劳动年龄界限，或因年老丧失劳动能力退出劳动
    岗位后的基本生活而建立的一种社会保险制度。养老保险是社会保障制度的重要组成部分，是社会保险五大险种中最重要的险种之一。养老保险的目的是为保障老年人的基
    本生活需求，为其提供稳定可靠的生活来源。</p>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from baoxian where name in (select name from user where username='$username')";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
            if($row>0){
?>
                    <div class="conone">
                        <div class="cononetext">姓名:<span><?php echo $row[name] ?></span></div>
                        <div class="cononetext">性别:<span><?php echo $row[sex] ?></span></div>
                        <div class="cononetext">年龄:<span><?php echo $row[age] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">养老保险金额:<span><?php echo $row[money] ?></span></div>
                        <div class="cononetext">身份证号:<span><?php echo $row[idnum] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">家庭住址:<span><?php echo $row[address] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/u523.jpg"/>
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