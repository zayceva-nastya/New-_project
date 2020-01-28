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
for ($i=1;$i<=100;$i++) {
    echo $i."\n"."<br>";
}

?>
<?php
for($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i."\n"."<br>";
    }
}

?>

   <?php
   $a=0;
for ($i=1;$i<=100;$i++) {
    $a += $i;
   
}
 echo $a ;
   ?> 
    <?php
   $a=0;
for ($i=1;$i<=15;$i++) {
    $a += $i*$i;
   
}
 echo $a ;
   ?> 
   <?php
   $a=0;
for ($i=1;$i<=15;$i++) {
    $a += bcsqrt($i);
   
}
 echo round($a,2) ;
   ?> 
   <?php
   $a=0;
for($i=1;$i<=100;$i++){
    if($i%7==0){
      $a += $i;
    }
}
  echo $a;
?>
<?php
$arr=[];
for($i=1;$i<=10;$i++){
    
       $arr[]='x' ;
    }
echo "<pre>";
echo print_r($arr);
?>
<?php
$arr=[];
for($i=1;$i<=10;$i++){
    
       $arr[]=$i ;
    }
echo "<pre>";
echo print_r($arr);
?>
<?php
$arr=[];
for($i=10;$i>=1;$i--){
    
       $arr[]=$i ;
    }
echo "<pre>";
echo print_r($arr);
?>
<?php
$arr=[];
for($i=1;$i<=10;$i++){
    
     $arr[]=rand(1,10)  ;
    }
echo "<pre>";
echo print_r($arr);
?>
<?php
$str='';
for($i=1;$i<=6;$i++){
    
       $str.=rand(0,10) ;
    }
echo "<pre>";
echo $str.'<br>';
?>
<?php

$arr=[2,3,4,5,6,7,8,9];
$a=0;
foreach($arr as $value){
    $a+=$value;

}
echo $a.'<br>';

?>
<?php

$arr=[2,3,4,5,6,7,8,9];
$a=0;
foreach($arr as $value){
    $a += $value*$value;

}
echo $a.'<br>';
?>
<?php

$arr=[2,3,4,5,6,7,8,9];
$a=0;
foreach($arr as $value){
    $a += $value*$value;

}

$b=bcsqrt($a);
echo $b;
?>

<?php
$arr=[1,3,11,9,12,7,15];
$sum=0;
foreach($arr as $value){
    if($value>0 && $value<10){
        $sum += $value;
    }
}
echo $sum;
?>

<?php
$arr=[1,3,5,5,5,7,9];
for($i=0;$i<=strlen('$arr');$i++){
    if($arr[$i]==$arr[$i-1] && $arr[$i]==$arr[$i-2]){
        echo 'yes';
    }else{
        echo 'no';
    }
}
?>





</body>
</html>