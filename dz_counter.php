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

    $fp=fopen ("counter.txt","w+");
    fwrite ($fp, "0");
    fclose ($fp);

    $file=('counter.txt');
    readfile($file);

    $sa=fopen("counter.txt","r+");
    if( $sa=fopen("counter.txt","r+")){
        fwrite ($fp, "1");
    }

    ?>
    
</body>
</html>