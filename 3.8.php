<?php
$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин", "Красногорск", "Красногвардейск"],
    "Ленинграскдая область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Косимов", "Кораблино", "Рязань", "Шацк", "Скопин"]
];
$pattern = "/^К/i";

foreach ($cities as $key => $value) {
    echo "$key:<br>";
    $result = [];
    foreach ($cities[$key] as $value) {
        if (preg_match($pattern, $value)) {
            $result[] = $value;
        }
    }
      echo implode(", ", $result) . "<br>";
    }