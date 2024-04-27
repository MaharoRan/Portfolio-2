
<?php
include "header.php";
include "config.php";
include "footer.php";
$bdd=connect();
?>
 <form action="verif.php" method="POST" enctype="multipart/form-data">
        <div class="container bg-secondary">
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputEmail1" class="form-label text-light">Identifiant</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Identifiant" name="login">
   </div>
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputSurname" class="form-label text-light">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputNom1" placeholder="Mot de passe" name="mdp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>