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
$array=array(
   1=>"Иванов",
   2=>"Петров",
   3=>"Сидоров",
   4=>"Смирнов",
   5=>"Соболев");
  
function tb($array){
 $str = "<table>\n";
foreach($array as $key => $value){
$str.="\t<tr>\n\t\t<td>$key</td>\n\t\t<td>$value</td>\n\t<tr>\t";
}
}
   $str.="</table>";  
   return $str;
   echo tb($array);
  


   ?>

    
   
</body>
</html>