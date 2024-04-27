<?php
define("BDD","bonbons");
define("HOST","localhost");
define("USER","root");
define("MDP","");

function connect(){
try {
    $connect=new PDO('mysql:host='.HOST.';dbname='.BDD,
    USER,
    MDP);
    return $connect ;
    } catch(PDOException $e){
        echo "problème de connexion à la BDD<br>".$e->getMessage();
        return false;
    }
}
?>