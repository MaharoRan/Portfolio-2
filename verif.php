<?php
//demarrer une session
session_start();
include "header.php";
//
$login=$_POST["login"];
$mdp=$_POST["mdp"];
//connexion au sereveur BDD
include "config.php";
$bdd=connect();
//
$sql="select * from admin where login='$login'and mdp='$mdp'";
//
$resultat=$bdd->query($sql);
//
$log=$resultat->fetch(PDO::FETCH_OBJ);
var_dump($log);
//
$nblignes=$resultat->rowCount();
echo $nblignes;
//
if($nblignes==0){
   header("location:index.php");
}
else{
    $_SESSION["admin"]=$log->login;
    $_SESSION["autorisation"]="OK";
  header("location:accueilAdmin.php");
}
?>