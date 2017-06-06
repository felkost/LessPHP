<?php
/**
 * PascalABC: Proc17. Описать функцию RootCount(A, B, C) целого типа, определяющую количество корней
 * квадратного уравнения A·x2 + B·x + C = 0 (A, B, C — вещественные параметры, A <> 0).
 * С ее помощью найти количество корней для каждого из трех квадратных уравнений с данными коэффициентами.
 * Количество корней определять по значению дискременанта: D= B2 — 4 * A * C.
 *
 * input.txt
 * 5.00 40.00 80.00
 * 1.00 3.00 3.00
 * 4.00 8.00 -12.00
 */

function RootsCount($a, $b, $c){
    $d = $b*$b-4*$a*$c;
    if($d<0.0)
        return "корені вiдсутні";
    elseif ($d==0.0)
                return 1;
    else return 2;
}


$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$a = $InputData[0];
$b = $InputData[1];
$c = $InputData[2];
printf("Кількість коренів = %s\n",RootsCount($a, $b, $c));

$a = $InputData[3];
$b = $InputData[4];
$c = $InputData[5];
printf("Кількість коренів = %s\n",RootsCount($a, $b, $c));

$a = $InputData[6];
$b = $InputData[7];
$c = $InputData[8];
printf("Кількість коренів = %s\n",RootsCount($a, $b, $c));
?>