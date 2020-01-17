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
function Test()
{
   static $a=0;//стат переменная сущ только в лок обл видимости ф-ии ,но не теряеет своего значениия когда выполнение прогр выходит из этой обл
   echo $a;
   $a++;
}
echo Test();

   ?>
    
   
</body>
</html>