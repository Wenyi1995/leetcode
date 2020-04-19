<?php


function processQueries($queries, $m)
{
    for ($i = 1; $i <= $m; $i++) {
        $arr[] = $i;
    }
    while ($v = array_shift($queries)) {
        $re[] = $k = array_keys($arr, $v)[0];
        $n = $arr[$k];
        array_splice($arr, $k, 1);
        array_unshift($arr, $n);
    }
    return $re;

}

$s = microtime(true);
var_dump(processQueries([3, 1, 2, 1], 5));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
