<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>

<body>
    <div class="kv" style="width: <?= $_GET['a'] ?>px; height: <?= $_GET['b'] ?>px;  background-color: <?= $_GET['c'] ?>">
    <?php
    // print_r($_GET);
    $S= $_GET['b']*$_GET['a'];
echo "<center>Моя площадь<br>". $S."px<sup>2";
    ?>
    </div>
</body>

</html>