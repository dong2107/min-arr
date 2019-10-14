<?php
$array = [9, 8, 7, 6, 5, 4, 3, 2, 1];
function minArr($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

echo minArr($array);
