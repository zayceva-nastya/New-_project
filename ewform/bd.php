<?php
$servername="localpost";
$username="root";
$password= "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die ("Connection failed");
}
echo "Connection successfully";
?>