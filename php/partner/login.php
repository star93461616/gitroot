<?
error_reporting(E_ALL ^ E_NOTICE);
require_once("../define.php");
require_once("../lib/db.php");
require_once("../lib/commonlib.php");
$db = new Query;
$cm = new CommonLib;
$cl = new CommonLib;
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on"){
	header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	exit;
}

if(($_SESSION["m_adminlv"] == 3) && ($_SESSION["m_id"]) ){
	echo $cm->proc_msg("관리자로 로그인 하셨습니다.",'','../admin/youtuber_list.php');
}else{
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=__DOMAIN?>/css/common_new.css">
    <link rel="stylesheet" href="<?=__DOMAIN?>/css/reset.css">
    <link rel="stylesheet" href="<?=__DOMAIN?>/css/adm_login.css">
    <title>유튜피아 파트너 로그인</title>
</head>
<body>

    <div class="inner">

        <h1> <img src="../images/gnb_logo_2023-02-22/gnb_logo.png" alt="유튜피아"> </h1>
        <div class="welcomeWrap flexcontainer">
            <div class="welL flexitem">
                <h2>유튜버 세상, <br>
                    유튜피아에 오신 것을 환영합니다.</h2>
                <img src="../images/login_img_2023-02-22/login_img.png" alt="유튜버 세상">
            </div>
            <div class="welR flexitem">
                <div><img src="../images/login_symbol_2023-02-22/login_symbol.png" alt="로그인로고"></div>
                <h2>로그인</h2>
					<FORM METHOD="POST"  class="tLog" ACTION="<? echo __COMMON ?>/login_out_exe.php" NAME="frm_login" TARGET="hiddenframe">
					<INPUT TYPE="hidden" NAME="type" VALUE="login">
					<INPUT TYPE="hidden" NAME="movepage" VALUE="<? echo __DOMAIN ?>/admin/youtuber_list.php">
					<iframe src="" width="100%" height="100" id="hiddenframe" name="hiddenframe" style="display:none;"></iframe>
                    <label for="id"></label>
                    <input type="text" id="" name="m_id" value="아이디 입력"><br><br>
                    <label for="pwd"></label>
                    <input type="password" id="" name="m_pw" value="비밀번호 입력"><br><br>
                    <input class="greenbtn" type="submit" value="로그인">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<? } ?>