<?php

$value1 = $argv[1];
$operator = $argv[2];
$value2 = (isset($argv[3]) ?  $argv[3] : 0);
$result = 0;

//check if usingi correct operator x, +, -, /
if(strlen($operator) === 1) {
    if (strpos("x+-/c", $operator) !== false) {
        $result = compute($value1, $operator, $value2);

        echo $result . PHP_EOL;
    } else {
        echo "unknown operator" . PHP_EOL;
    }
    } else {
        echo "only one char authorized" . PHP_EOL;
}

function compute($value1, $operator, $value2 = 0)
{
    $result = 0;
    switch ($operator) {
        case "x";
            $result = $value1 * $value2;
            break;
        case "-";
            $result = $value1 - $value2;
            break;
        case "/";
            $result = $value1 / $value2;
            break;
        case "+";
            $result = $value1 + $value2;
            break;
        case "c";
            $result = $value1 * $value1;
            break;
    }

    return $result;
}



