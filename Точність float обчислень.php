<?php
/**
 * http://blog.kislenko.net/show.php?id=1391
 */

//пример кода, который показывает, при каком значении числа x компьютер не различает числа x и x+1.
//https://neerc.ifmo.ru/wiki/index.php?title=%D0%9F%D1%80%D0%B5%D0%B4%D1%81%D1%82%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5_%D1%87%D0%B8%D1%81%D0%B5%D0%BB_%D1%81_%D0%BF%D0%BB%D0%B0%D0%B2%D0%B0%D1%8E%D1%89%D0%B5%D0%B9_%D1%82%D0%BE%D1%87%D0%BA%D0%BE%D0%B9
//нижче наведено інший спосіб обчислити це та інші граничні значення.
$x = 1.0;
while( $x!= $x + 1){
    $x *= 2;
}
printf("Число х, яке не відрізняється від x+1 = %f\n", $x);
$N = log($x) / log(2);
printf("N (кількість біт в мантисі числа x) = %f\n", $N);

printf("\n");


//Примем следующие способы определения приближённых значений искомых величин:
//положим X∞ = 2^n, где n - первое натуральное число, при котором произошло переполнение;
//положим X0 = 2^(-m), где m – первое натуральное число , при котором 2^(-m) совпадает с нулем;
//положим εM = 2^(-k), где k – наибольшее натуральное число, при котором сумма вычисленного значения
//1+2^(-k) ещё больше 1. Фактически, εM есть граница относительной погрешности представления числа x* ≈ 1.
//Функции для подсчёта
function inf ($n) { return 2.0**$n; }
function zero ($m) { return 2.0**(-$m); }
function eps ($k) { return 1.+2.0**(-$k); }

$n=1; $m=1; $k=1;
 while (1) {
     $res=inf($n);
     if (is_infinite($res)) break; //Проверяет, является ли значение бесконечным
                                   //http://php.net/manual/ru/function.is-infinite.php
     else $n++;
 };
printf("2**1023 = %g \t 2**1024 = %g\n",2**1023,2**1024);
printf("+INF: Первое значение степени числа 2, при котором произошло переполнение = %u\n",$n);
printf("\n");

while (1) {
    $res=zero($m);
    if ($res==0.) break;
    else $m++;
};
printf("2**(-1074) = %g \t 2**(-1075) = %g\n",2**(-1074),2**(-1075));
printf("Zero: Первое значение степени числа 2, при котором 2^(-m) совпадает с нулем = %u\n",$m);
printf("\n");

while (1) {
    $res=eps($k);
    if ($res==1.) break;
    else $k++;
};
printf("2**(-53) = %g \t 2**(-54) = %g\n",2**(-53),2**(-54));
printf("Eps: Первое значение степени числа 2, при котором 1+2^(-k) не відрізняється від 1 = %u\n",$k);
printf("1.0+2**(-53)==1.0+2**(-54) = %s\n", 1.0+2**(-53)==1.0+2**(-54)? "True" : "False");
?>