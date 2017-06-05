<?php
/**
 * PascalABC: Proc1. Описать процедуру PowerA3(A, B),
 * вычисляющую третью степень числа A и возвращающую ее в переменной B
 * (A — входной, B — выходной параметр; оба параметра являются вещественными).
 * С помощью этой процедуры найти третьи степени пяти данных чисел.
 */
function poweraA3($a, &$b)
{
    $b=$a*$a*$a;
}

$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

for ($i=0; $i<5; ++$i){
    poweraA3((float)$InputData[i], $b);
    printf("poweraA3 = %0.2g\n",$b);
}

?>