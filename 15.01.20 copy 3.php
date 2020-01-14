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
    //вывести макс из двух чисел

$n=5;
$k=8;

function number($n, $k)
{
if ($n > $k){
    
    $c =$n;
}
else {
   $c=$k;
}
 return $c;
}
echo number($n, $k);
   ?>

   

     
</body>
</html>