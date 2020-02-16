<?php

function plusOne($digits)
{
    $arr = array_reverse($digits);
    $re = [];
    $carry = false;
    $i = 0;
    foreach ($arr as $v) {
        if ($i == 0) {
            $info = doPlus($v);
            $re[] = $info[0];
            $carry = $info[1];
            $i++;
        } else {
            if ($carry) {
                $info = doPlus($v);
                $re[] = $info[0];
                $carry = $info[1];
            } else {
                $re[] = $v;
            }
        }
    }
    if($carry){
        $re[] = 1;
    }
    return array_reverse($re);
}

function doPlus($i)
{
    $i++;
    $carry = false;
    if ($i > 9) {
        $i -= 10;
        $carry = true;
    }
    return [$i, $carry];
}

$digits = [1,9];
var_dump(plusOne($digits));