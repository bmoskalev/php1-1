<?php
$a = 5;
$b = 7;
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

echo "Сумма чисел $a и $b равна " . sum($a, $b) . "<br>";
echo "Разность чисел $a и $b равна " . dif($a, $b) . "<br>";
echo "Произведение чисел $a и $b равно " . mul($a, $b) . "<br>";
echo "Частное чисел $a и $b равно " . div($a, $b) . "<br>";