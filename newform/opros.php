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
    $i = $_POST['s'];

    // print_r($_POST);
    $arr = explode(';', file_get_contents('opros.csv'));
    $arr[$i]++;
    file_put_contents('opros.csv', implode(";", $arr));


    foreach($arr as $key=>$value){
        echo "$key - $value<br>";
    }

// echo "Yes"."-"."\t" . $arr[0]  ."<br>"."No"."-".  $arr[1]  ."<br>"."Don't know"."-".  $arr[2];
// require_once('opros.html');
    ?>

</body>

</html>