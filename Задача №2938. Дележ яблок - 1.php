/**
* http://informatics.mccme.ru/mod/statements/view3.php?id=2296&chapterid=2938#1
* https://olympiads.ru/mosolymp/2011-12/tour1/io.shtml
* http://php.net/manual/ru/function.intdiv.php
*/
<?php
# Считываем весь файл при помощи функции file_get_contents,
# удаляем начальные и конечные пробелы при помощи функции trim
# результат разбиваем на поля функцией split по шаблону /\s+/,
# задающему последовательность пробельных символов в качестве разделителя
# и записываем результат в массив InputData
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

# Теперь в элементах массива $InputData[0] и $InputData[1]
# записаны два входных числа.
# Запишем их сумму в переменную $Answer
$Answer=intdiv($InputData[1],$InputData[0]);

# Объявляем файл FOUT для вывода данных
$FOUT=fopen("output.txt","w");

# Выведем результат в файл FOUT
fputs($FOUT,$Answer);

# Закроем файл FOUT
fclose($FOUT);

?>