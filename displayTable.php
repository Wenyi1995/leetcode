<?php

function displayTable($orders)
{
    $index = ['Table' => 0];
    $order = [];
    $i = 1;
    $indexindex = [];
    foreach ($orders as $v) {
        if (isset($indexindex[$v[2]])) {
            continue;
        } else {
            $indexindex[$v[2]] = $i;
            $i++;
        }
    }
    ksort($indexindex);
    $i = 1;
    foreach ($indexindex as $k => $item){
        $index[$k] = $i;
        $i++;
    }

    foreach ($orders as $v) {
        $v[1] = (int)$v[1];
        if (!isset($order[$v[1]])) {
            $order[$v[1]] = [(string)$v[1]];
            for ($j = 1; $j < $i; $j++) {
                array_push($order[$v[1]], '0');

            }
        }
        $order[$v[1]][$index[$v[2]]] = (string)((int)$order[$v[1]][$index[$v[2]]] + 1);
    }
    ksort($order);
    $index = array_flip($index);
    ksort($index);
    array_unshift($order, $index);
    return $order;
}

$s = microtime(true);
print_r(displayTable([["David", "3", "Ceviche"], ["Corina", "10", "Beef Burrito"], ["David", "3", "Fried Chicken"], ["Carla", "5", "Water"], ["Carla", "5", "Ceviche"], ["Rous", "3", "Ceviche"]]));
$n = microtime(true);
$use = ($n - $s) * 1000;
echo "用时" . $use . '毫秒';
