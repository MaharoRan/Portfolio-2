<?php
session_start() ;
unset($_SESSION["autorisation"]);
 header("location:index.php");
?>
