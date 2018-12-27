<?php
$string = "Hello, world! I like JavaScript and PHP!";
$pattern = "/\s/";
$replacement = "_";

function regexp($pattern, $replacement, $string)
{
    return preg_replace($pattern, $replacement, $string);
}

echo regexp($pattern, $replacement, $string);