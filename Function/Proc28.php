<?php
/**
 * PascalABC: Proc28. Описать функцию IsPrime(N) логического типа, возвращающую True,
 * если целый параметр N (> 1) является простым числом, и False в противном случае
 * (число, большее 1, называется простым, если оно не имеет положительных делителей, кроме 1 и самого себя).
 * Дан набор из 10 целых чисел, больших 1. С помощью функции IsPrime найти количество простых чисел
 * в данном наборе.
 * input.txt
 * 38 14 258 766 67 5 682 58 3 55
 */

function IsPrime($n){
    $n = (integer)$n;
    if($n==2 || $n==3 || $n==5 || $n==7 || $n==11 || $n==13)
        return $n;
    if($n<13)
        return false;
    if($n%2==0 || $n%3==0 || $n%5==0)
        return false;
    $i=3;
    while ($n%$i != 0 && $i * $i < $n) ++$i;
    if ($i * $i <= $n) return false; else return $n;
}


$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

for($i=0, $cnt=0; $i<10; ++$i){
    $a = $InputData[$i];
    $res = IsPrime($a);
    if($res) {
        printf("%d\t",$res);
        $cnt++;
    }
}
printf("\n");
printf("%d\n",$cnt);
?>