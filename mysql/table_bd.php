<?php
$servername="zaycevanastya";
$username="root";
$password="";
$dbname="testbd";

$conn= new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){

    echo "Connection failed:".$conn->error;
}

$sql="INSERT INTO users (name, surname, password)

    VALUES('Ivan','Ivanov','12345')
 ";

 if($conn->query($sql)===TRUE){
     echo "Yes";
 }else{
     echo "No:".$conn->error;
 }




?>