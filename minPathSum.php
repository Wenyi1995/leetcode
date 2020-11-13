<?php


function minPathSum($grid) {
    $m = count($grid);
    $n = count($grid[0]);
    if($m<=0||$n<=0){
        return 0;
    }
    $dp = [];
    for($i=0;$i<$m;$i++){
        $dp[$i][0] = $dp[$i-1][0]+$grid[$i][0];
    }
    for($i=0;$i<$n;$i++){
        $dp[0][$i] = $dp[0][$i-1]+$grid[0][$i];
    }
    for($i=1;$i<$m;$i++){
        for($j=1;$j<$n;$j++){
            $dp[$i][$j] = min($dp[$i-1][$j],$dp[$i][$j-1])+$grid[$i][$j];
        }
    }

    return $dp[$m-1][$n-1];
}
$s = microtime(true);
var_dump(minPathSum([[1,3,1],[1,5,1],[4,2,1]]));
$n = microtime(true);
echo "用时" . ($n - $s) * 1000 . '毫秒';
