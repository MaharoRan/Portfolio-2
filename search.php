<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
include "config.php";
$bdd=connect();
$search=strtolower($_POST["bonbon"]);
$sql="select * from produit where lower(nom) like '$search'";
$resultat=$bdd->query($sql);
while($produit=$resultat->fetch(PDO::FETCH_OBJ)){
    echo "<section id='principale'>
    <div class='container-fluid'>
      <div class='row'>
      <div class='card col-3' style='width: 18rem;'>
          <div class='card-body bg-primary'>
          <img src=".$produit->photo.">
              <h2 class='card-title'>".$produit->nom."</h5>
              <h3 class='card-subtitle mb-2 text-light'>".$produit->prix."$</h6>
    <button type='button' class='btn btn-danger'>Ajouter au panier</button>
    </div>
    </div>
    </div>
    </div>";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>