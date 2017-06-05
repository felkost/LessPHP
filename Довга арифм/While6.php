<?php
/**
 * PascalABC: While6. Дано целое число N (> 0). Найти двойной факториал N
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = $InputData[0];
$rez = 1;
while($n>=2){
    //$rez*=$n;
    $rez = bcmul($rez,$n );
    $n = bcsub($n, 2);
}
printf("N!! = %s\n",$rez);
?>

