<?php
header('Content-Type: text/html; charset=utf-8');

$dictionary = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "iy",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "tc",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "sch",
    "ъ" => "'",
    "ы" => "yi",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
];
$string = 'привет, мир! попробуем перевести эту фразу!';

function stringModify($string, $dictionary) {
    $result = translation($string, $dictionary);
    $result = regexp("/\s/", "_", $result);
    return $result;
}
function translation($string, $dictionary)
{
    $res = "";
    $special = [" ", "!", ",", ":", ";", ".", "'", '"'];
    for ($i = 0; $i < strlen($string); $i += 2) {
        if (in_array($string[$i], $special)) {
            $symbol = $string[$i];
            $i--;
        } else {
            $symbol = (substr($string, $i, 1) . substr($string, $i + 1, 1));
            $symbol = $dictionary[$symbol];
        }
        $res .= $symbol;
    }
    return $res;
}

function regexp($pattern, $replacement, $string)
{
    return preg_replace($pattern, $replacement, $string);
}

echo stringModify($string, $dictionary);
