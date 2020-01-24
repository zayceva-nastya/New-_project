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
$string="winter winter";
$string1="зима";
echo ucfirst($string).'<br>';
echo ucwords($string).'<br>';
echo strtoupper($string).'<br>';
echo strtolower($string).'<br>';
echo str_shuffle($string).'<br>';
echo mb_strtoupper($string1).'<br>';
echo mb_strtolower($string1).'<br>';


?>
    
</body>
</html>