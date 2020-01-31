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
    $ind = $_POST['vot'];
    $arr = file('opros.csv');
    $buf = explode(' - ', $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(' - ', $buf) . "\n";
    // print_r($arr);
    file_put_contents('opros.csv', $arr);
    // foreach ($arr as $key => $value) {
        // echo "$key - $value<br>";
    // }
    $sum = 0;
    for ($i = 1; $i < count($arr); $i++) {
        $sum += explode(" - ", $arr[$i])[1];
    }

    // echo $sum;

echo "<h1>$arr[0]</h1>.<br>";

    for ($i = 1; $i < count($arr); $i++) {
        $buf = explode(" - ", $arr[$i]);
        echo $buf[0]." - ".round((($buf[1]/$sum)*100),2).'%';
        echo "<img src='pix.png' height='15' width='"100*$buf[1]/$sum"'><br>";
    }


    ?>

</body>

</html>