<?php
include_once 'db.php';
try{
    $rq1="CREATE DATABASE if not exists portfolio_contact";
    $stm=$conn->prepare($rq1);
    $stm->execute();
    //echo"créer avec succes<BR>";
    //echo "Creer";
}catch(Exception $e){
    //echo"erreur lors de la création de la base<BR>".$e->getMessage();
}
try{
    $selec="USE portfolio_contact";
    mysqli_query($conn,$selec);
    //echo 'USE';
}catch(Exception $e){
   // echo"erreur de selection<BR>".$e->getMessage();
}

try{$req="CREATE TABLE `contact` (
  `id` int primary key auto_increment NOT NULL,
  `Nom_Prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
)";
    mysqli_query($conn,$req);
}catch(Exception $e){
    //echo"erreur lors de la création de la base <BR>".$e->getMessage();
}