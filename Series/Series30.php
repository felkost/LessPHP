<?php
/**
 * PascalABC: Series30°. Даны целые числа K, N,
 * а также K наборов целых чисел по N элементов в каждом наборе.
 * Для каждого набора вывести сумму его элементов.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input30.txt')));

$k = (integer)$InputData[0];
$n = (integer)$InputData[1];

for ($ind = 2, $i=1; $i<=$k; ++$i){
    for($j=1, $suma = 0; $j<=$n; ++$j) {
        $suma += (integer)$InputData[$ind];
        ++$ind;
    }
    printf("\"Сумма элементов данного набора = %d\n",$suma);
}

?>