<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="inscription_ok.php" method="POST">
        <div class="container bg-secondary">
  <div class="mb-3 mt-3 ms-3 me-3">
    <label for="exampleInputEmail1" class="form-label text-light">Nom de l'exposant </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez son nom" name="nom">
   </div>
  <label>Type de l'exposant</label>
  <select name="exposant">
    <?php
    require "salon.php";
    $bdd=connect();
    $sql="select * from type_exposant";
    $resultat=$bdd->query($sql);
    while ($type=$resultat->fetch(PDO::FETCH_OBJ)){
    ?>
        <option value=<?php echo $type->CODE_TYPE?>><?php echo $type->DESCRIPTION_EXPOSANT?></option>
        <?php
    }
    ?>
  </select>
  <button type="submit" class="btn btn-light">Inscrire</button>

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>