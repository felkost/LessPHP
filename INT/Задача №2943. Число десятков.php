/**
 * http://informatics.mccme.ru/mod/statements/view3.php?id=2296&chapterid=2943#1
 *
 */
<?php
$InputData=preg_split('/\s+/', trim(file_get_contents('input.txt')));
$numb= $InputData[0];

#$numb=fgets(STDIN);

$digit = $numb /10 % 10;


#$FOUT=fopen("output.txt","w");

printf("%d\n", $digit);

#fputs($FOUT,$Answer."\n");

#fclose($FOUT);
?>