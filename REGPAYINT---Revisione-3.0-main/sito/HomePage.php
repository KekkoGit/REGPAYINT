<!DOCTYPE html>
<html lang="it">

  <head>
    <title>Home REGPAYINT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" href="css/img.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/cssMulticolor.css">
    <link rel="stylesheet" href="css/dark-date-picker.css">
    <link rel="img/logoBianco.png" type="img/logoBianco.png" href="favicon.ico">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </head>

<body>
<?php include "HeadPage.php";?>
<br><br><br>
  
    <center><div> 
      <h2><b>Benvenuto nel sito di </b></h2> 
      <h2><span class="titolo"><span class="multicolortextGoogle"><b>REGPAYINT</b></span></span></h2>
      <br></br>
    </div></center>
      <div class='container'>
      <h1><br>Una piattaforma internazionale per la gestione efficace di <b>iscrizioni & pagamenti</b>
      
      <br> <br> Inizia subito! 
      <a a href="RegistrazioneAccount.php"><span class="multicolortextGoogle"><b>Crea un account</a></b></span> 
      <br></br>
      <?php
      if (isset($_SESSION['email']) && isset($_SESSION['nome']) && isset($_SESSION['idIscrizione'])) {
        echo "Benvenuto/a, <b>" . $_SESSION['nome'] . " (" . $_SESSION['email'] . ") </b>";
      } else {
        echo "Effettua il <b>login</b> per visualizzare le tue informazioni.";
      }
      ?>
      
    </div>

    <br></br>
<img class="Img" src="img/logo_scritta.png" width="400" height="auto">  
      <br></br>

<?php include "FooterPage.php" ?>

</body>
</html>


<style>
  
</style>
