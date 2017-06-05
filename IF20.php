<?php
/**
 * PascalABC: IF15: На числовой оси расположены три точки: A, B, C.
 * Определить, какая из двух последних точек (B или C) расположена ближе к A,
 * и вывести эту точку и ее расстояние от точки A.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0]; $b= $InputData[1]; $c= $InputData[2];

$x1=abs($a-$b);
$x2=abs($a-$c);

if ($x1<$x2)  {
    printf("Найближча точка: %g\n", $b);
    printf("Відстань: %g\n", $x1);
}
else {
    printf("Найближча точка: $c\n");
    printf("Відстань: $x2\n");
}
?>