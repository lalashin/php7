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
    $query = "select * from memo order by idx desc";

    $result = mysqli_query($connect, $query);

    //print_r($result);


?>

<table border=1>
    <tr>
        <th>idx</th>
        <th>이름</th>
        <th>메모</th>
        <th>등록일</th>
        <th>삭제</th>
        <th>수정</th>
    </tr>
<?
    while($data = mysqli_fetch_array($result)){
?>

    <tr>
        <td><?=$data[idx]?></td>
        <td><?=$data[name]?></td>
        <td><?=$data[memo]?></td>
        <td><?=$data[regdate]?></td>
        <td><a href="21del.php?idx=<?=$data[idx]?>" onclick="return confirm('정말 삭제할까요?');" >삭제</a></td>
        <td><a href="#" onclick="editData('<?=$data[idx]?>');">수정</a></td>
    </tr>

<?
    }
?>
</table>


<script>
function editData(idx){
    // alert(idx);
    var a = prompt('수정할 내용을 입력하세요.');
    location.href='21edit.php?idx='+idx+'&memo='+a;
    // alert(a);
}


</script>
</body>
</html>