<?php


function isPowerOfFour($n)
{
    if($n>0) {
        $convert = base_convert($n, 10, 4);
        var_dump($convert);
        if (str_replace('0', '', $convert) == '1') {
            return true;
        }
    }
    return false;

}

$s = microtime(true);
var_dump(isPowerOfFour(16));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
