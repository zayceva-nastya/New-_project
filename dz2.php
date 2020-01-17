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
    $my_array = array(2,10,78,54,14,102,147,658,15,1000,1500,600,8794);
  $max= $my_array[0];
    function value_max($my_array){
 
        for ($i = 1; $i <= count($my_array); $i++) {
             
            if ($my_array[$i] > $my_array[0]) {
                $max = $my_array[$i];
            }
        }
        return $max;
    }
    echo value_max($my_array);
    ?>
</body>

</html>