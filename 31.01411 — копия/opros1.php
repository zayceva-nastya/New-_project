<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="opros1.css">
</head>

<body>

    <?php
    include 'config.php'; 
    $arr = file($filename);
    $ind = $_POST['vot'];
 
    $buf = explode(' - ', $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(' - ', $buf) . "\n";
   
    file_put_contents($filename, $arr);
   
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum += explode(" - ", $arr[$i])[1];//сумма всех голосов
    }


    echo "<div class='bor'>\n";

    echo "<h1>What subjects would you like to learn more?</h1>\n<br>";
    echo "<div class=box>\n";

    for ($i = 1; $i < count($arr); $i++) {
        $buf = explode(" - ", $arr[$i]);
        $result=round((100 * $buf[1] / $sum),2 );
        echo "<div class='red' style='width:{$result}px'></div> $buf[0]-$result%<br>";
    }

    echo "</div>";
    echo "</div>";
    ?>

</body>

</html>