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
    $d=getdate();
    foreach($d as $key=>$value){
        echo "<pre>";
        echo "$key=$value";}
        echo "<hr>$d[mday].$d[mon].$d[year]";
    
    
    ?>
    <?php
echo date( "j of F Y, \a\\t g.i a, l", mktime(12,58,59,9,23,2031))."<br>";
echo date("(d-F-y-D,H:i)");
echo date('')-mktime(7,25,59,9,1,2010);

    ?>
</body>
</html>