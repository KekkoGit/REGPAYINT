<!DOCTYPE html>
<html lang="it">

  <head>
    <title>Home REGPAYINT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="font.css"/>
    <link rel="stylesheet" href="cssFooter.css"/>
    <link rel="stylesheet" href="cssMulticolor.css"/>
    <link rel="stylesheet" href="cssButton.css"/>
  </head>

<body>

<?php include 'HeadPage.php';?>

<?php
if (isset($_SESSION['email']) && isset($_SESSION['nome']) && isset($_SESSION['idIscrizione'])) {
    echo "<h2><span class='multicolortextGoogle'><b>Vuoi creare un nuovo versamento" . $_SESSION['nome'] . "?</b></span><h2><b>;";
    
    include 'Pagamentiphp.php';
    
  } else {
    echo "<h2><span class='multicolortextGoogle'>Effettua il <b>login</b> per creare un nuovo pagamento</span>";
  }
?>


<?php include 'FooterPage.php';?>