<?php

function angleClock($hour, $minutes)
{
    $oneHour = 30;
    $onemin = 6;
    $oneMinHor = 0.5;

    $h = $oneHour*$hour+$oneMinHor*$minutes;
    $m = $minutes*$onemin;
    $diff = abs($h-$m);
    return min($diff, 360 - $diff);
}

$s = microtime(true);
var_dump(angleClock(1,57));
$n = microtime(true);
$use = ($n - $s) * 1000;
echo "用时" . $use . '毫秒';

