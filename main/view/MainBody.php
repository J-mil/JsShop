<link type="text/css" rel="stylesheet" href="../../css/bodyStyle.css">
<?php
$mainMenuShortNum = intval($action/100);
//백의 자리수만 받음
$codeNum = $mainMenuShortNum * 100;
//action : 100~500 =>100(상품관리)
if( $codeNum >= 100 && $codeNum <=500 )
    $codeNum = 100;
//0, 900
include "./BodyPage/BodyPage".strval($codeNum).".php";

?>