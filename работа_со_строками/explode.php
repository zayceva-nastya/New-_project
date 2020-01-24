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
$arr=explode(':',file_get_contents('fl.txt'));//(взяли за разделитель : и поместили в массив)
$arr[2]++;
echo '<pre>';
print_r($arr);
file_put_contents('fl.txt',implode(':',$arr));//опять в строку
?>
    
</body>
</html>