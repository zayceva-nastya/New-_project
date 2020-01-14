<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <!-- //вывести макс из 4 чисел -->



    <?php
    $n = 89;
    $k = 8;
    $z = 100;
    $r = 85;
    function number($n, $k, $z, $r)
    {
        if ($n > $k) {

            $buff = $n;
        } else {
            $buff = $k;
        }
        if ($z > $buff) {
           $buff=$z;
        }
       if ($r > $buff) { 
            $buff=$r;
        }
     return $buff;
    }
    echo number($n, $k, $z, $r);
    ?>

</body>

</html>