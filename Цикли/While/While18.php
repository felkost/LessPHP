<?php
/**
 * PascalABC: While18. Дано целое число N (> 0).
 * Используя операции деления нацело и взятия остатка от деления,
 * найти количество и сумму его цифр.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$n = intval($InputData[0]);
$sum = 0; $num=0;
while($n>0){
    ++$num;
    $sum = $sum + intval($n)%10;
    $n = (integer)($n / 10);
}
printf("num:%d; sum:%d\n",$num,$sum);
?>