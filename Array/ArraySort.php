<?php
/**
 * input.txt
 *  1 2 3 4 5 6 7 8 9 0
 * 10 11 20 21
 */

function print_arr(&$arr){
    for($i=0; $i<count($arr); $i++)
        printf("%d: %s\t", $i, $arr[$i]);
    printf("\n");
}
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = count($InputData);
for($i=0; $i<$n; $i++){
    $arr[$i] = $InputData[$i];
}

print_arr($arr); printf("\n");

$barr = $arr;
shuffle($barr);
print_arr($barr); printf("\n");
$arr = $barr;

$barr = $arr;
$barr[0]=11;
print_arr($arr);
print_arr($barr); printf("\n");


$barr = $arr;
$carr = $arr;
sort($barr); sort($carr, SORT_NUMERIC);
print_arr($arr);
print_arr($barr);
print_arr($carr); printf("\n");

$barr = $arr;
$carr = $arr;
rsort($barr); rsort($carr, SORT_NUMERIC);
print_arr($arr);
print_arr($barr);
print_arr($carr); printf("\n");

$barr = $arr;
$carr = $arr;
sort($barr); sort($carr, SORT_STRING);
print_arr($arr);
print_arr($barr);
print_arr($carr); printf("\n");
?>