<?php
$a = 2;
$b = 10;

echo "Начальные значения: <br>";
echo '$a = ' . $a . '<br>';
echo '$b = ' . $b . '<br>';

$a += $b;
$b = $a - $b;
$a = $a - $b;

echo "Конечные значения: <br>";
echo '$a = ' . $a . '<br>';
echo '$b = ' . $b;