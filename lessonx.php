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
    echo 'Hello, World';
    echo '<br>'
    ?>
    <?php
    $a = 5;
    $a = $a << 1;
    echo $a;
    echo '<br>'
    ?>
    <?php
    $b = 5;
    $a = ~$b;
    echo $a;
    echo '<br>';
    ?>
    <?php
    $bool = TRUE;
    $str = "foo";
    $int = 12;
    echo gettype($bool); //выводит boolean
    echo gettype($str); //выводит string
    // усли это целое увелич на 4
    if (is_int($int)) {
        $int += 4;
        echo $int;
    }
    //eсли $bool это строка вывести её
    //ничего не выводит
    if (is_string($bool)) {
        echo 'Строка; $bool';
    }



    ?>
    <?php
    $a = 123;
    echo $a;
    echo '<br>';
    $b = -123;
    echo $b;
    echo '<br>';
    $c = 0123;
    echo $c;
    echo '<br>';
    $d = 0x1A;
    echo $d;
    echo '<br>';
    ?>

    <?php
    $a = 1.234;
    echo $a;
    echo '<br>';
    $b = 1.2e3;
    echo $b;
    echo '<br>';
    $c = 7e-10;

    echo number_format($c);
    ?>

    <?php
    //   echo 'чтобы вывести \ 'надо перед ней поставить \\';
    //   
    ?>

    // <?php
        //   echo 'Это не вставит: \n новую строку';
        //   
        ?>
    <?php
    $a = 3;
    echo "\$a=$a";
    echo '<br>';
    ?>
    <?php
    $a = 3;
    echo "\$a=$a";

    ?>
    <?php

    echo " <br> \n new string";
    echo "\r возврат коретки ";
    echo "ковычка \" ";
    echo '<br>';
    ?>
    <?php
    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"];
    echo $arr[12];
    echo '<br>';
    ?>
    <?php
    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"];
    echo $arr[12];
    echo '<br>';
    ?>
    <?php
    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));
    echo $arr["somearray"][6];
    echo $arr["somearray"][13];
    echo $arr["somearray"]["a"];
    echo '<br>';
    ?>
    <?php
    $arr = array(5 => 43, 32, 56, "b" => 12);
    echo "<pre>";
    echo $arr[5];
    echo $arr[6];
    echo $arr[7];
    echo $arr["b"];

    echo '<br>';
    echo print_r($arr);
    echo "</pre>";
    ?>
    <?php
    echo "<pre>";
    $arr = array(5 => 1, 12 => 2);
    echo print_r($arr);
    $arr[] = 56;
    echo print_r($arr);
    $arr["x"] = 42;
    echo print_r($arr);
    unset($arr[5]);
    echo print_r($arr);
    unset($arr);
    echo print_r($arr);
    echo "</pre>";
    ?>
    <?php
    class foo
    {
        function do_foo()
        {
            echo "Doing foo.";
        }
    }
    $bar = new foo;
    $bar->do_foo();
    echo '<br>';
    ?>
    <?php
    $a = 79;
    $b = 15;
    if ($a > $b)
        echo " a больше чем b"; //если нужно выполнить толькро одно
    echo '<br>';
    ?>
    <?php
    if ($a > $b) {
        echo "a больше,чем b"; // если нужно больше,чем одно
        $b = $a;
    }

    ?>
    <?php
    $a = 3;
    $b = 8;
    if ($a > $b) {
        echo "a is greater than b"; // если нет, то иначе
    } else {
        echo "a is NOT greater than b ";
    }
    echo '<br>'
    ?>
    <?php
    $a = 1;
    $b = 1;
    if ($a > $b) {
        echo "a is bigger than b"; // если нет, то иначе
    } elseif ($a === $b) {
        echo "a is equal b ";
<<<<<<< HEAD
    } else "a is smaller than b";
    echo '<br>';
    ?>
    <?php
    $a = 5;
    if ($a == 5) : ?>
        A is equal to 5
    <?php endif; ?>
    <?php if ($a == 5) { ?>
        A is equal to 5
    <?php }; ?>

    <?php

    echo '<br>';
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    ?>
    <?php
    echo '<br>';
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i . "<br>";
    }
    ?>
    <?php
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }
    ?>
    <?php
    echo '<br>';
    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
        $s = $s + $i;
    }
    echo $s;
    ?>
    <?php
    echo '<br>';
    $arr = array("one", "two", "three");
    foreach ($arr as $value) {
        echo "Value: $value";
    }
    ?>
    <?php
    echo '<br>';
    $arr = array("one", "two", "three");
    foreach ($arr as $key => $value) {
        echo "Key: $key; Value: $value<br />\n";
    }
    ?>
    <?php
    echo '<br>';
    $s = 0;
    $arr = array(1, 2, 3, 4, 5);
    foreach ($arr as $value) {
        $s = $s + $value;
    }
    echo $s;
    ?>
    <?php
    echo '<br>';
    $i = 1;
    while ($i <= 10) {
        echo $i++;
    }
    ?>
    <?php
    echo '<br>';
    $i = 1;
    while ($i <= 10) : //вместо фигурных скобок : i endwhile
        echo $i;
        $i++;
    endwhile;
    ?>

    <?php
    echo '<br>';
    $i = 1;
    $s = 0;
    while ($i <= 10) {
        $s = $s + $i;
        $i++;
    }
    echo $s
    ?>
    <?php
    echo '<br>';
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);
    ?>
    <?php
    echo '<br>';
    $i = 0;
    $s = 0;
    do {
        $s = $s + $i;
        $i++;
    } while ($i <= 10);
    echo $s;
    ?>
    <?php
    echo '<br>';
    $i = 3;
    $s = 1;
    while ($i <= 12) {
        $s = $s * ($i * $i);
        $i++;
    }
    echo $s
    ?>
    <?php
    echo '<br>';
    $i = 5;
    switch ($i) {
        case 4:
            echo 4;
            break;
        case 5:
            echo 5;
            break;

        default:
            echo "\$i=$i";
            break;
    }
    ?>
    <?php
    echo '<br>';
    $i = 7;
    switch ($i) {
        case 1:
            echo "один";
            break;
        case 2:
            echo "два";
            break;
        case 3:
            echo "три";
            break;
        case 4:
            echo "четыре";
            break;
        case 5:
            echo "пять";
            break;
        case 6:
            echo "шесть";
            break;
        case 7:
            echo "семь";
            break;
        
        default:
            echo "нет такого числа";
            break;
    }
    ?>


=======
    }else "a is smaller than b";
    ?>
    <?php 
    if($a==$b);
    echo "a aquals 5";
    echo "...";
    elseif ($a==6);
    echo "a aquals 5";
    echo "!!!";
else: 
    echo "a is neither 5 nor 6";
endif;
?>
>>>>>>> eb47b93697e3a6505ae3a2e783eb7b29ba37ec12
</body>

</html>
