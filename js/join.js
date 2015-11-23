function check_id(){

}

function check_nick(){

}

function check_input(){
    if(!document.member_form.id.value){
        alert("아이디를 입력하세요");
        document.member_form.id.focus();
        //name값이 있으면 차례대로 들어감.
        //name=id의 위치는 document>member_form>id
        return;
    }

    if(!document.member_form.pass.value){
        alert("비밀번호를 입력하세요");
        document.member_form.pass.focus();
        return;
    }

    if(!document.member_form.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요");
        document.member_form.pass_confirm.focus();
        return;
    }

    if(!document.member_form.name.value){
        alert("이름을 입력하세요");
        document.member_form.name.focus();
        return;
    }

    if(!document.member_form.nick.value){
        alert("닉네임을 입력하세요");
        document.member_form.nick.focus();
        return;
    }

    if(!document.member_form.pass.value || !document.member_form.pass_confirm.value){
        alert("비밀번호가 일치하지 않습니다.\n 다시 입력해주십시오.");
        document.member_form.pass.focus();
        document.member_form.pass.select();
        return;
    }
    alert("회원가입이 완료되었습니다.");
    document.member_form.submit();
}
