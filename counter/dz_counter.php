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

$filename="counter.txt";

$fp=fopen($filename,"r+");
// $counter=fread($fp, filesize("counter.txt"));
$counter=fgets($fp);

fclose ($fp);

$counter+=1;

echo "Эту страницу посетили ".$counter. " раз";

$fp=fopen($filename,"w");
fwrite($fp,$counter);
fclose ($fp);


    ?>
</body>
</html>