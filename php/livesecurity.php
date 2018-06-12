<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u560.png"/>
</div>
<div class="container-intro">
    <p>最低生活保障，是指国家对家庭人均收入低于当地政府公告的最低生活标准的人口给予一定现金资助，以保证该家庭成员基本生活所需的社会保障制度
    。对达到低保线的人口给予相应补助以保证其基本生活的做法。</p>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from baozhang where name in (select name from user where username='$username')";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
            if($row>0){
?>
                    <div class="conone">
                        <div class="cononetext">姓名:<span><?php echo $row[name] ?></span></div>
                        <div class="cononetext">每月最低金额:<span><?php echo $row[minmoney] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">身份证号:<span><?php echo $row[idnum] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">家庭住址:<span><?php echo $row[address] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/u562.jpg"/>
                    </div>
<?php
            }
            else{
?>
                <div class="contwo">
                    您的工资水平已达到标准!
                </div>
<?php
            }
        }
?>
                </div>
<?php
    include 'framebottom.php';
?>