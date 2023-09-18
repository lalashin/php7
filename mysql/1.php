<?php

include "dbclass.php";
?>
<table border=1>
    <tr>
        <th>이름</th>
        <th>메모</th>
        <th>작성일</th>
    </tr>


<?
//print_r($db);

$list = $db->query('SELECT * FROM memo order by regdate asc limit 3 ')->fetchAll();
foreach ($list as $memo) {
?>

<tr>
    <td><?=$memo['name'];?></td>
    <td><?=$memo['memo'];?></td>
    <td><?=$memo['regdate'];?></td>
</tr>




<?
}
?>

</table>

<?
$db->close();
?>