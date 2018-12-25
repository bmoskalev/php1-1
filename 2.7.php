<?php
$hour = date('G');
$min = date('i');

function getHourEnding($hour)
{
    if ($hour >= 5 && $hour <= 20 || $hour == 0) {
        return "часов";
    } else if ($hour == 1 || $hour == 21) {
        return "час";
    } else {
        return "часа";
    }
}

function getMinutesEnding($min)
{
    $bal = $min % 10;
    if (($min >= 5 && $min <= 20) || ($bal == 0) || ($bal >= 5 && $bal <= 9)) {
        return "минут";
    } else if ($bal === 1) {
        return "минута";
    } else {
        return "минуты";
    }
}


echo "Текущее время: " . $hour. " " . getHourEnding($hour) . " " . $min . " " . getMinutesEnding($min);