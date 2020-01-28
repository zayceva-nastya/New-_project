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

$str='';
for($i=1;$i<=10;$i++){
    for($k=1;$k<=$i;$k++){
       $str.=$i;
    }
}
echo $str.'<br>';
?>  
 <?php
	$arr = [
		0=>['name'=>'Коля', 'salary'=>300],
		1=>['name'=>'Вася', 'salary'=>400],
		2=>['name'=>'Петя', 'salary'=>500],
    ];
    foreach($arr as $value){
        echo $value['name'].'-'.$value['salary'].'<br>';
    }
?>

<?php
$arr=[];
for($i=0;$i<=10;$i++){
    for($k=0;$k<=10;$k++){
        $arr[$i][]=mt_rand(0,10);
    }
}
echo "<pre>";
echo print_r($arr);
?>

<?php
$str='hello';
for($i=strlen($str);$i>0;$i--){
    $str1 += $i;
}
echo $str1;

?>

<?php
$string='happy';
$split=str_split($string);
$str2=array_reverse($split);
echo implode($str2);
?>
</body>
</html>