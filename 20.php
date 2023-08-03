<?php

error_reporting(1);
ini_set("display_errors",1);

$connect = mysqli_connect("localhost","korea","korea1234","korea");

if(mysqli_connect_error()){
    echo "mysql접속 중 오류가 발생했습니다.<br>";
    echo mysqli_connect_error();
}
//print_r($connect);

$query = "select * from memo" ;

$result = mysqli_query($connect, $query);

// print_r($result);

// $a = mysqli_fetch_assoc($result);

// echo $a[a];
// echo $a[b];
// echo $a[c];
// echo $a[d];

// echo "<hr>";

// $a = mysqli_fetch_assoc($result);

// echo $a[a];
// echo $a[b];
// echo $a[c];
// echo $a[d];

?>


<table border=1>
    <tr>
        <th>a</th>
        <th>b</th>
        <th>c</th>
        <th>d</th>
    </tr>



<?
while($a = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>";

    echo $a[a];
    echo "</td>";
    echo "<td>";
    echo $a[b];
    echo "</td>";
    echo "<td>";
    echo $a[c];
    echo "</td>";
    echo "<td>";
    echo $a[d];
    echo "</td>";
    echo "</tr>";
}

?>


</table>
