<?php
/**
 * PascalABC: Series3. Даны десять вещественных чисел. Найти их среднее арифметическое.
 */
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$a = intval($InputData[0]);
$rez=0.0;
for ($i=0; $i<10; ++$i){
    $r = $InputData[$i];
    $rez += $r;
}
printf("%0.2g\n",$rez/10.0);
?>

