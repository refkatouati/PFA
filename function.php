<?php 

function getConnection(){
	
	return mysqli_connect("localhost","root","","pfa");
}	 
function inscri_compte($nom,$prenom,$age,$email,$mot_pass,$country,$city,$phone){
    $cnx=getConnection();
    mysqli_query($cnx,"insert into compte values(null,'{$nom}','{$prenom}','{$age}','{$email}','{$mot_pass}','{$country}','{$city}','{$phone}','{$image}','bricoleur')");
   
    mysqli_close($cnx);
}
function inscri_bricoleur($specialite,$experience,$id_compte){
    $cnx=getConnection();
    mysqli_query($cnx,"insert into bricoleur1 values(null,'{$specialite}','{$experience}',$id_compte)");
   
    mysqli_close($cnx);
}
function inscri_user($nom,$prenom,$email,$mot_pass,$country,$city,$phone){
    $cnx=getConnection();
    mysqli_query($cnx,"insert into user values(null,'{$nom}','{$prenom}','{$email}','{$mot_pass}','{$country}','{$city}','{$phone}','bricoleur'))");
   
    mysqli_close($cnx);
}
function getAllBricoleurs(){
    $cnx=getConnection();
   $req= mysqli_query($cnx,"SELECT * FROM `compte` ,`bricoleur1` WHERE `type_account`='bricoleur'AND compte.id_compte = bricoleur1.id_compte;");
    $tab=[];
	while($d=mysqli_fetch_array($req)){

		$tab []=$d;

	}
	mysqli_free_result($req);
	mysqli_close($cnx);
	return $tab;
   
}

function getAllBricoleursByService($id){
    $cnx=getConnection();
	$req=mysqli_query($cnx,"SELECT * FROM `compte` ,`bricoleur1` WHERE `type_account`='bricoleur'AND compte.id_compte = bricoleur1.id_compte and bricoleur1.specialite='{$id}'");
	$tab=[];
	while($d=mysqli_fetch_array($req)){

		$tab []=$d;

	}
	mysqli_free_result($req);
	mysqli_close($cnx);
	return $tab;
}
function Recherche($id){
    $cnx=getConnection();
	$req=mysqli_query($cnx,"SELECT * FROM `compte` ,`bricoleur1` WHERE  `type_account`='bricoleur' AND
	compte.id_compte = bricoleur1.id_compte AND (nom  LIKE '{$id}' OR prenom  LIKE '{$id}' OR city  LIKE 
	'{$id}'	OR country  LIKE '{$id}'OR experience  LIKE '{$id}' );");
	$tab=[];
	while($d=mysqli_fetch_array($req)){

		$tab []=$d;

	}
	mysqli_free_result($req);
	mysqli_close($cnx);
	return $tab;
}
function getAllSpecialite(){
    $cnx=getConnection();
   $req= mysqli_query($cnx,"SELECT  `specialite`FROM `bricoleur` ");
    $tab=[];
	while($d=mysqli_fetch_array($req)){

		$tab []=$d;

	}
	mysqli_free_result($req);
	mysqli_close($cnx);
	
    return $tab;
}