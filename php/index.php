<?php
    include 'frametop.php';
?>
<?php
	session_start();
?>
<link rel="stylesheet" type="text/css" href="../css/index.css?v=<?php $_VER=5;echo $_VER;?>">

<div class="container">
    <div class="slider">
        <div class="slider-img">
            <ul class="slider-img-ul">
                <li><img src="../images/slider-5.jpg"></li>
                <li><img src="../images/slider-1.jpg"></li>
                <li><img src="../images/slider-2.jpg"></li>
                <li><img src="../images/slider-3.jpg"></li>
                <li><img src="../images/slider-4.jpg"></li>
                <li><img src="../images/slider-5.jpg"></li>
                <li><img src="../images/slider-1.jpg"></li>
            </ul>
        </div>
    </div>
    <div class="container-title">
        村民管理系统简介
    </div>
    <div class="intro">
        <div class="introleft">
            <p>村民管理系统采用B/S（浏览器/服务器模式）架构，按照县（区）--乡（镇）-村三级分级管理，在县级城域网中心集中部署，数据同步到市级直城域网中心部署的服务器上。村级用户通过城域网访问村务管理系统，实现对本村事务的管理；村级以上用户通过网络登录系统可进行统计分析、以及数据上传等功能，并且提供非网络条件下的单机版，用于在网络基础条件差的村部署。村民管理系统涵盖了政务管理系统、信息公开平台两个方面，是致力于促进农村信息化发展，提高农村信息化水平，提高工作效率，拉近村民与政务的距离，帮助农村经济建设，为农村实现效益最大化，解决农村信息化问题的全方位信息化管理系统。</p>
            <p>随着信息化的不断加深，信息管理需求大大增加，农村信息化发展刻不容缓。社会主义新农村的建设，离不开农村信息化的发展。只有通过信息化建设，提高农民信息化意识，才能更好的建设新农村。农村的发展离不开科学技术的参与，离不开新信息化的推动。只有科技才能使农村经济更有效更便捷的与社会经济、市场经济完好的接轨。</p>
        </div>
        <div class="introright">
            <img src="../images/intro.jpg">
        </div>
    </div>
    <div class="tall cen" id="c">
        <div class="container-title">
            农村大讲堂
        </div>
        <div class="forum">
            <div class="forum-m1 forum-m1-right lbc">
                <div class="forum-text cen cor">
                    <div>水稻大讲堂</div>
                </div>
            </div>
            <div class="forum-m2"></div>
            <div class="forum-m1 forum-m1-left rbc">
                <div class="forum-text cen cor">
                    <div>种牛的喂养</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-title">
        落实科学发展观 创建和谐新农村
    </div>
    <div class="container-moudle">
        <div class="moudle-all moudle-blue bk1">
            <img src="../images/czbj.jpg"/>
        </div>
        <div class="moudle-all moudle-blue bk11" id="bk11">
            <div class="moudle-title">
                操作便捷
            </div>
            <div>
                <p>菜单简洁 页面清晰<br/>
                更加人性化的操作流程<br/>
                更加体贴的页面服务</p>
            </div>
        </div>
        <div class="moudle-all moudle-green bk2">
            <img src="../images/ysbh.jpg"/>
        </div>
        <div class="moudle-all moudle-green bk22" id="bk22">
            <div class="moudle-title">
                隐私保护
            </div>
            <div>
                <p>严格执行隐私保护措施<br/>
                TLS让你的隐私更加安全<br/>
                Cookie 和其他技术</p>
            </div>
        </div>
        <div class="moudle-all moudle-red bk3">
            <img src="../images/rgfw.jpg"/>
        </div>
        <div class="moudle-all moudle-red bk33" id="bk33">
            <div class="moudle-title">
                人工客服
            </div>
            <div>
                <p>专业真人在线客服<br/>
                响应时间 <10秒<br/>
                问题、咨询实时解答</p>
            </div>
        </div>
        <div class="moudle-all moudle-blueq bk4">
            <img src="../images/yjfk.jpg"/>
        </div>
        <div class="moudle-all moudle-blueq bk44" id="bk44">
            <div class="moudle-title">
                意见反馈
            </div>
            <div>
                <p>如果您对此系统有任何建议<br/>
                    请在发送意见到我们邮箱<br/>
                    我们会尽力改正我们的不足</p>
            </div>
        </div>
    </div>
</div>

<?php
    include 'framebottom.php';
?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/index.js?v=<?php $_VER=5;echo $_VER;?>"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>