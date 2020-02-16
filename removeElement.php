<?php


function removeElement(&$nums, $val)
{
    for ($i=0;$i<count($nums);$i++){
        if($nums[$i] == $val){
            unset($nums[$i]);
        }
    }
}

$nums = [3, 2, 2, 3];
$val = 3;

removeElement($nums, $val);

var_dump($nums);