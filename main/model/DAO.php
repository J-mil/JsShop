<?php

define('IP_ADD', "localhost");
define('USER_ACCOUNT', "root");
define('USER_PASSWORD', "1234");
define('DB_NAME', "j_shop");

function db_con_sel(){

    $rsc_id = mysql_connect(IP_ADD, USER_ACCOUNT, USER_PASSWORD);
    mysql_select_db(DB_NAME, $rsc_id);

    return $rsc_id;
}

/*회원가입 정보 DB에 넣기*/
function insert_joinInfo($joinInfo){
    $rsc_id = db_con_sel();
    $date = date("Y-m-d h:i:s");

    $query = "INSERT INTO (user_id,user_pw,user_name,user_nick,user_email,user_regi) ";
    $query.= "VALUES('{$joinInfo['id']}','{$joinInfo['pw']}','{$joinInfo['name']}','{$joinInfo['nick']}','{$joinInfo['email']}','{$date}'));";

    $result = mysql_query($query, $rsc_id);
    return $result; //T:F
}

//로그인 체크
function login_check($log_info){
    $rsc_id = db_con_sel();
    //먼저 id값이 같은게 있는 지 없는지 체크하기, 그 반환값을 리턴
    $query = "select * from user_info where user_id='{$log_info['id']}'";

    $result = mysql_query($query,$rsc_id);
    if(!$rec = mysql_fetch_array($result)){
        //id불일치
        $notice['checkID'] = false;
    }else{//id일치
        $query .= "and user_pw='{$log_info['pw']}'";
        $result = mysql_query($query, $rsc_id);
        if(!$rec = mysql_fetch_array($result)) {
            //pw불일치
            $notice['checkID'] = true;
            $notice['checkPW'] = false;
        }else{//id+pw일치, 회원정보가져오기
            $notice['checkID'] = true;
            $notice['checkPW'] = true;
            $notice['u_nick'] = $rec['user_nick'];
            $notice['u_id'] = $rec['user_id'];
            $notice['u_level'] = $rec['level'];
            $notice['u_name'] = $rec['user_name'];
            $notice['u_email'] = $rec['user_email'];
            $notice['u_regi'] = $rec['user_regi'];
        }
    }
    mysql_close();
    return $notice;
}
?>