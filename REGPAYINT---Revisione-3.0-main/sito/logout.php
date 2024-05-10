<?php include "Homepage.php";
   session_start();
   unset($_SESSION["nome"]);
   unset($_SESSION["cognome"]);
   unset($_SESSION["email"]);
   unset($_SESSION["idIscrizione"]);
   echo '<h4>You have cleaned session</h4>';
   header('Refresh: 2; URL = login_email.php');
?>