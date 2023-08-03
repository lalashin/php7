<?php
include "21Lib.php";


$query = "insert into memo(name,memo,regdate)
            values('라라','안녕','2023-08-03 14:46:05')";
mysqli_query($connect, $query);