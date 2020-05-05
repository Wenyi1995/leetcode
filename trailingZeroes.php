<?php


function trailingZeroes($n)
{
    $num = 5;
    $re = 0;
    while (true) {
        $i = (int)($n / $num);
        if ($i >= 1) {
            $re += $i;
            $num = $num * 5;
        } else {
            break;
        }
    }
    return $re;
}

$s = microtime(true);
var_dump(trailingZeroes(1000000));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
