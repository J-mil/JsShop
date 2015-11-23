<?php
/*로그인, 로그아웃, 회원가입, 마이페이지 100이하*/

include_once '../model/DAO.php';

function topCTL($action){

    switch($action){
        case 0://HomeView
            header("location:../view/MainView.php?action=$action");
            break;

        case 10://Home-intro
            header("location:../view/MainView.php?action=$action");
            break;

        case 80://join view
            unset($_SESSION['msg']);
            header("location:../view/MainView.php?action=$action");
            break;

        case 81://insert join 처리
            $user_info['u_id'] = isset($_POST['id'])?$_POST['id']:null;
            $user_info['u_pw'] = isset($_POST['pass'])?$_POST['pass']:null;
            $user_info['u_name'] = isset($_POST['name'])?$_POST['name']:null;
            $user_info['u_nick'] = isset($_POST['nick'])?$_POST['nick']:null;
            $user_info['u_email'] = isset($_POST['email'])?$_POST['email']:null;

            $result = insert_joinInfo($user_info);
            if($result) {
                $msg = "회원가입이 정상적으로 처리되었습니다.";
                $action = 0;
                //move start_View
            }else {
                $msg = "회원가입이 정상적으로 처리되지 않았습니다.";
                $action = 80;
            }
            $_SESSION['msg'] = $msg;
            die(var_dump($msg));
            header("location:../view/MainView.php?action=$action");
            break;

        case 85://myPage view
            header("location:../view/MainView.php?action=$action");
            break;

        case 90://login view
            header("location:../view/MainView.php?action=$action");
            break;

        case 91://check login 처리
            $login_info['id'] = isset($_POST['inputID'])?$_POST['inputID']:null;
            $login_info['pw'] = isset($_POST['inputPW'])?$_POST['inputPW']:null;

            $user_info=login_check($login_info); //성공이면, user정보가지고 있음

            if(!$user_info['checkID']){//실패
                $msg = "아이디가 일치하지 않습니다.<br>다시 입력해주십시오.";
                $action=90;
                //id불일치 알림(view), 다시 id란으로 이동
            }else if(!$user_info['checkPW']){
                //pw불일치 알림(view)
                $msg = "패스워드가 일치하지 않습니다.<br>다시 입력해주십시오.";
                $action=90;
                $_SESSION['login_check']=false;
            }else{//id+pw 일치, u_nick, u_level 세션저장
                $_SESSION['login_check']=true;
                $_SESSION['user_info']=$user_info;
                $action=0;
            }
            $_SESSION['msg'] = $msg;
            header("location:../view/MainView.php?action=$action");
            break;

        case 92://logout
            session_destroy();
            header("location:../view/MainView.php?action=$action");
            break;

        default :
            header("location:../view/MainView.php?action=$action");
            break;
    }
}

?>