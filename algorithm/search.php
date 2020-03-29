<?php
/**
 * @desc 二分查找
 */
function binSch($array, $low, $high, $k){
    if ($low <= $high){
        $mid = intval(($low+$high)/2);
        if ($array[$mid] == $k){
            return $mid;
        }elseif ($k < $array[$mid]){
            return binSch($array, $low, $mid-1, $k);
        }else{
            return binSch($array, $mid+1, $high, $k);
        }
    }
    return -1;
}

/**
 * @顺序查找
 */
function seqSch($array, $n, $k){
    $array[$n] = $k;
    for($i=0; $i<$n; $i++){
        if($array[$i]==$k){
            break;
        }
    }
    if ($i<$n){
        return $i;
    }else{
        return -1;
    }
}