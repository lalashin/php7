<?
error_reporting(1);
ini_set("display_errors",1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
    <style>
       .item{width:14%; height: 100px; border:1px solid #aaa; float: left; margin-left:-1px; margin-bottom:-1px; text-align:right;}
       .week_txt{ height: 30px; text-align:center}
    </style>
</head>
<body>
<?
$year = $_GET['year'];
$month = $_GET['month'];
?>
<form action="calendar.php">
<div style="text-align:center;">
    <select name="year">
        <? for($i=2000; $i<=2025; $i++){?>
        <option value="<?=$i?>" <? if($year==$i) echo "selected"; ?>><?=$i?>년</option>
        <?}?>
    </select>

    <select name="month">
        <? for($i=1; $i<=12; $i++){?>
        <option value="<?=$i?>" <? if($month==$i) echo "selected"; ?>><?=$i?>월</option>
        <?}?>
    </select>
    <button type="submit">이동</button>
</div>
</form>


<?

$year = $_GET['year'];
$month = $_GET['month'];

if(!$year) $year = date("Y");
if(!$month) $month = date("m");

$tm = $year."-".$month."-01";


$a = strtotime($tm);

$blank = date("w", $a);
$days = date("t",$a);

// echo $days;


?>
<hr>
<div class="item week_txt">일</div>
<div class="item week_txt">월</div>
<div class="item week_txt">화</div>
<div class="item week_txt">수</div>
<div class="item week_txt">목</div>
<div class="item week_txt">금</div>
<div class="item week_txt">토</div>
<?
 for($i=0; $i<$blank; $i++){?>
<div class="item"></div>
<?
 }
?>
<?for($i=1; $i<=$days; $i++){?>

    <div class="item">
        <?=$i?>
    </div>

<?}?>

</body>
</html>