<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/2.png"/>
</div>
<div class="container-intro">
    <p>人口职务详情管理中包含了用户的姓名，性别，年龄，手机号，在职单位，职务名称等主要信息。用户可以在人口职务详情管理界面中查看当前用户的的一系列主要信息，信息一目了然。</p>
</div>
<div class="container-info">
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from popwork where name in (select name from user where username='$username')";
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
                        <div class="cononetext">公司名称:<span><?php echo $row[company] ?></span></div>
                        <div class="cononetext">职务名称:<span><?php echo $row[position] ?></span></div>
                    </div>
                    <div class="conone conone-top">
                        <div class="cononetext">手机号:<span><?php echo $row[phone] ?></span></div>
                    </div>
                    <div class="con-img">
                        <img src="../images/perwork.jpg"/>
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