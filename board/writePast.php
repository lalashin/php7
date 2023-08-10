<?php

    include "lib.php";

// print_r($_POST);
$name = $_POST['name'];
$idx = $_POST['idx'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];
$pwd = $_POST['pwd'];

//해킹방지
$name = mysqli_real_escape_string($connect, $name);
$idx = mysqli_real_escape_string($connect, $idx);
$subject = mysqli_real_escape_string($connect, $subject);
$memo = mysqli_real_escape_string($connect, $memo);
$pwd = mysqli_real_escape_string($connect, $pwd);



if($idx){

    $query = "select * from sin_board where idx='$idx' and pwd=password('$pwd') ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    // print_r($data);
    // exit;

    if(!$data[idx]) {
        echo "
        <script>
        alert('비밀번호가 달라 수정이 불가능합니다.');
        history.back(1);
        </script>
        ";
        exit;
    }

    $query ="update sin_board
            set name='$name',
            subject ='$subject',
            memo = '$memo'
            where idx='$idx'
            ";



}else {

    $regdate = date("Y-m-d H:i:s");
$ip = $_SERVER[REMOTE_ADDR];

$query ="insert into sin_board(name, subject, memo, regdate, ip, pwd)
        values('$name','$subject','$memo','$regdate','$ip',password('$pwd'))";



}




mysqli_query($connect, $query);
// echo $query;

?>

<script>
    location.href='list.php'
</script>