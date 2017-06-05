<?php
/**
 * PascalABC: While25. Дано целое число N (> 1). Найти первое число Фибоначчи, большее N
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = intval($InputData[0]);
$f1=1; $f2=1; $f=0;
while(bccomp($f, $n+1) == -1){
    $f = bcadd($f2, $f1);
    $f2=$f1;
    $f1=$f;
}
printf("%s\n",$f);
?>
