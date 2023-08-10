<?

error_reporting(1);
ini_set("display_errors",1);

$isAdmin = $_COOKIE['isAdmin'];
if($isAdmin != 'OK'){
    echo "관리자만 접근 가능합니다.";
    exit;
}

echo $_COOKIE['isAdmin'];
?>

사용자 리스트<br>
1. 홍홍홍<br>
2. 신인숙<br>
3. 유재석<br>
4. 홍홍홍<br>
5. 김국현<br>
6. 홍길동<br>
7. 홍삼액기스<br>

<a href="logOut.php">로그아웃</a>
