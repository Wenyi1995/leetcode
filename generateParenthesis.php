<?php

class Solution
{
    public $ansList = [];

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n)
    {
        $this->backtrack("", 0, 0, $n);
        return $this->ansList;
    }

    function backtrack($ans, $open, $close, $n)
    {
        if ($open == $n && $close == $n) {
            $this->ansList[] = $ans;
            return;
        }
        if ($open < $n) {
            $this->backtrack($ans . "(", $open + 1, $close, $n);
        }
        if ($close < $open) {
            $this->backtrack($ans . ")", $open, $close + 1, $n);
        }
    }

}

$n = 2;
$c = new Solution();
var_dump($c->generateParenthesis($n));