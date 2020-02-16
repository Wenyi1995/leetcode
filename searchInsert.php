<?php

function searchInsert($nums, $target)
{
    if (in_array($target, $nums)) {
        return array_flip($nums)[$target];
    } else {
        $index = 0;
        foreach ($nums as $index => $num) {
            if ($num >= $target) {
                return $index;
            }
        }
        return $index + 1;
    }
}

$n = [1, 3, 6];
$t = 7;

$s = microtime(true);
var_dump(searchInsert($n, $t));
$n = microtime(true);
$use = ($n - $s) * 1000;
echo "用时" . $use . '毫秒';
