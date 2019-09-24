<?php


function nbYear($p0, $percent, $aug, $p) {
    $counter = 0;
    while ($p0 >= $p){
        $p0 = $p0 + ($p0 * $percent) + $aug;
        $counter = ++;
    echo $counter;
    }
    return $counter;
}
echo nbYear(1500, 5, 100, 5000);

?>