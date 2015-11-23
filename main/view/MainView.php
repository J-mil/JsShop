<?php //header
session_start();

// 로그인, 유저레벨(관리자 여부 등) 정보
$loginID = isset($_SESSION['loginID'])?$_SESSION['loginID']:null;
$u_Level = isset($_SESSION['u_Level'])?$_SESSION['u_Level']:null;

$action = isset($_REQUEST['action'])?$_REQUEST['action']:0;

$mainMenuShortNum = intval($action/100);
$subMenuShortNum = intval($action%100);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>J's Tea Cafe</title>
    <link type="text/css" rel="stylesheet" href="../../css/mainStyle.css">
    <script src="../../js/join.js"></script>
</head>
<body>
<!--상단-->
    <div class="mainBody">
        <!--좌측-->
        <!--<div class="leftSide"><?php /*include_once './LeftSide.php'; */?></div>-->
        <!--중앙부분: 컨텐츠(좌/중/우)-->
        <div class="middle">
            <!--헤더:Title, MainMenu, SubMenu-->
            <div id="header">
                <div id="title"><?php include_once './Title.php'; ?></div>
                <!--level에 따라 사용자구분(admin/general)-->
                <div id="mainMenu">
                    <?php
                    if($u_Level == 999)
                        include_once './AdminMainMenu.php';
                    else
                        include_once './MainMenu.php';
                    ?>
                </div>
                <div id="subMenu">
                    <?php
                    if($u_Level == 999)
                        include_once './AdminSubMenu.php';
                    else
                        include_once './SubMenu.php';
                    ?>
                </div>
            </div>
            <!--중앙: Body-->
            <div id="body"><?php include_once './MainBody.php'; ?></div>
        </div>
        <!--우측: Login/out, MyPage-->
        <div class="rightSide"><?php include_once './RightSide.php'; ?></div>
    </div>

<!--하단: CopyRight, ShopInfo-->
    <div class="footer">
        COPYRIGHTⓒ 2015 jmil
    </div>
</body>
</html>