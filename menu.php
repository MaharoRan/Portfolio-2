<?php
session_start();
if($_SESSION["autorisation"]=="OK"){
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <form action="insertion.php" method="POST" enctype="multipart/form-data">
        <div class="container bg-secondary">
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputEmail1" class="form-label text-light">Nom du produit</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le produit" name="nom">
   </div>
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputSurname" class="form-label text-light">Prix du produit</label>
    <input type="text" class="form-control" id="exampleInputNom1" placeholder="Entrez son prix" name="prix">
  </div>
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputSurname" class="form-label text-light">Image</label>
    <input type="file" name="doc" class="form-control" id="exampleInputNom1" placeholder="tel">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>