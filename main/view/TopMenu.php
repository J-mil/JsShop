<?php //100번 이하(1~9)
$userInfo = isset($_SESSION['user_info'])?$_SESSION['user_info']:null;
$loginCheck = isset($_SESSION['login_check'])?$_SESSION['login_check']:null;
//user_nick

if(!$loginCheck){//로그인 안했을 때, login/join?>
    <a href="../controller/mainCTL.php?action=90">Login</a>
    <a href="../controller/mainCTL.php?action=80">Join</a>
<?php
}else{//로그인 했을 때, logout/MyPage?>
    <a href="../controller/mainCTL.php?action=92">Logout</a>
    <a href="../controller/mainCTL.php?action=85">MyPage</a>
    <br>
    <a href="../controller/mainCTL.php?action=85" title="내 정보 보기"><?=$userInfo['u_nick']?></a>님 안녕하세요.<br>
    현재 등급은 <?=$userInfo['u_level']?>입니다.
<?php } //등급 선택시, 등급에따른 제한과 등업조건 보여주기(새창띄우기)
?>

