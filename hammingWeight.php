<?php

/**
 * 1的数量
 * @param $n
 * @return int
 */
function hammingWeight($n)
{
    $re = 0;
    while ($n > 0) {
        if ($n % 2 != 0) {
            $re++;
        }
        $n = $n >> 1;
    }
    return $re;
}

$s = microtime(true);
var_dump(hammingWeight(bindec('000000000001010010000100010001011')));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
