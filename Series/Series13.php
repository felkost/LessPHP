<?php
/**
 * PascalABC: Series13. Дан набор ненулевых целых чисел; признак его завершения — число 0. Вывести сумму
 * всех положительных четных чисел из данного набора.
 * Если требуемые числа в наборе отсутствуют, то вывести 0.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$cnt = count($InputData);
$s=0;
for ($i=0; $i<$cnt-1; ++$i){
    $a = (integer)$InputData[$i];
    if ($a > 0 && $a%2 == 0)
        $s += $a;
}
printf("%d\n",$s);

?>
