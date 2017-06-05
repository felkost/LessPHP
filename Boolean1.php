<?php
/**
 * PascalABC: Boolean1:Число является положительным
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$a= $InputData[0];

$str = $a>0? "True" : "False";
printf("%s\n", $str);
?>