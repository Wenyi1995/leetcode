<?php


function uniquePaths($m, $n) {
    if($m<=0||$n<=0){
        return 0;
    }
    $d = [];
    for($i=0;$i<$m;$i++){
        $d[$i][0] = 1;
    }
    for($i=0;$i<$n;$i++){
        $d[0][$i] = 1;
    }
    for ($i = 1; $i < $m; $i++) {
        for ($j = 1; $j < $n; $j++) {
            $d[$i][$j] = $d[$i-1][$j] + $d[$i][$j-1];
        }
    }

    return $d[$m-1][$n-1];
}
$s = microtime(true);
var_dump(uniquePaths(3,7));   //28
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
