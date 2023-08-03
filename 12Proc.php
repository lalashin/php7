<?php

// $_REQUEST['test']
// Array
// (
//     [name] => 230802_형사법 최신판례특강 팝업 추가.pptx
//     [type] => application/vnd.openxmlformats-officedocument.presentationml.presentation
//     [tmp_name] => C:\xampp\tmp\php7642.tmp
//     [error] => 0
//     [size] => 1085450
// )

// echo $_FILES['test']['name'];


//move_uploaded_file( $_FILES['test']['tmp_name'],"./data/a.pptx");
//move_uploaded_file( $_FILES['test']['tmp_name'],"./data/".$_FILES['test']['name']);

$fn = date("YmdHis");
move_uploaded_file( $_FILES['test']['tmp_name'],"./data/".$fn);