<?php
/**
 * PascalABC: While23°. Даны целые положительные числа A и B. Найти их наибольший общий делитель (НОД),
 * используя алгоритм Евклида
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$a = intval($InputData[0]);  $b = intval($InputData[1]);

while($a!=0 && $b!=0){
    if ($a>$b) $a=intval($a)%$b;
    else $b=intval($b)%$a;
}
printf("%d\n",$a+$b);
?>
