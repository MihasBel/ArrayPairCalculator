<?php
$arr = array(1, 1, 2, 3, 4, -51, 12, 12, 12, -51);
$pair = 0;
for ($i = 0; $i <= count($arr); $i++) {


    if ($arr[$i] == $arr[$i-1]) {
        $pair++;
    }
    echo "$i $pair<br>";

}
 echo "количество последовательных пар = $pair";
?>