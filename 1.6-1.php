<?php
$name = "Валерий";
$age = 31;
$date = date('D-m-y H:m');

$content = "Меня зовут {$name}.<br>
Через год мне будет " . ($age + 1) . " года, а еще через год - " . ($age + 2) . " года. <br>
На моих часах сейчас $date <br><hr><br>";

echo $content;

$contentRemake = preg_replace("/ /", "_",$content);
echo $contentRemake;



$contentFiltered = strstr($content, 'На');

echo $contentFiltered;