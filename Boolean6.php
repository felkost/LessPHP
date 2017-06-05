<?php
/**
 * PascalABC: Boolean6: Справедливо двойное неравенство A < B < C
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0];
$b= $InputData[1];
$c= $InputData[2];

$str = $a<$b && $b<$c ? "True" : "False";
printf("%s\n", $str);

$a2= $InputData[3];
$b2= $InputData[4];
$c2= $InputData[5];

$str2 = $a2<$b2 && $b2<$c2 ? "True" : "False";
printf("%s\n", $str2);

?>