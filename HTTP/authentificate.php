<?php
 header('WWW-Authenticate: Basic realm="Test Authentication System');
 echo $_SERVER['PHP_AUTH_USER'];// имя пользователя
 echo $_SERVER['PHP_AUTH_PW']; //пароль
 ?>