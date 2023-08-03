<?php
include "21Lib.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="21memoProc.php">


    이름 : <input type="text" name="name" size=10> <br>
    메모 : <input type="text" name="memo" size=50> <br>
    <input type="submit" value="저장">

    </form>

<?
    $query = "select * from memo order by idx desc limit 5";

    $result = mysqli_query($connect, $query);

    //print_r($result);


?>

<table border=1>
    <tr>
        <th>idx</th>
        <th>이름</th>
        <th>메모</th>
        <th>등록일</th>
    </tr>
<?
    while($data = mysqli_fetch_array($result)){
?>

    <tr>
        <td><?=$data[idx]?></td>
        <td><?=$data[name]?></td>
        <td><?=$data[memo]?></td>
        <td><?=$data[regdate]?></td>
    </tr>

<?
    }
?>
</table>
</body>
</html>