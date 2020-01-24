<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//обработка без секций
$ini_array=parse_ini_file("file.ini");
echo "<pre>";
print_r($ini_array);
echo "<br>";

//обработка с секциями
$ini_array=parse_ini_file("file.ini",true);
echo "<pre>";
print_r($ini_array);
?>
    
</body>
</html>