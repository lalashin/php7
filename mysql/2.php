<?php

include "dbClass.php";

$data = array('신라라','메모입니다.',date("Y-m-d-H:i:s"));

$insert = $db->query('INSERT INTO memo (name,memo,regdate) VALUES (?,?,?)', $data);
echo $db->lastInsertID();
$db->close(); //페이지마다 다 넣어줘야된다.//쾌적한 서버를 사용하게해준다.