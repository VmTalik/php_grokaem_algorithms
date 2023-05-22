<?php
// Бинарный поиск. Ищется позиция элемента
$sorted_arr = [1, 2, 3, 4, 5];
function binary_search($arr, $item)
{
    $low = 0;
    $high = count($arr) - 1;
    //echo 'Максимальный индекс массива: '. $high . PHP_EOL;
    while ($low <= $high){
        $mid = (int)(($low + $high) / 2);
        //echo 'Индекс середины массива: ' . $mid . PHP_EOL;
        $guess = $arr[$mid];
        if ($item == $guess){
            return $mid;
        }elseif ($item < $guess){
            $high = $mid - 1;  
        }else {
            $low = $mid + 1;
        }
    }
    return null;
}

echo 'Индекс искомого элемента: ' . binary_search($sorted_arr, 1);