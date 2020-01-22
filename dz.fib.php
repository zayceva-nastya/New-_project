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

function fib ($n){
    if($n<3){
        return 1;
    }else{
        return $f=fib($n-1)+fib($n-2);
    }
}
$arr=[];
for($n=1;$n<=20;$n++){
  
  $arr[]=fib($n);
  
}
echo "<pre>";
print_r($arr);

?>
    
</body>
</html>