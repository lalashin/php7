<?

$fp = fopen("memo.txt","a");
$now = date("Y-m-d H:i:s");//2023-11-03 17:11:40

$content = $_REQUEST['name']."////".$_REQUEST['email']."////".$_REQUEST['memo']."////".$now."\r\n";

// echo $content;

// print_r($_REQUEST);
fwrite($fp, $content);

?>

<script>
    location.href='memo.php'
</script>