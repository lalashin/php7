<?php

error_reporting(1);
ini_set("display_errors",1);

$connect = mysqli_connect("localhost","korea","korea1234","korea");

if(mysqli_connect_error()){
    echo "mysql접속 중 오류가 발생했습니다.<br>";
    echo mysqli_connect_error();
}