<?php
/**
 * http://informatics.mccme.ru/mod/statements/view.php?id=251#1
 * Напишите программу, которая прибавляет 1 к целому числу N (длина числа N до 1000 знаков)
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = $InputData[0];
$rez = bcadd($n, 1);

printf("%s\n",$rez);
?>

