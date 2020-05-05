<?php


function isPowerOfThree($n)
{
    if($n>0) {
        $convert = base_convert($n, 10, 3);
        if (str_replace('0', '', $convert) == '1') {
            return true;
        }
    }
    return false;

}

$s = microtime(true);
var_dump(isPowerOfThree(-3));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
