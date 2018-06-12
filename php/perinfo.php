<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/1.png"/>
</div>
<div class="container-intro">
    <p>人口基本信息是村民管理系统最基础的功能，是村委会管理员管理村民户籍最基础的手段，是一套对个人信息进行保护的管理方法论，主要针对管理或使用个人信息的企业或组织，目的是保护个人隐私,本功能主要包括有登记和管理村民姓名、性别、民族、籍贯、身份证号、出生地、出生日期、婚姻状况、文化程度、迁入登记等基本信息。</p>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from popinfo where name in (select name from user where username='$username')";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
            if($row>0){
?>
                    <div class="conone">
                        <div class="cononetext">姓名:<span><?php echo $row[name] ?></span></div>
                        <div class="cononetext">性别:<span><?php echo $row[sex] ?></span></div>
                        <div class="cononetext">民族:<span><?php echo $row[nation] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">籍贯:<span><?php echo $row[jiguan] ?></span></div>
                        <div class="cononetext">出生日期:<span><?php echo $row[birthday] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">身份证号:<span><?php echo $row[idnum] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/perinfo.jpg"/>
                    </div>
<?php
            }
            else{
?>
                <div class="contwo">数据库没有此用户!</div>
<?php
            }
}
?>
</div>
<?php
    include 'framebottom.php';
?>