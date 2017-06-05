/**
 * http://informatics.mccme.ru/mod/statements/view3.php?id=2296&chapterid=2937#1

http://addphp.ru/materials/base/1_12.php
 */
<?php
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$numb= $InputData[0];

$nub_next = $numb+1;
$nub_pred = $numb-1;

$Answer1="The next number for the number ".$numb." is ".$nub_next.".";
$Answer2="The previous number for the number ".$numb." is ".$nub_pred.".";


$FOUT=fopen("output.txt","w");

fputs($FOUT,$Answer1."\n".$Answer2);

fclose($FOUT);
?>