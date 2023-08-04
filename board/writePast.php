<?php

    include "lib.php";

// print_r($_POST);
$name = $_POST['name'];
$idx = $_POST['idx'];
$subject = $_POST['subject'];
$memo = $_POST['memo'];

//해킹방지
$name = mysqli_real_escape_string($connect, $name);
$idx = mysqli_real_escape_string($connect, $idx);
$subject = mysqli_real_escape_string($connect, $subject);
$memo = mysqli_real_escape_string($connect, $memo);

if($idx){

    $query ="update sin_board
            set name='$name',
            subject ='$subject',
            memo = '$memo'
            where idx='$idx'
            ";



}else {

    $regdate = date("Y-m-d H:i:s");
$ip = $_SERVER[REMOTE_ADDR];

$query ="insert into sin_board(name, subject, memo, regdate, ip)
        values('$name','$subject','$memo','$regdate','$ip')";



}




mysqli_query($connect, $query);
// echo $query;

?>

<script>
    location.href='list.php'
</script>