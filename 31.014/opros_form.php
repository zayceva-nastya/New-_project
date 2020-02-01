<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="opros1.php" method="post">
<?php
$arr=file('opros.csv');
?>
<h3><?=$arr[0]?></h3>

<?php
for($i=1;$i<count($arr);$i++){
    $buf=explode(" - ",$arr[$i])[0];
echo "<label><input type='radio' name='vot'  value='$i'>$buf</label><br>";
  
}

?>
<input type="submit" value="ok">
</form>
</body>
</html>
