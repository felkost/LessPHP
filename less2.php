<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$My_var = 5;
echo gettype($My_var);
echo nl2br("\n");

$text = "Line 1\nLine 2\n";
echo nl2br($text);

define("pi", 3.14);
echo pi;
echo nl2br("\n");
?>

</body>
</html>