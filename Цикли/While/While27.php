<?php
/**
 * PascalABC: While27. Дано целое число N (> 1), являющееся числом Фибоначчи: N = FK.
 * Найти целое число K — порядковый номер числа Фибоначчи N.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = intval($InputData[0]);
$f1=1; $f2=1; $f=0; $k=2;
while(bccomp($f, $n) == -1){
    ++$k;
    $f = bcadd($f2, $f1);
    $f2=$f1;
    $f1=$f;
}
printf("%d\n",$k);
?>
