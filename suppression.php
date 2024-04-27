<?php
session_start();
//if($_SESSION["autorisation"]=="OK"){
?>
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
<h1>Nos produits</h1>
<div class='container'>
      <div class='row'>
<?php

//connexion BDD
include "config.php";
$bdd=connect();
//requete SQL

if (isset ($_GET["choix"])) {
    $produit=$_GET["choix"];
    $sql="delete from produit where id='$produit'";
     $resultat=$bdd->exec($sql);
     header("location: index.php");
    }

$sql="select * from produit";
//execution de la requete
$resultat=$bdd->query($sql);
while($produit=$resultat->fetch(PDO::FETCH_OBJ)){
    ?>
    <div class='container-fluid'>
      <div class='row'>
      <div class='card bg-primary' style='width: 18rem;'>
          <div class='card-body '>
          <img src="<?= $produit->photo?>">
              <h2 class='card-title'><?=$produit->nom ?></h2>
              <h3 class='card-subtitle mb-2 text-light'><?=$produit->prix ?>$</h3>
    <?php echo "<a href='suppression.php?choix=$produit->id' ><button type='button' class='btn btn-danger'>Supprimer</button></a>" ?>
    <?php echo "<a href='modification.php?choix=$produit->id'><button type='button' class='btn btn-danger'>Modifier</button></a>"?>
    </div>
    </div>"
    <?php
}

//else{
   // echo "page interdite" ;
//}
?>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>