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
    function foo()
    {
        function bar()
        {
            echo "I don't exist until foo() is called.\n";
        }
    }
    //мы пока не можем обратиться к bar(),поскольку она еще не определена//
    foo();
    //теперь мы можем вызвать ф-ю bar(), обработка foo() сделала ее доступной//
    bar();
    ?>
</body>
</html>