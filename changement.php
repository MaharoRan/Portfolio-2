<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>
<body>
<?php
include "config.php";
$bdd=connect();
$produit=$_POST["choix"];
$bonbon=$_POST["nom"];
$prix=$_POST["prix"];
$image=$_POST["doc"];
/*
$destination="images/$image" ;
move_uploaded_file($_FILES["doc"]["tmp_name"], $destination);*/
$sql="update produit set nom='$bonbon', prix='$prix', photo='$image' where id=$produit";
echo $sql;
$resultat=$bdd->exec($sql);
header("location:index.php");

?>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>