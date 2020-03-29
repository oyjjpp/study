<?php
function quickSort($array) {
    if (count($array) <= 1) return $array;

    $key = $array[0];
    $leftData = array();
    $rightData = array();
    for ($i=1; $i<count($array); $i++){
        if ($array[$i] <= $key)
            $leftData[] = $array[$i];
        else
            $rightData[] = $array[$i];
    }
    $leftData = quickSort($leftData);
    $rightData = quickSort($rightData);
    return array_merge($leftData, array($key), $rightData);
}

$data = array(12,12,4,6,13,567);
$rs = quickSort($data);
var_dump($rs);