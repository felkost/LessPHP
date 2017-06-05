<?php
/**
 * PascalABC: IF15: Даны три числа. Найти сумму двух наибольших из них.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0]; $b= $InputData[1]; $c= $InputData[2];

if($a>$b && $b>$c){
    printf("%g\n", $a+$b);
    exit;
}
if($a>$c && $c>$b){
    printf("%g\n", $a+$c);
    exit;
}
if($b>$a && $a>$c){
    printf("%g\n", $a+$b);
    exit;
}
if($b>$c && $c>$a){
    printf("%g\n", $b+$c);
    exit;
}
if($c>$a && $a>$b){
    printf("%g\n", $c+$a);
    exit;
}
if($c>$b && $b>$a){
    printf("%g\n", $c+$b);
    exit;
}

?>