<?php
require "salon.php";
  $bdd=connect();
  $nom=$_POST["nom"];
  $type=$_POST["exposant"];
  $sql="insert into exposant(NOMEXPOSANT,CODE_TYPE) values('$nom','$type')";
  echo $sql;
  $bdd->exec($sql);
  ?>