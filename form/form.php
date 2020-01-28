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

    $a=$_POST['review'];
    $b=$_POST['name'];

    $fp=fopen("data.csv","a+");
    fwrite($fp, "$a ; $b"."\n");
    fclose($fp);

    ?>
    
</body>
</html>