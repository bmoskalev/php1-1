<?php
$a = 0;

do {
    if ($a === 0) {
        $res = "$a - это ноль<br>";
    } else if ($a % 2 === 1) {
        $res = "$a - это нечетное число<br>";
    } else {
        $res = "$a - это четное число<br>";
    }
    $a++;
    echo $res;
} while ($a <= 10);