<?php
/**
 * PascalABC: Boolean2: Число является нечетным
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0];

$x1= $a%2;
$x2=$a%2+2;
$x3=($a%2+2)%2;
$str = ($a%2+2)%2==1? "True" : "False";
printf("%s\n", $str);
?>