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