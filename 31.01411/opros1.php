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
    $ind = $_POST['vot'];
    $arr = file('opros.csv');
    $buf = explode(' - ', $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(' - ', $buf) . "\n";
   
    file_put_contents('opros.csv', $arr);
   
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum += explode(" - ", $arr[$i])[1];//сумма всех голосов
    }


    echo "<div class='bor'>\n";

    echo "<h1>What subjects would you like to learn more?</h1>\n<br>";
    echo "<div class=box>\n";

    for ($i = 1; $i < count($arr); $i++) {
        $buf = explode(" - ", $arr[$i]);
        echo "<div class='red' style='width:" . (100 * $buf[1] / $sum) . "px'></div>" . round((($buf[1] / $sum) * 100), 2) . '%' . " - " . $buf[0] . '<br>';
    }

    echo "</div>";
    echo "</div>";
    ?>

</body>

</html>