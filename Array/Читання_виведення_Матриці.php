<?php
/**
 * PascalABC: Читання_виведення_Матриці
 * Увага!!! Функції для читання матриці та вектора зроблені для типу integer - врахувати це в задачах.
 * input.txt
 * 2 3
 * 1 2 3
 * 4 5 6
 */

function read_matrix($InputData, &$n, &$m, &$arr){
    $n = $InputData[0]; $m = $InputData[1];

    for($i=0, $ind=2; $i<$n; $i++)
        for($j=0; $j<$m; $j++) {
            $arr[$i][$j] = (int)$InputData[$ind];
            $ind++;
        }
}


function read_vector($InputData, &$n, &$arr){
    $n = $InputData[0];

    for($i=0, $ind=1; $i<$n; $i++){
            $arr[$i] = (int)$InputData[$ind];
            $ind++;
        }
}

$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

read_matrix($InputData, $n, $m, $arr);

printf("InputData:\n"); print_r($InputData); printf("\n");
printf("arr:\n");       print_r($arr);       printf("\n");

printf("\n");
for($i=0, $ind=2; $i<$n; $i++) {
    for ($j = 0; $j < $m; $j++)
        printf("arr[%d][%d]=%d\t", $i, $j, $arr[$i][$j]);
    printf("\n");
}

printf("\n");
read_vector($InputData, $n, $barr);
for($i=0, $ind=2; $i<$n; $i++)
{
        printf("arr[%d][%d]=%d\t", $i, $arr[$i]);
}
?>