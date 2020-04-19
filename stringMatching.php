<?php
function stringMatching($words)
{
    $re = [];
    while ($v = array_shift($words)) {
        foreach ($words as $item) {
            if (strstr($v, $item)) {
                $re[] = $item;
            }
            if (strstr($item, $v)) {
                $re[] = $v;
            }
        }
    }
    return array_unique($re);
}

$s = microtime(true);
var_dump(stringMatching(["blue","green","bu"]));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
