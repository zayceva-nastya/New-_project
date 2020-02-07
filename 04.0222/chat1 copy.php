<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0.5" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>

<body>

    <?php

    $filename='chat.txt';
$arr=file($filename);
$newarr=[];
// print_r($arr);
for($i=0;$i<=count($arr);$i++){
$name=explode(':',$arr[$i])[0];
// echo print_r($name);
if($name[$i]==$name[$i+1]){
$newarr=implode(':',$name[$i+1]);
print_r($newarr);
}
}
//     $arr = file('chat.txt');
//     $ind=explode(':',$arr);
//   echo $ind[0];
//     foreach ($arr as $ind => $value) {
//         echo ($key % 2 == 0) ? "<div class='odd'>$value</div>" : "<div class='even'>$value</div>";
    
//         $buf = explode(":", $arr[$ind]);
//         for ($i = 0; $i <= count($arr[$ind]); $i++) {
       
//             if ($buf[$i] == $buf[$i + 1]) {
             
//                 echo "<div class='odd'>" . $value . "</div>";
//             } else {
//                 echo "<div class='even'>" . $values . "</div>";
//             }
//     }
//         // echo "<table><tr><td>". $value. "</table></tr></td><br>";

//     }

    ?>

</body>

</html>