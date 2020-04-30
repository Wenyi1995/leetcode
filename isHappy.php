<?php


function isHappy($n)
{
    $num = 0;
    while ($n > 0) {
        $a = $n % 10;
        $num += $a * $a;
        $n = floor($n / 10);
    }
    if ($num == 4) return false;
    if ($num == 1) return true;
    return isHappy($num);

}

$s = microtime(true);
var_dump(isHappy(876));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
