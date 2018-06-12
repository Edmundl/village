<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/Mframe.css?v=<?php $_VER=15;echo $_VER;?>">
</head>
<body>
<div class="left">
    <ul class="ulone">
        <li><a href="userM.php">用户表</a></li>
        <li id="pop">人口管理
            <div class="user-block">
                <ul>
                    <li><a href="perinfoM.php">人口基本信息管理</a></li>
                    <li><a href="perworkM.php">人口职务详情管理</a></li>
                    <li><a href="pereduM.php">人口教育详情管理</a></li>
                </ul>
            </div>
        </li>
        <li><a href="fplanM.php">计生管理</a></li>
        <li id="ser">社保管理
            <div class="user-block">
                <ul>
                    <li><a href="insuranceM.php">养老保险</a></li>
                    <li><a href="lifeM.php">最低生活保障</a></li>
                </ul>
            </div>
        </li>
        <li id="resource">资源管理
            <div class="user-block">
                <ul>
                    <li><a href="houseM.php">住房管理</a></li>
                    <li><a href="landM.php">土地管理</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="right-top">
    <div class="top-left">
        <span>欢迎管理员<?php echo $_SESSION["manager_user"] ?>已成功登录,请操作!</span>
    </div>
    <div class="top-right">
        <a href="../php/login.php" title="点击此处退出登录"><img src="../images/mimg.png"/></a>
    </div>
</div>
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/frame.js"></script>
</body>
</html>