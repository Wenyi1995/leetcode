<?php

function maximum69Number($num){

    $num = (string)$num;
    for($i=0;$i<strlen($num);$i++){
        if($num[$i] == '6'){
            $num[$i] = '9';
            break;
        }
    }
    return (int)$num;
}

$s = microtime(true);
var_dump(maximum69Number(69696));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';