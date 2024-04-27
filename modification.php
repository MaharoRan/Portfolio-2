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
    $produit=$_GET["choix"];
    $sql="select * from produit where id=$produit";
     $resultat=$bdd->query($sql);
     while($produit=$resultat->fetch(PDO::FETCH_OBJ)){
        echo " <form action='changement.php' method='POST' enctype='multipart/form-data'>
        <div class='container bg-secondary'>
  <div class='mb-3 mt-3 ms-3 me-3'>
    <label for='exampleInputEmail1' class='form-label text-light'> Entrez le nouveau produit </label>
    <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' value='$produit->nom' name='nom'>
   </div>
  <div class='mb-3 mt-3 ms-3 me-3'>
    <label for='exampleInputSurname' class='form-label text-light'>Entrez le nouveau prix</label>
    <input type='text' class='form-control' id='exampleInputNom1' value='$produit->prix' name='prix'>
  </div>
  <div class='mb-3 mt-3 ms-3 me-3'>
    <label for='exampleInputSurname' class='form-label text-light'>Entrez la nouvelle image </label>
    <input type='text' name='doc' class='form-control' id='exampleInputNom1' value='$produit->photo'>
  </div>
    <input type='hidden' name='choix'  value='$produit->id'>
  <button type='submit' class='btn btn-primary'>Valider les modifications</button>
</form>";
     }
     ?>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>