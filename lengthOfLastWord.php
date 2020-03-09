<?php

function lengthOfLastWord($s)
{
    $strCount = 0;
    $strLen = strlen($s);
    if ($strLen == 0) {
        return 0;
    }
    for ($i = $strLen - 1; $i >= 0; $i--) {
        if ($s[$i] == ' ') {
            if($strCount > 0){
                break;
            }else{
                continue;
            }
        } else {
            $strCount++;
        }
    }

    return $strCount;

//    这个方法写法简单 效率不高
//    $s = trim($s);
//    return strlen(array_pop(explode(' ', $s)));
}

$input = "this day";

$s = microtime(true);
var_dump(lengthOfLastWord($input));
$n = microtime(true);
$use = ($n - $s) * 1000;
echo "用时" . $use . '毫秒';
