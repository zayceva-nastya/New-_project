<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="opros_forma.css">
</head>

<body>
    <form action="opros1.php" method="post">
        <?php
       include 'config.php';
       $arr = file($filename);
        ?>
        <h3><?= $arr[0] ?></h3>
        <?= "<table>\n" ?>
        <?php
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(" - ", $arr[$i])[0];
            echo "<tr><td><label ><input class='radio_input'   type='radio' name='vot'  value='$i'>$buf</label></td></tr>\n";
        }

        ?>
        <?= "</table>\n" ?>
        <input id="vote" type="submit" value="VOTE">
    </form>
</body>

</html>