/**
 * http://informatics.mccme.ru/mod/statements/view3.php?id=2296&chapterid=2937#1
 */
<?php

$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));

$Answer=(integer)($InputData[1]/$InputData[0]); 

$FOUT=fopen("output.txt","w");

fputs($FOUT,$Answer);

fclose($FOUT);
?>