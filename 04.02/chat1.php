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
  
    $ind=file('chat.txt');
    foreach($ind as $key=>$value){
        // echo "<table><tr><td>". $value. "</table></tr></td><br>";
        echo ($key%2==0)? "<div class='odd'>$value</div>":"<div class='even'>$value</div>";
    }
    
    
    ?>
    
</body>
</html>