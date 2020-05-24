<?php

function isPrefixOfWord($sentence, $searchWord)
{
    if($searchWord == ''){
        return -1;
    }
    $len = strlen($searchWord);
    $arr = explode(' ', $sentence);
    $re = false;
    foreach ($arr as $k => $item) {
        if (strlen($item) < $len) {
            continue;
        } else {
            if (substr($item, 0, $len) == $searchWord) {
                $re = $k + 1;
                break;
            }
        }
    }
    $re || $re = -1;
    return $re;
}

$s = microtime(true);
var_dump(isPrefixOfWord('hello from the other side', 'they'));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';