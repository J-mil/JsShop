
<?php
//login
$msg = isset($_SESSION['msg'])?$_SESSION['msg']:null;
?>
<form action="../controller/mainCTL.php" method="post">
    <input type="hidden" name="action" value="91">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="inputID"  placeholder="아이디입력" value="test"></td>
        </tr>
        <tr>
            <td>PW</td>
            <td><input type="password" name="inputPW"  placeholder="패스워드입력" value="t1234"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="LOGIN" class="btn"></td>
        </tr>
        <tr>
            <td colspan="2"><?=$msg?></td>
        </tr>
    </table>
</form>
