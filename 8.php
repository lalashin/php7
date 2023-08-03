<?
// $fp = fopen("8.txt","a");

// fwrite($fp,"갑자기왜그러는걸까?\r\n");

// fclose($fp);

$fp = fopen("8.txt","r");

$a = fread($fp,1000);

echo $a;

fclose($fp);



?>
1. 파일을 연다.
2. 파일을 사용한다.
3. 파일을 닫는다.