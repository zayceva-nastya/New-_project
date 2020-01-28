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



    // echo $a="$_POST[num1]+$_POST[num2]"." = ".bcadd($_POST['num1'], $_POST['num2']);
    // echo $a="$_POST[num1]/$_POST[num2]"." = ".$_POST['num1']/ $_POST['num2'];
    // echo $a="$_POST[num1]*$_POST[num2]"." = ".$_POST['num1']* $_POST['num2'];

    // print_r($_POST);

    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $s=$_POST['s']; //см html док в input name="s''

    switch ($s) {
        case '-':
            $c = $a - $b;
            break;
        case '*':
            $c = $a * $b;
            break;
        case '/':
            $c = $a / $b;
            break;
        case '+':
        default:
            $c = $a + $b;
            break;
    }

    echo $str ="$a $s $b" ."=".$c . "\n";

    $fp = fopen("calc.txt", "a+");
    fwrite($fp, $str."\n");
    fclose($fp);

    ?>

</body>

</html>