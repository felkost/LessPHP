<?php
/**
 * PascalABC: For18. Дано вещественное число A и целое число N (>0).
 * Используя один цикл, найти значение выражения 1−A+A2−A3+...+(−1)N∗AN1−A+A2−A3+...+(−1)N∗AN.
 * Условный оператор не использовать.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0];
$n= $InputData[1];

$a2=1;
$rez=1;

for  ($i = 1; $i<=$n;  ++$i){
    $a2*=-$a;
    $rez +=$a2;
}
printf("%0.2f\n",$rez);
?>