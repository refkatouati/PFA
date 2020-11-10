<?php
session_start();
require_once("function.php");
$nom=$_POST["last_name"];
$prenom=$_POST["first_name"];
$email=$_POST["EMAIL"];
$mot_pass=$_POST["mot_pass"];
$country=$_POST["country"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$image=$_POST["image"];
$cnx=getConnection();
mysqli_query($cnx,"insert into compte values(null,'{$nom}','{$prenom}','{$age}','{$email}','{$mot_pass}','{$country}','{$city}','{$phone}','{$image}','bricoleur')");
$id_compte=mysqli_insert_id($cnx);
$_SESSION["id_compte"]=$id_compte;
$_SESSION["nom"]=$nom;
$_SESSION["prenom"]=$prenom;
$_SESSION["email"]=$email;
$_SESSION["mot_pass"]=$mot_pass;
$_SESSION["country"]=$country;
$_SESSION["city"]=$city;
$_SESSION["phone"]=$phone;
$_SESSION["bricoleur"]=$nom." ".$prenom;



header("location:inscri_bricoleur2.php");
    
?>
