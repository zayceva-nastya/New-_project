<?php
//тип файла
header('Content-type: application/pdf');
//имя файла
header('Content-Disposition: attachment; filename="good.pdf"');
//файл
readfile('Good_day.pdf');
?>