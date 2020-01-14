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
$makefoo=true;// мы не можем вызвать ф-ю foo () в этом месте, поскольку она еще не определена, но мы можем обратиться к bar()
bar();
if($makefoo){
    function foo()
    {
        echo " I don't exist until program execuation reaches me.\n";
    }
}
    //теперь мы можем благополучно вызвать foo(), поскольку $makefoo() была интерпретирована как true//
    if ($makefoo) foo();
    function bar()
    {
        echo "I exist imediately upon program start.\n ";
    }
    echo "<br>";
    ?>
   
</body>
</html>