<?php
//사용자 정의 함수
echo "동해물과 백두산";



$a = 123456;
$b = multi($a);
$c = number_format($b);

echo $c;
$z = loopPart();
echo $z;
function multi($x){
    $y = $x * 100;
    return $y;

}

function loopPart(){

    return "<div>무궁화~~~~~</div>";

}

