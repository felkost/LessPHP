<?php
/**
 * PascalABC: Boolean6: Все цифры данного числа различны
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0];

$a = abs($a);
$digit1=intval($a/100,10);
$digit2=intval($a%100/10,10);
$digit3=intval($a%10,10);
$str = $digit1!=$digit2 && $digit3!=$digit2 && $digit1!=$digit3;
printf("%s\n", $str ? "True" : "False");

$a= $InputData[1];
$a = abs($a);
$digit1=intval($a/100,10);
$digit2=intval($a%100/10,10);
$digit3=intval($a%10,10);
$str = $digit1!=$digit2 && $digit3!=$digit2 && $digit1!=$digit3;
printf("%s\n", $str ? "True" : "False");

?>