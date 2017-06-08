<?php
/**
 * PascalABC: Читання_виведення_Матриці
 * Увага!!! Функції для читання матриці та вектора зроблені для типу integer - врахувати це в задачах.
 * input.txt
 * 2 3
 * 1 2 3
 * 4 5 6
 */


$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$stack = [];
printf("Розмір стека %d\n", count($stack));

array_push($stack, 'foo');
print_r($stack);
printf("Верхній елемент стека %s\n", $stack[count($stack)-1]);
printf("Розмір стека %d\n", count($stack));

printf("Вилучено верхній елемент стека %s\n", array_pop($stack));
print_r($stack);
printf("Розмір стека %d\n", count($stack));

?>