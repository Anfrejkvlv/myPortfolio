<?php
$hostname="localhost";
$user="root";
$pwd="";
$conn="";
try {
    $conn=mysqli_connect($hostname,$user,$pwd);
   //echo "OK";
}catch (Exception $e){
    echo "Erreur".mysqli_connect_error();
    exit();
}
