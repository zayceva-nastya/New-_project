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

    $fp=fopen ("examp.txt","w+");
    fwrite ($fp, "Today is the best day.");
    fclose ($fp);

    $lines=file('examp.txt');

    foreach ($lines as $line_num => $line) {
        echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    }
    
    ?>
    
</body>
</html>