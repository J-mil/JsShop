<?php
//Join
$msg = isset($_SESSION['msg'])?$_SESSION['msg']:null;
?>
<form name="member_form" method="post" action="../controller/mainCTL.php">
    <input type="hidden" name="action" value=81>
    <div id="form_join">
        <h2>회원가입</h2>
        <hr>
        <table>
            <tr>
                <td colspan="3" align="right" style="font-size: small; color: red;">
                    * 는 필수 입력항목 입니다.
                </td>
            </tr>
            <tr>
                <td id="join1">* 아이디</td>
                <td id="join2"><input type="text" name="id"></td>
                <td id="join3">
                    <a href="#"><button class="btn" type="button"
                                        onclick="check_id()">중복확인</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td id="join1">* 비밀번호</td>
                <td colspan="2" id="join2"><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td id="join1">* 비밀번호 확인</td>
                <td colspan="2" id="join2"><input type="password" name="pass_confirm"></td>
            </tr>
            <tr>
                <td id="join1">* 이름</td>
                <td colspan="2" id="join2"><input type="text" name="name"></td>
            </tr>
            <tr>
                <td id="join1">* 닉네임</td>
                <td id="join2"><input type="text" name="nick"></td>
                <td id="join3">
                    <a href="#"><button class="btn" type="button"
                                        onclick="check_nick()">중복확인</button>
                    </a>
                </td>
            </tr><tr>
                <td id="join1">&nbsp;&nbsp;이메일</td>
                <td colspan="2" id="join2">
                    <input type="email" name="email" value="id@mail.com" onfocus='this.select()'>
                    <!--내용 전체 선택 : onfocus='this.select()'-->
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <a class="btn" onclick="check_input()">회원가입</a>
                    <button class="btn" type="reset">다시쓰기</button>
                </td>
            </tr>
            <tr><?=$msg?></tr>
        </table>
    </div>
</form>
