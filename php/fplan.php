<?php
	session_start();
?>
<?php
    include 'frametop.php';
?>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../css/displaydata.css?v=<?php $_VER=2;echo $_VER;?>" />

<div class="container-title">
    <img src="../images/u297.png"/>
</div>
<div class="container-info">
    <div class='resultdiv'>
<?php
    $link=mysqli_connect('localhost','root','root','village');
	mysqli_query($link,"set names utf8");
	if(!$link){
		die('链接失败!'.mysql_error());
	}else{
        $username=$_SESSION["index_user"];
        $sql="select * from jisheng where name in (select name from user where username='$username')";
        if($result=mysqli_query($link,$sql)){
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    echo "<div class='result'>";
                    echo "<div class='re-name'>$row[name]</div>";
                    echo "<div class='stateleft'>审核状态</div>";
                    if($row[state]=='审核失败'){
                        echo "<div class='stateright red'>$row[state]</div>";
                    }else if($row[state]=='审核成功'){
                        echo "<div class='stateright green'>$row[state]</div>";
                    }else{
                        echo "<div class='stateright'>$row[state]</div>";
                    }
                    echo "<div class='btn'><input type='button' onclick=window.location.href='fplanwatch.php?id=$row[id]' value='查看'/><input type='button' onclick=window.location.href='fplanAction.php?id=$row[id]&action=delete' value='取消申请'/></div>";
                    echo "</div>";
                }
                echo "</div>";
                echo "<div class='contwo'>";
                echo "<input type='button' onclick=window.location.href='fplaninsert.php' class='appl' value='申请'/>";
                echo "</div>";
            }
            else{
?>
                <div class="contwo">
                    您还尚未申请计生!</br>
                    <input type="button" onclick="window.location.href='fplaninsert.php'" class="appl" value="申请"></input>
                </div>
<?php
             }
        }
    }
?>
    </div>
</div>
<?php
    include 'framebottom.php';
?>