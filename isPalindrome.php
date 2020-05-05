<?php


function isPalindrome($s)
{
    preg_match_all('/[a-zA-Z0-9]+/', $s, $m);
    $s = implode('', $m[0]);
    $i = 0;
    $count = strlen($s);
    $flag = $count % 2 == 0;
    if ($count > 1) {
        $j = $count - 1;
        while (true) {
            if (strtolower($s[$i]) != strtolower($s[$j])) {
                return false;
            } else {
                if ($flag) {
                    if ($j == $i + 1) {
                        return true;
                    }
                } else {
                    if ($j == $i + 2) {
                        return true;
                    }
                }
                if ($i >= $j) {
                    return false;
                } else {
                    $i++;
                    $j--;
                }
            }
        }
    } else {
        return true;
    }
}

$s = microtime(true);
var_dump(isPalindrome(""));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
