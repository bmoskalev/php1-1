<?php
$a = 5;
$b = '05';


var_dump($a == $b);                             // true, перед сравнением php пытается привести значения даже строковых
                                                // переменных к числу. == не сравнивает типы, только значения
var_dump((int)'012345');                        // 12345, указан тип данных int - целое число, РНР пытается из строки
                                                // получить численное значение, ноль игнорируется
var_dump((float)123.0 === (int)123.0);          // false, т.к. идет сравнение не только по значение, но и по типу данных
var_dump((int)0 === (int)'hello, world');       // true, (int)'string' равно 0, типы обоих аргументов указаны integer,
                                                // поэтому проходит проверка и на знаечние, и на тип

