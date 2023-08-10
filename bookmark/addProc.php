<?php
include "lib.php";



$memo = $_POST['memo'];
$memo = mysqli_real_escape_string($connect, $memo);

// print_r($memo);

$list = explode('\r\n', $memo);

foreach($list as $url){

    $url = trim($url);
    if(!$url) continue;

    echo "<li>";
    echo $url;

    $query = "select * from bookmark where url='$url'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    // print_r($data);
    // exit;

    if($data['idx']){
        echo "이미 추가된 URL입니다.";
        continue;
    }

    $qeury = "insert into bookmark (url, regdate) values('$url',now())";
    mysqli_query($connect, $qeury);


}
// echo $list[0];

Header("Location: index.php");