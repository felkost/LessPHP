/**
 * http://informatics.mccme.ru/mod/statements/view.php?id=276#1
 */
<?php
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$x= $InputData[0];
$y= $InputData[1];

$max2 = $x>$y? $x : $y;

printf("%d\n", $max2);
?>