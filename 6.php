<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다중배열</title>
</head>
<body>
<?
//  $a = array('asdf','456t','adfadfadf');
//  print_r($a);

// $a["subject"] = "안녕하세요";
// $a["memo"] = "동해물과 백두산이 마르고 닳도록";

// print_r($a);
// foreach($a as $key => $data){
//     echo "<br>";
//     echo $key;
//     echo ":";
//     echo $data;
// }

$list = array();

$data['name'] = "홍길동";
$data['subject'] = "문의드립니다.";
$data['memo'] = "너무나 덥다 더워";

$list[] = $data;

$data['name'] = "김하나";
$data['subject'] = "문의2222.";
$data['memo'] = "포이치는 언제부터 나왔지 초기엔 없었는데";

$list[] = $data;

$data['name'] = "김둘";
$data['subject'] = "33333333333.";
$data['memo'] = "포이치는 언제부터 나왔지 초기엔 없었는데";

$list[] = $data;


$data['name'] = "홍길동";
$data['subject'] = "문의드립니다.";
$data['memo'] = "너무나 덥다 더워";

$list[] = $data;

$data['name'] = "김하나";
$data['subject'] = "문의2222.";
$data['memo'] = "포이치는 언제부터 나왔지 초기엔 없었는데";

$list[] = $data;

$data['name'] = "김둘";
$data['subject'] = "33333333333.";
$data['memo'] = "포이치는 언제부터 나왔지 초기엔 없었는데";

$list[] = $data;
//print_r($list);
?>

<table border="1">
    <tr>
        <th>이름</th>
        <th>제목</th>
        <th>내용</th>
    </tr>
    <?foreach($list as $d) {?>
    <tr>
        <td><?=$d['name'];?></td>
        <td><?=$d['subject'];?></td>
        <td><?=$d['memo'];?></td>
    </tr>
    <?}?>
</table>


<?
foreach($list as $d){
    echo $d['name'];
    echo $d['subject'];
    echo $d['memo'];
}


?>
</body>
</html>