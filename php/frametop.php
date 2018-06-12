<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/frame.css?v=<?php $_VER=12;echo $_VER;?>">
</head>
<body>
    <div class="head">
        <div class="headL">
            <div class="headImg">
                <a href="index.php"><img src="../images/u2.png" class="HImg" alt="点击此图片返回首页" title="点击此图片返回首页"/></a>
            </div>
            <div class="headtitle">村民管理系统</div>
        </div>
    <div class="headR">
<?php
                if(isset($_SESSION["index_user"])){
?>
            <div class="nav" id="perple">人口管理
                <div class="nav-per">
                    <div class="nav-p"><a href="perinfo.php">人口基本信息管理</a></div>
                    <div class="nav-p"><a href="perwork.php">人口职务详情管理</a></div>
                    <div class="nav-p"><a href="peredu.php">人口教育详情管理</a></div>
                </div>
            </div>
            <div class="nav"><a href="fplan.php">计生管理</a></div>
            <div class="nav"><a href="dang.php">党支部管理</a></div>
            <div class="nav" id="pub">公共咨询
                <div class="nav-per">
                    <div class="nav-p"><a href="zhian.php">治安管理</a></div>
                    <div class="nav-p"><a href="edu.php">教育咨询</a></div>
                </div>
            </div>
            <div class="nav" id="tss">社保管理
                <div class="nav-per">
                    <div class="nav-p"><a href="insurance.php">养老保险</a></div>
                    <div class="nav-p"><a href="livesecurity.php">最低生活保障</a></div>
                </div>
            </div>
            <div class="nav navlast" id="rouse">资源管理
                <div class="nav-per">
                    <div class="nav-p"><a href="house.php">住房管理</a></div>
                    <div class="nav-p"><a href="land.php">土地管理</a></div>
                </div>
            </div>
            <div class='head-login' id='head-login'>
                <a href='login.php'><?php echo $_SESSION['index_user']?></a>
            </div>
         
<?php
}else{
?>
            <div class="head-LZ" id="head-LZ"><a href="login.php">登陆</a>/<a href="register.php">注册</a></div>
<?php
    }
?>
        </div> 
    </div>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/frame.js"></script>
</body>
</html>