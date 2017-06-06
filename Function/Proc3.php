<?php
/**
 * PascalABC: Proc3. Описать процедуру Mean(X, Y, AMean, GMean),
 * вычисляющую среднее арифметическое AMean = (X+Y)/2 и
 * среднее геометрическое GMean = √(X * Y) двух положительных чисел X и Y
 * (X и Y — входные, AMean и GMean — выходные параметры вещественного типа).
 * С помощью этой процедуры найти среднее арифметическое и среднее геометрическое для пар (A,B), (A,C), (A,D),
 * если даны A,B,C,D.
 */

function Mean($x, $y, &$a, &$g){
    $a = ($x + $y) / 2;
    $g = sqrt($x * $y);
}

$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a = $InputData[0];
$b = $InputData[1];
$c = $InputData[2];
$d = $InputData[3];


Mean($a, $b, $AMean, $GMean);
printf("AMean = %0.2f\tGMean = %0.2f\n",$AMean, $GMean);
Mean($a, $c, $AMean, $GMean);
printf("AMean = %0.2f\tGMean = %0.2f\n",$AMean, $GMean);
Mean($a, $d, $AMean, $GMean);
printf("AMean = %0.2f\tGMean = %0.2f\n",$AMean, $GMean);

?>