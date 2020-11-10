<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["bricoleur"]);
$_SESSION["erreur"]="Merci ";
$_SESSION["type_erreur"]="warning";
header("location:connexion.php");