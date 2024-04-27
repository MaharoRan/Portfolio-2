<?php
session_start();
include "header.php";
?>
<h1>Votre panier</h1>
<table class="table-bordered">
    <thead>
      <tr>
        <td>Produit</td>
        <td>Prix unitaire</td>
        <td>Quantité</td>
        <td>Montant</td>
        <td></td>
        <td></td>
      </tr>
<?php 
$total=0;
$panier=$_SESSION['panier'];
include "config.php";
$bdd=connect();
foreach($panier as $id=>$quantite){
    $sql="select * from produit where id =$id ";
    $resultat=$bdd->query($sql);

    $produit=$resultat->fetch(PDO::FETCH_OBJ) ;
    $montant=$quantite*$produit->prix;
        echo "
        <tbody>
        <tr>
          <td>$produit->nom</td>
          <td>$produit->prix</td>
          <td>$quantite</td>
          <td>$montant $</td>
          <td><a href='ajoutpanier2.php?choix=$produit->id'>Ajouter</a></td>
          <td></td>
        </tr>" ;
      $total=$montant+$total;
    }
echo "<tr>
<td>Total HT=$total$ </td>
<td>TVA=20%</td>
<td>Frais de port=5$</td>";
$totales=$total*1.2+5;
echo "<td><h5>Total TTC=$totales $</h5></td>
</tr>";
?>
<?php
include "footer.php";
?>