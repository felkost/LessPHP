<?php
/**
 * PascalABC: For4. Дано вещественное число — цена 1 кг конфет. 
 * Вывести стоимость 1, 2, ..., 10 кг конфет.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$cina= $InputData[0];

for  ($i = 1; $i<=10;  ++$i)
    printf("%d) kg=%0.2f\t",$i,$cina*$i);
?>