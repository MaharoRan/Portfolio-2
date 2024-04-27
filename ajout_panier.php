<?php
session_start();
include "header.php";
include "footer.php";
$id=$_GET["choix"];

if (!isset($_SESSION['panier'] ))
{
    $_SESSION ['panier']=array();//creation de la variable de session
}
if (isset($_SESSION['panier'][$id])){
    $_SESSION['panier'][$id]++;//ajoute 1 à la quantité
}
else {
    $_SESSION['panier'][$id]=1;//sinon met un dans la quantité
}
$_SESSION['succes']='le produit a été ajouté au panier';
unset($_SESSION['succes']);
header ("location:index.php");