<?php
$arr = explode(",",$_POST[arr]);

$pair = 0;
if (isset($arr[1])) {
    for ($i = 0; $i <= count($arr); $i++) {
        if ($arr[$i] == $arr[$i - 1]) {
            $pair++;
        }
    }
    echo "<p class='array-calculator_result'>количество последовательных пар = $pair</p>";
} else {
    echo "<p class='array-calculator_result'>Минимальная длина массива 2!</p>";
}
