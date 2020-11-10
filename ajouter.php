<?php
session_start();
require_once("function.php");
$id_compte=$_SESSION["id_compte"];
$specialite=$_GET["specialite"];
$experience=$_GET["experience"];
inscri_bricoleur($specialite,$experience,$id_compte);

header("location:accueil.php");
