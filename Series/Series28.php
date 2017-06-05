<?php
/**
 * PascalABC: Series28. Дано целое число N и набор из N вещественных чисел: A1, A2, …, AN.
 * Вывести следующие числа: (A1)^N, (A2)^N−1, …, (AN−1)^2, AN.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = (integer)$InputData[0];

$s=0;
for ($i=1; $i<=$n; ++$i){
    $a = $InputData[$i];
    for($j=1, $pow=1.0; $j<=$n-$i+1; ++$j) $pow *= $a;
    printf("%0.2f\t",$pow);
}

?>
