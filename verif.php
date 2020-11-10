<?php
session_start();
require_once("function.php");
$email=$_POST["EMAIL"];
$mot_pass=$_POST["mot_pass"];
$cnx=getConnection();
$rst=mysqli_query($cnx,"select *from bricoleur where email='{$email}'");
$exist=0;
if(mysqli_num_rows($rst)>0){
while($d=mysqli_fetch_array($rst)){
    $_SESSION["id"]=$d["id"];
    $_SESSION["bricoleur"]=$d["prenom"]." ".$d["nom"];
$exist=1;
}
}

if($exist==0){
    $_SESSION["erreur"]="Merci pour votre connexion";
    $_SESSION["type_erreur"]="warning";
    header("location:connexion.php");
}else {

    header("location:accueil.php");
}
?>