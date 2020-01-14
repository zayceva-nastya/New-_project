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
    $s=1000;
    $k=7;
    $n=1;
    do{
        $s=$s+($s*(($k/12)/100));
        $n++;
    }
   while ($n<=9);   
       echo $s; 
    ?>
     <?php
    $s=1000;
    $k=7;
    $n=1;
    echo "<br>";
    for (;$n<=9;){
        $s=$s+($s*(($k/12)/100));
        $n++;
    }
   while ($n<=9);   
       echo $s; 
    ?>
</body>
</html>