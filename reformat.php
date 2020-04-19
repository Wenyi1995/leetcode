<?php
function reformat($s)
{
    $num = [];
    $str = [];
    for ($i = 0; $i < strlen($s); $i++) {
        if (is_numeric($s[$i])) {
            $num[] = $s[$i];
        } else {
            $str[] = $s[$i];
        }
    }
    $nc = count($num);
    var_dump($nc);
    $sc = count($str);
    var_dump($sc);

    $re = '';
    if ($nc == $sc) {
        $st = $num;
        $se = $str;
    } elseif ($nc == $sc - 1) {
        $st = $str;
        $se = $num;

    } elseif ($nc - 1 == $sc) {
        $st = $num;
        $se = $str;
    } else {
        return '';
    }

    for ($i = 0; $i < strlen($s); $i++) {
        if($i%2==0){
            $re.=array_shift($st);
        }else{
            $re.=array_shift($se);
        }
    }
    return $re;

}


$s = microtime(true);
var_dump(reformat('a0b1c2'));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
