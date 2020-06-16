<?php


function addBinary($a, $b)
{
    $len = max(strlen($a), strlen($b));
    $a = strrev($a);
    $b = strrev($b);
    $isCarry = false;
    $carry = '';
    $return = '';

    for ($i = 0; $i < $len; $i++) {
        $add = $a[$i] == '' ? '0' : $a[$i];
        $bdd = $b[$i] == '' ? '0' : $b[$i];
        if ($add == $bdd) {
            $return = '0' . $return;
            if ($bdd == '1') {
                $isCarry = true;
                $carry = '1' . $carry;
            } else {
                $carry = '0' . $carry;
            }
        } else {
            $return = '1' . $return;
            $carry = '0' . $carry;
        }
    }
    if ($isCarry) {
        return addBinary($return, $carry . '0');
    } else {
        return $return == '0'?'0':ltrim($return, '0');
    }

}

$s = microtime(true);
var_dump(addBinary('101', '0'));   //110
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
