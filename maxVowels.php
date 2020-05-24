<?php

function maxVowels(string $s, int $k)
{
    $len = strlen($s);
    $vArr = ['a', 'e', 'i', 'o', 'u'];
    $re = 0;
    for ($i = 0; $i + $k <= $len; $i++) {
        if ($i == 0 || in_array($s[$i], $vArr) || in_array($s[$i + $k - 1], $vArr)) {
            $thisStr = substr($s, $i, $k);
            $thisRe = 0;
            foreach ($vArr as $v) {
                $thisRe += substr_count($thisStr, $v);
            }
            $re = max($re, $thisRe);
        }
    }
    return $re;
}

$s = microtime(true);
var_dump(maxVowels('tryhard', 4));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';