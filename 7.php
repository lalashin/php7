<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>외부파일을 배열로 읽어오기 및 explode 함수 사용</title>
</head>
<body>
<?
 $list = file("7.txt");
//  print_r($list);
// $tmp = "안녕,하세요. 저는, lala,입니다.";
// $str = explode(" ",$tmp);
// print_r($str);
?>
<table border="1">
    <tr>
        <th>이름</th>
        <th>제목</th>
        <th>내용</th>
    </tr>
    <? foreach($list as $d){
         $str = explode(",",$d);
        ?>
    <tr>
        <td><?=$str[0];?></td>
        <td><?=$str[1];?></td>
        <td><?=$str[2];?></td>
    </tr>
    <?}?>
</table>

</body>
</html>