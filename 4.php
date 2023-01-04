<?php
function blueOcean($arr, $find)
{

    $arr_result = [];
    foreach ($find as $keys => $value) {
        if (($key = array_search($value, $arr)) !== false) {
            unset($arr[$key]);
            if (in_array($value, $arr)) {
                return blueOcean($arr, [$value]);
            }
        }
    }
    return $arr;
}

echo "<pre>";
$arr = [1, 2, 3, 4, 6, 10];
print_r(blueOcean($arr, [1]));

$arr = [1, 5, 5, 5, 5, 3];
print_r(blueOcean($arr, [5]));
echo "</pre>";
