<?php
$val = 3;
$pow = 4;

function power($val, $pow)
{
    if ($pow === 0) {
        return 1;
    }
    return $val = $val * power($val, $pow - 1);
}

echo power($val, $pow);