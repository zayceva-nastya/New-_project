<?php
header("Content-Type: text/plain");  //интерпритирует html код
$html = file("https://ru.wikipedia.org/wiki/%D0%AF%D0%BD%D0%B2%D0%B0%D1%80%D1%8C");
foreach ($html as $key => $value) {
 echo $key . '|' . $value;
    }


    ?>
    
