<?php
//cookie 는 보안이 떨어져서 간단한 저장 기능을 할때 사용
////같은 아이피일때 조회수 1회 올릴때
////오늘 한번만 카운트 증가 시킬 때

include "lib.php";
session_start();

error_reporting(1);
ini_set("display_errors",1);

$isLogin  = $_SESSION['isLogin'];

if(!$isLogin){
?>

로그인 후 이용해 주세요.<br>
<a href="login.php">로그인</a>

<?
}else{
?>
반갑습니다. <?=$isLogin?> 님 <a href="logOut.php">로그아웃</a>
<?
}
?>
