<?php
/*
function quickSort($arr)
{
    if (count($arr) < 2){
        return $arr;
    }else{
        $less = [];
        $greater = [];
        $recursive_case = $arr[0];
        $arr2 = array_slice($arr, 1);
        foreach($arr2 as $item){
            if ($item <= $recursive_case){
                array_push($less, $item );
            }elseif ($item > $recursive_case){
                array_push($greater, $item );
            }
        }
        return array_merge(quickSort($less), [$recursive_case], quickSort($greater));
    }
}

print_r(quickSort([12, 7, 9, 16, 1, 2, 0, -1, 13]));
*/


function quickSort($arr)
{
    if (count($arr) < 2){
        return $arr;
    }else{
        $less = [];
        $greater = [];
        $recursive_case = $arr[0];
        for($i = 1; $i < count($arr); $i++){
            if ($arr[$i] <= $recursive_case){
                array_push($less, $arr[$i]);
            }elseif ($arr[$i] > $recursive_case){
                array_push($greater, $arr[$i]);
            }
        }
        return array_merge(quickSort($less), [$recursive_case], quickSort($greater));
    }
}

print_r(quickSort([12, 7, 9, 16, 1, 2, 0, -1, 13]));