<?php
/**
 * PascalABC: Proc11. Описать процедуру Minmax(X, Y), записывающую в переменную X минимальное из значений X и Y,
 * а в переменную Y — максимальное из этих значений (X и Y — вещественные параметры,
 * являющиеся одновременно входными и выходными).
 * Используя четыре вызова этой процедуры, найти минимальное и максимальное из данных чисел A, B, C, D.
 */

function Swap(&$x, &$y){
    $tmp = $x;
    $x = $y;
    $y = $tmp;
}

function MinMax(&$x, &$y){
   if($x>$y) Swap($x, $y);
}

$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a = $InputData[0];
$b = $InputData[1];
$c = $InputData[2];
$d = $InputData[3];

MinMax($a, $b);
MinMax($c, $d);
MinMax($a, $c);
MinMax($b, $d);

printf("Мінімальне значення = %0.2f\n",$a);
printf("Максимальне значення = %0.2f\n",$d);
?>