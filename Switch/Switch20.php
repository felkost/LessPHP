<?php
/**
 * PascalABC: Case2: Дано целое число K. Вывести строку-описание оценки,
 * соответствующей числу K (1 — «плохо», 2 — «неудовлетворительно», 3 — «удовлетворительно»,
 * 4 — «хорошо», 5 — «отлично»).
 * Если K не лежит в диапазоне 1–5, то вывести строку «ошибка».
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$k= $InputData[0];

switch ($k)
{
    case 1: printf("погано\n"); break;
    case 2: printf("незадовільно\n"); break;
    case 3: printf("задовільно\n"); break;
    case 4: printf("добре\n"); break;
    case 5: printf("відмінно\n"); break;
    default: printf("помилка\n");
}
?>