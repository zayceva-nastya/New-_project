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
echo $a=file_get_contents("counter.txt")+1;
file_put_contents("counter.txt",$a);
 

    ?>
</body>
</html>