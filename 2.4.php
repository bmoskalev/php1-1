<?php
$a = 5;
$b = 7;
$operation = "/";
function sum($a, $b) {
    return $a + $b;
}
function dif($a, $b) {
    return $a - $b;
}
function mul($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return round($a / $b, 2);
}

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "+": {
            return "Сумма чисел $a и $b равна " . sum($a, $b) . "<br>";
        }
        case "-": {
            return "Разность чисел $a и $b равна " . dif($a, $b) . "<br>";
        }
        case "*": {
            return "Произведение чисел $a и $b равно " . mul($a, $b) . "<br>";
        }
        case "/": {
            return "Частное чисел $a и $b равно " . div($a, $b) . "<br>";
        }
    }
}

echo mathOperation($a, $b, $operation);

