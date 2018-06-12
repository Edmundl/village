<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/fplaninsert.css?v=<?php $_VER=6;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u297.png"/>
</div>
<div class="container-intro">
    <p>计划生育是一项基本国策，即有计划的生育。主要内容及目的是：提倡晚婚、晚育，少生、优生，从而有计划地控制人口。
    计划生育这一基本国策自制订以来，对中国的人口问题和发展问题的积极作用不可忽视。到21世纪初，中国的计划生育政策又做出了一些调整。
    由于20世纪80年代出生的第一批独生子女已经到达适婚年龄，在许多地区，特别是经济较为发达的地区，计划生育政策有一定程度的放松。</p>
</div>
<?php
	$link=mysqli_connect('localhost','root','root','village');
			mysqli_query($link,"set names utf8");
			if(!$link){
				die('链接失败!'.mysql_error());
			}else{
                $id=$_GET['id'];
                $sql="select * from jisheng where id=$id";
                $result=mysqli_query($link,$sql);
                $row=mysqli_fetch_assoc($result);
            }
?>
<div class="container-info">
<form action="fplanAction.php?action=insert" method="post">
    <div class="content">
        <div class="con">
            姓 名:<span><?php echo $row[name] ?></span>
        </div>
        <div class="con">
            性 别:<span><?php echo $row[sex] ?></span>
        </div>
        <div class="con">
            民 族:<span><?php echo $row[nation] ?></span>
        </div>
    </div>
    <div class="content">
        <div class="con">
            出生日期:<span><?php echo $row[birthday] ?></span>
        </div>
        <div class="con">
            身份证号:<span><?php echo $row[idnum] ?></span>
        </div>
        <div class="con">
            婚姻状况:<span><?php echo $row[marriage] ?></span>
        </div>
    </div>
    <div class="content">
        <div class="con">
            现有男孩:<span><?php echo $row[boy] ?></span>
        </div>
        <div class="con">
            现有女孩:<span><?php echo $row[girl] ?></span>
        </div>
        <div class="con">
            审核状态:<span><?php echo $row[state] ?></span>
        </div>
    </div>
    <div class="planpic">
        <div class="planpicleft">
            <input type="button" onclick="window.location.href='fplan.php'" value="返回"></input>
        </div>
        <div class="planpicright">
            <img src="../images/u378.jpg"/>
        </div>
    </div>
</form>
</div>
<?php
    include 'framebottom.php';
?>