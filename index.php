<?php
include "header.php" ;
?>

    <h1>Nos produits</h1>
    <div class='container'>
    <div class='row'>
<?php

//connexion BDD
include "config.php";
$bdd=connect();
//requete SQL
$sql="select * from produit";
//execution de la requete
$resultat=$bdd->query($sql);
while($produit=$resultat->fetch(PDO::FETCH_OBJ)){
    ?>
    
 
      <div class='card m-2 bg-primary' style='width: 18rem;'>
          <div class='card-body'>
                <img src="<?= $produit->photo?>">
                 <h2 class='card-title'><?=$produit->nom ?></h2>
                  <h3 class='card-subtitle mb-2 text-light'><?=$produit->prix ?>$</h3>
                  <a href="ajout_panier.php?choix=<?= $produit->id ?>" class='btn btn-danger'>Ajouter au panier </a>
            </div>
        </div>
    <?php
}
?>
</div>
</div>
    
<?php
if(!empty($_SESSION['succes'])){
    ?>
    <div class="alert alert-success" role="alert" data-auto-dismiss="2000">
        <?php echo $_SESSION['succes'];?>
</div>
<?php 
}
include "footer.php" ;
?>