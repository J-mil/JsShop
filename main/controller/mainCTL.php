<?php
//include_once '../model/DAO.php';
session_start();

$loginID = isset($_SESSION['loginID'])?$_SESSION['loginID']:null;
$u_Level = isset($_SESSION['u_Level'])?$_SESSION['u_Level']:null;

$action = isset($_REQUEST['action'])?$_REQUEST['action']:0;

$mainMenuShortNum = intval($action/100);

switch($mainMenuShortNum){
    case 0://Home 및 Join, Login/out, MyPage
           include_once 'TopCTL.php';
           topCTL($action);
        break;
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        include_once 'productCTL.php';
        productCTL($action);
        break;
    case 9:
        include_once 'AdminCTL.php';
        adminCTL($action);
        break;
    default:
        break;
}
header("location:../view/MainView.php?action=$action");
?>