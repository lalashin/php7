<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>배열</title>
</head>
<body>

<?
// $a = array(1,2,3);

$a[] = 1;
$a[] = 2;
$a[] = 3;
$a[] = 4;

$a[] = 1;
$a[] = 2;
$a[] = 3;
$a[] = 4;

$a[] = 1;
$a[] = 2;
$a[] = 3;
$a[] = 4;

// print_r($a);

// $b = count($a);
// for($i=0; $i < $b; $i++){
//     echo $a[$i];
//     echo "<br>";
// }

foreach($a as $key=> $b){
    echo $key;
    echo ":";
    echo $b;
    echo "<br>";
}

// echo $a[2];

?>

</body>
</html>